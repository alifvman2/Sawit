@extends('auth.layouts.app')

@section('content')
    
    <div class="mx-auto col-10 col-md-8 col-lg-8 py-5">
        <form class="py-5" method="POST" action="{{ route('login.custom') }}" autocomplete="off">
            @csrf
            <h2 class="d-flex justify-content-center fw-normal mb-3 pb-3 fw-bold" style="color: #2F5631;">Selamat Datang</h2>
            <h4 class="d-flex justify-content-center fw-normal mb-3 pb-3 py-2" style="color: #2F5631;">Di Aplikasi Promosi BPDPKS</h4>
            <div class="form-group py-2">
                <label class="px-1 form-label" for="email_address">Email</label>
                <input type="email" id="email_address" value="" class="form-control form-control-lg transparent-input" name="email" required autocomplete="off" aria-autocomplete="none" autofocus />
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="form-group py-2 mt-3">
                <label class="px-1 form-label" for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control form-control-lg transparent-input" required autocomplete="new-password" />
                @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>
            <button type="submit" class="col-12 btn btn-lg btn-block bg-dark-green white mt-5">Login</button>
            <div class="col-8 pt-5">
                <p class="pt-5">Belum Punya Daftar Jadi Mitra Silahkan Melakukan Registrasi <a href="{{ route('register-user') }}">disini</a></p>
            </div>
        </form>
    </div>

@endsection