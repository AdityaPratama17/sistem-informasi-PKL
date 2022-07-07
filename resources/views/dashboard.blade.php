@extends('base')

@section('sidebar')
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{ route('dashboard') }}" class="nav-link active">
                    <i class="nav-icon fas fa-home"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('login.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-sign-in-alt"></i>
                    <p>
                        Login
                    </p>
                </a>
            </li>
        </ul>
    </nav>
@endsection

@section('content-header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div>
                {{-- breadcrumb --}}
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('main-content')
    <div class="card card-primary card-outline">
        <div class="card-body text-center">
            <h3 class="text-primary font-weight-bold">PT. XYZ</h3>
            <p class="card-text">PT. XYZ adalah perusahaan pengembangan perangkat lunak global yang menawarkan konsultasi teknis sesuai permintaan, desain produk, manajemen proyek, dan layanan implementasi teknik. PT. XYZ juga aktif melakukan penelitian dan pengembangan, serta telah menghasilkan beberapa perusahaan Internet baru di bidang perdagangan elektronik (e-commerce).</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="text-primary font-weight-bold">Misi kami</h5>
                    <p class="card-text">Membangun sekaligus menjalankan 3 bidang usaha yang bergerak dibidang jasa konsultan TIK, bidang riset terkait TIK, dan bidang Pendidikan TIK.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="text-primary font-weight-bold">Visi kami</h5>
                    <p class="card-text">Menjadi solusi bagi semua permasalahan IT khususnya Software, Kecerdasan Buatan (AI), dan Internet of Things (IoT), agar lingkungan usaha serta kehidupan sehari-hari kita menjadi lebih mudah dan lebih efisien.</p>
                </div>
            </div>
        </div>
    </div>
@endsection