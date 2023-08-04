<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use App\Models\AccessToken;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller
{

    public function index()
    {
        return view('auth.login');
    }  
      
    public function customLogin(Request $request)
    {
        try {

            $input = $request->all();

            $fieldType = filter_var($request->email, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
            if (auth()->attempt(array($fieldType => $input['email'], 'password' => $input['password']))) {
                $user = Auth::user();
                
                $accessToken = AccessToken::updateOrCreate(
                    [ 'user_id' => $user->id ],
                    [ 'access_token' => Str::random(255) ]
                );

                Session::put('access_token', $accessToken->access_token);
                return redirect()->route('home.index')->withSuccess('You have signed-in');
            
            } else {
            
                return response()->json([ 'message' => 'Invalid credential' ]);
            
            }

        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function registration()
    {

        return view('auth.registration');
    }
      
    public function customRegistration(Request $request)
    {  
        $request->validate([
            'nama_lengkap' => 'required',
            'email' => 'required|email|unique:users',
            'no_telp' => 'required',
            'nama_mitra' => 'required',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
        
        if ($request->jenis_mitra == "Perusahaan") {
            return view('form.mitra_perusahaan')->withSuccess('You have signed-in');
        }elseif ($request->jenis_mitra == "Kuliah") {
            return view('form.mitra_kuliah')->withSuccess('You have signed-in');
        }elseif ($request->jenis_mitra == "Asosiasi") {
            return view('form.mitra_asosiasi')->withSuccess('You have signed-in');
        }

        return redirect("dashboard")->withSuccess('You have signed-in');
    }

    public function create(array $data)
    {
        return User::create([
            'nama_lengkap' => $data['nama_lengkap'],
            'email' => $data['email'],
            'no_telp' => $data['no_telp'],
            'nama_mitra' => $data['nama_mitra'],
            'password' => Hash::make($data['password'])
        ]);
    }    
    
    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }
  
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    
    public function logout() {
        try {
            $accessToken = AccessToken::where('access_token', Session::get('access_token'))->first();

            if ($accessToken) {
                $accessToken->delete();
                
                auth()->logout();

                return redirect('/');

            }
            
            return response()->json([ 'success' => false ]); 
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}