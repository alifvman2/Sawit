<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Kelapa Sawit</title>
    <link href="{{ URL::to('asset/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::to('asset/css/style.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body class="h-100 p-100 align-middle">
    <div class="row">
        <nav class="navbar navbar-light bg-green h-100 w-100 align-middle">
            <div class="container bg-green mx-2">
                <a class="navbar-brand white" href="{{ route('home.index') }}">
                    <img src="{{ URL::to('/asset/img/logo.png') }}" class="img-thumbnail img-fluid" alt="">
                    Aplikasi Kegiatan Promosi BPDPKS
                </a>
            </div>
            <div class="px-5" style="padding-left: 0px!important;">
                <button class="btn btn-danger mx-5">100 new</button>
                <button class="btn btn-warning">200 new</button>
                <a class="white px-5" href="{{ route('home.index') }}" style="padding-right: 20px!important;">
                    <small>{{ auth()->user()->nama_lengkap }}</small>
                </a>
                <li class="btn white dropdown user-menu pull-right dropdown-yellow dropdown-caret dropdown-closer" style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);" id="accountmenu">
                    <a class="dropdown-toggle white" data-toggle="dropdown">{{ substr(auth()->user()->nama_lengkap, 0, 1); }}<b class="caret"></b></a>
                    <ul class="dropdown-menu" style="right: 0px; left: 0px">
                        <li><a href="{{ route('logout') }}">Logout</a></li>
                    </ul>
                </li>
            </div>
        </nav>
    </div>
    <div class="row p-3">
        <div class="mx-auto col-2"><a href=""><h6 class="px-3 dark-green overBold">Pengajuan Proposal</h6><p class="abu px-3 fs-08">Form Pengajuan Proposal</p></a></div>
        <div class="mx-auto col-2"><a href=""><h6 class="px-3 dark-green overBold">Review & Evaluasi Proposal</h6><p class="abu px-3 fs-08">Revisi atau Penolakan Proposal Promosi</p></a></div>
        <div class="mx-auto col-3"><a href=""><h6 class="px-3 dark-green overBold">Rekomendasi & Persetujuan</h6><p class="abu px-3 fs-08">Rekomendasi Direktur & Persetujuan Direktur Utama</p></a></div>
        <div class="mx-auto col-3"><a href=""><h6 class="px-3 dark-green overBold">Penyusunan Perjanjian Kerjasama</h6><p class="abu px-3 fs-08">Rekomendasi Direktur & Persetujuan Direktur Utama</p></a></div>
        <div class="mx-auto col-2"><a href=""><h6 class="px-3 dark-green overBold">Monev</h6><p class="abu px-3 fs-08">Monitoring & Evaluasi</p></a></div>
    </div>
    @yield('content')
</body>
</html>