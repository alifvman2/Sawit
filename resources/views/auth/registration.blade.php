@extends('auth.layouts.app')

@section('content')
    
    <div class="mx-auto col-10 col-md-8 col-lg-8 py-5">
        <form class="py-5" method="POST" action="{{ route('register.custom') }}" autocomplete="off">

            <h2 class="d-flex justify-content-center fw-normal mb-3 pb-3 fw-bold" style="color: #2F5631;">Selamat Datang</h2>
            <h4 class="d-flex justify-content-center fw-normal mb-3 pb-3 py-2" style="color: #2F5631;">Di Aplikasi Promosi BPDPKS</h4>
            <div class="form-group py-2">
                <label class="px-1 form-label" for="nama_lengkap">Nama Lengkap</label>
                <input type="text" id="nama_lengkap" value="" class="form-control form-control-lg transparent-input" name="nama_lengkap" required autocomplete="off" aria-autocomplete="none" autofocus />
                @if ($errors->has('nama_lengkap'))
                    <span class="text-danger">{{ $errors->first('nama_lengkap') }}</span>
                @endif
            </div>
            <div class="form-group py-2">
                <label class="px-1 form-label" for="email">Email</label>
                <input type="email" id="email" value="" class="form-control form-control-lg transparent-input" name="email" required autocomplete="off" aria-autocomplete="none" autofocus />
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="form-group py-2">
                <label class="px-1 form-label" for="no_telp">Nomor Telepon</label>
                <input type="number" id="no_telp" value="" class="form-control form-control-lg transparent-input" name="no_telp" required autocomplete="off" aria-autocomplete="none" autofocus />
                @if ($errors->has('no_telp'))
                    <span class="text-danger">{{ $errors->first('no_telp') }}</span>
                @endif
            </div>
            <div class="form-group py-2">
                <label class="px-1 form-label" for="jenis_mitra">Jenis Mitra</label>
                <select class="form-control custom-select" name="jenis_mitra" id="jenis_mitra">
                    <option value="" selected disabled>-- Pilih Jenis Mitra --</option>
                    <option value="Perusahaan">Perusahaan</option>
                    <option value="Kuliah">Kuliah</option>
                    <option value="Asosiasi">Asosiasi</option>
                </select>
            </div>
            <div class="form-group py-2 mt-3">
                <label class="px-1 form-label" for="password">Password</label>
                <input id="password" type="password" class="form-control form-control-lg transparent-input @error('password') is-invalid @enderror" name="password" autocomplete="password" onchange="check_pass()" required>
            </div>
            <div class="form-group py-2 mt-3">
                <label class="px-1 form-label" for="password">Konfirmasi Password</label>
                <input id="password_confirm" type="password" class="form-control form-control-lg transparent-input " name="password_confirmation" autocomplete="new-password" onchange="check_pass()">
            </div>
            <button type="button" class="col-12 btn btn-lg btn-block bg-dark-green white mt-5">Register</button>
            <div class="col-12 pt-5 text-center">
                <p class="pt-5">Sudah Punya Akun ? Silahkan <a href="{{ route('login') }}">Login</a></p>
            </div>
        </form>
    </div>

    <script type="text/javascript">
        

    </script>

@endsection