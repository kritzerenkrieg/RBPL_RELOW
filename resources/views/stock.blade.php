@extends ('master')

@section('konten')  
<title> Dashboard </title>
<body class="stock">
<div class="container-md" style="font-family:poppins ">
    <p class="mt-3 mb-0 fw-bold text-left" style="font-size: 19px">
        {{auth()->user()->nama}}
    </p>
    <p class="mt-0 mb-4 text-left" style="color: #8a8a8a; font-size: 11px">
        Pengguna umum
    </p>
    <div class="row">
    <img src="{{ asset('img/Hero (1).png') }}" alt="" style="height: 100%; width: auto;" class="rounded-5 mb-1 mx-0">
    <div class="row">
    </div>
        <div class="col-6">
            <p class="mt-3 fw-semibold text-start" style="font-size: 13px">
                Stock & Analytic
            </p>
        </div>
        <div class="col-6">
            <a href="{{url('/stock')}}">
                <p class="mt-3 fw-semibold text-end" style="font-size: 13px; color: #2A49CE;"> 
                    Lihat semua
                </p>
            </a>
        </div>
        </div>
        <div class="row mt-2">
            <div class="col bg-white rounded-5 text-start text-start margin-end-3" style=" height: 150px; width: auto;">
                <p class="fw-medium text-left mt-4 mx-3" style="font-size: 11px; color:#545454;">
                <img src="{{ asset('img/stok.png') }}" alt="" style="height: 15px; width: 15px;" class="me-2"> Stok tersedia
                </p>
                <p class="fw-semibold text-left mt-3 mx-4" style="font-size: 28px; color:#333333;">
                {{ $totalStok }} 
                </p>
                <p class="fw-medium text-left mt-4 mx-4" style="font-size: 9px; color:#506AD7;">

                    Updated {{ \Carbon\Carbon::parse($tanggal_update[0])->format('d F Y') }}

                </p>
            </div>
            <div class="col bg-white rounded-5 text-end text-end ms-3" style="height: 150px; width:auto;">
            <p class="fw-medium text-start mt-4 mx-3" style="font-size: 11px; color:#545454;">
            <img src="{{ asset('img/gdsw.png') }}" alt="" style="height: 15px; width: 15px;" class="me-2">
                    Gudang Sewa
                </p>
                <p class="fw-semibold text-start mt-3 mx-4" style="font-size: 28px; color:#333333;">
                {{ $gudangCount }}
                </p>
                <p class="fw-medium text-start mt-4 mx-4" style="font-size: 9px; color:#506AD7;">

                    Updated {{ \Carbon\Carbon::parse($tanggal_update[0])->format('d F Y') }}

                </p>
            </div>
        </div>
        <div class="row mt-3 mb-5">
            <div class="col bg-white rounded-5" style="height:150px; width:auto;">
            <p class="fw-medium mt-4 mx-4 mb-0" style="font-size: 11px; color:#545454;">
            <img src="{{ asset('img/info.png') }}" alt="" style="height: 15px; width: 15px;" class="me-2">
                Informasi
            </p>
            <p class="text-left mt-3 mx-4" style="color: #8c8c8c; font-size: 10px">
            Saat ini tim kami sedang melakukan pengembangan dengan segenap upaya kami untuk menghadirkan berbagai fitur yang mampu meningkatkan kepuasanmu saat menggunakan produk kami. Mohon pengertiannya!
            </p> <br>
            </div>

        </div>
</body>
@endsection