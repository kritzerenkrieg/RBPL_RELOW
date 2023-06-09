@extends ('master')

@section('konten')  
<title> Dashboard </title>
<body class="stock">
<div class="container-md" style="font-family:poppins ">
    <div class="container-1 bg-white d-flex flex-column px-3">
        <a href="{{url ('/dashboard')}}" class="button-w-icon d-flex">
          <span class="material-symbols-outlined" type="button">arrow_back_ios</span>
          <p class="button-text" type="button">Kembali</p>
        </a>
    </div>
    <p class="mt-4 mb-0 fw-bold text-center" style="font-size: 19px">
        Stock & Analytic
    </p>
    <p class="mt-0 mb-4 text-center" style="color: #8a8a8a; font-size: 11px">
        Cek aktivitas gudangmu secara berkala!
    </p>
   
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
        <p class="mt-3 mb-0 fw-semibold"  style="font-size: 13px;" > 
            Laporan statistik
        </p>
        <div class="row mt-1 mb-3">
            <div class="col bg-white rounded-5" style="height:150px; width:auto;">
            <p class="fw-medium mt-4 mx-4 mb-0" style="font-size: 11px; color:#545454;">
            <img src="{{ asset('img/info.png') }}" alt="" style="height: 15px; width: 15px;" class="me-2">
                Informasi
            </p>
            <p class="text-left mt-3 mx-4" style="color: #8c8c8c; font-size: 10px">
            Saat ini tim kami sedang melakukan pengembangan dengan segenap upaya kami untuk menghadirkan berbagai fitur yang mampu meningkatkan kepuasanmu saat menggunakan produk kami. Mohon pengertiannya!
            </p>
            </div>

        </div>
        <form action="/logout" method="post">
    @csrf
    <button type="submit" class="btn btn-danger ">
        LOGOUT
    </button>
    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime debitis aperiam veritatis dolores possimus sunt, dicta perferendis voluptate similique odit at? Dignissimos provident exercitationem repellat minima est molestias enim suscipit.</p>
    
    </div>
    
</form>
</body>
@endsection