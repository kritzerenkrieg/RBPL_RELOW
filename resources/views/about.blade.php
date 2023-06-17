@extends ('master')
@section ('konten')

 <title>About</title>

<body>
<div class="container-fluid p-0">
      <img src="{{ asset('images/about.png') }}" class="img-fluid no-space" alt="Image Missing">
</div>

<div class="container-2 d-grid card-header">
        <div class="title text-left d-flex flex-column p-4">
          <h2 class="main-title">Tentang Kami</h2>
          <p class="sub-title">Kami adalah penyedia jasa persewaan gudang yang berpengalaman dan terpercaya. Dengan berbagai pilihan gudang yang luas dan lokasi strategis, kami hadir untuk memenuhi kebutuhan penyimpanan dan distribusi barang Anda. Kami memahami betapa pentingnya memiliki ruang penyimpanan yang aman, efisien, dan terorganisir dengan baik untuk menjaga kelancaran operasional bisnis Anda.

            </p>



        </div>


</div>

<div class="container-2 d-grid card-header">
    <div class="title text-left d-flex flex-column p-4">
        <h2 class="main-title text-center">Siapa Kami</h2>
        <p class="sub-title text-center">Penyedia jasa persewaan gudang yang terkemuka dalam industri. Kami adalah tim yang berdedikasi untuk memberikan solusi penyimpanan yang handal dan efisien bagi pelanggan kami.</p>
        <div class="read-more-content" id="read-more">
            <p class="sub-title text-center">Dengan berbagai pengalaman dan pengetahuan di bidang logistik dan manajemen gudang, kami bertujuan untuk menjadi mitra terpercaya bagi bisnis Anda.</p>
        </div>
        <a class="read-more-button w-100 text-center" href="#read-more">Read More</a>
    </div>
</div>



<div class="container-2 d-flex flex-column card-header">
    <div class="title text-left d-flex flex-column p-4">
      <h2 class="main-title">Hubungi Kami</h2>
      <p class="sub-title">Jangan malu-malu untuk cerita kendala dan keluh kesahmu pada kami ya!

        </p>

    </div>
    <div class ="contactperson d-flex">
        <div class="sub-title d-flex w-100">
            <span class="material-icons">
                mail
                </span>
                <p>relowlogistic@gmail.com</p>
        </div>
        <div class="sub-title d-flex w-100">
            <span class="material-icons">
                call
                </span>
                <p>+62 81234567890</p>
        </div>
    </div>

    <div class="row">
        <img src="{{ asset('images/homecard.png') }}" alt="" style="height: 100%; width: auto;" class="rounded-2 mb-0 mx-0">
        <div class="row">


</div>


</body>
</html>
