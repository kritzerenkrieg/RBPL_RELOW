@extends ('master')

@section('konten')  
<title> Dashboard </title>
<body class="stock">
<div class="container-md" style="font-family:poppins ">
    <p class="mt-5 mb-0 fw-bold text-left" style="font-size: 19px">
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
            <p class="mt-3 fw-semibold text-end" style="font-size: 13px; color: #2A49CE;"> 
                Lihat semua
            </p>
        </div>
        </div>
        <div class="row mt-2">
            <div class="col bg-white rounded-5 text-start text-start margin-end-3" style=" height: 150px; width: auto;">
                <p class="fw-medium text-left mt-4 mx-4" style="font-size: 11px; color:#545454;">
                <img src="{{ asset('img/stok.png') }}" alt="" style="height: 15px; width: 15px;" class="me-2"> Stok tersedia
                </p>
            </div>
            <div class="col bg-white rounded-5 text-end text-end ms-3" style="height: 150px; width:auto;">
            <p class="fw-medium text-start mt-4 mx-3" style="font-size: 11px; color:#545454;">
            <img src="{{ asset('img/gdsw.png') }}" alt="" style="height: 15px; width: 15px;" class="me-2">
                    Gudang Sewa
                </p>
            </div>
        </div>
        <div class="row mt-3 mb-3">
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