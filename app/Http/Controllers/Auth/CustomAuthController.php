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
            $user = User::where('email', $request->email)->first();
            if (!$user) {
                return response()->json([ 'message' => 'Invalid credential' ]);
            }

            $check = Hash::check($request->password, $user->password);
            if (!$check) {
                return response()->json([ 'message' => 'Invalid credential' ]);
            }
            
            $accessToken = AccessToken::updateOrCreate(
                [ 'user_id' => $user->id ],
                [ 'access_token' => Str::random(255) ]
            );
            return response()->json([ 'access_token' =>  $accessToken->access_token ]);
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
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("dashboard")->withSuccess('You have signed-in');
    }

    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
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
    
    public function signOut() {
        try {
            $accessToken = AccessToken::where('access_token', $request->access_token)->first();
            if ($accessToken) {
                $accessToken->delete();
                return response()->json([ 'success' => true ]);
            }
            
            return response()->json([ 'success' => false ]); 
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}