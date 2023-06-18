@extends ('master')
@section ('konten')

 <title>About</title>

 <body class="about"  style="background-color: #EAEDFA">
    <div class="about-page-hero">
        <img src="{{ asset('img/about.png') }}" alt="about-img" style="height: auto; width: 100%;" class="about-hero">
    </div>
    <div class="fill-about" style="font-family:poppins">
        <div class="about-wrp" style="background-color: #EAEDFA">
            <div class="about-header d-flex flex-column" style="background-color: #fff">
                <div class="about-header-text text-left d-flex flex-column w-100">
                    <h2 class="tentang-kami fw-bold" style="font-size: 16px;">Tentang Kami</h2>
                    <p class="desk-tentang" style="color: #8a8a8a; font-size: 11px">Kami adalah penyedia jasa persewaan gudang yang berpengalaman dan terpercaya. Dengan berbagai pilihan gudang yang luas dan lokasi strategis, kami hadir untuk memenuhi kebutuhan penyimpanan dan distribusi barang anda. Kami memahami betapa pentingnya memiliki ruang penyimpanan yang aman, efisien, dan terorganisir dengan baik untuk menjaga kelancaran operasional bisnis anda.</p>
                </div>
            </div>
            <div class="about-content d-flex flex-column" style="background-color: #fff">
                <div class="about-content-text text-left d-flex flex-column w-100" style="margin-bottom: 0%;">
                    <h2 class="tentang-kami fw-bold text-center" style="font-size: 16px;">Siapa Kami</h2>
                    <p class="desk-tentang text-center" style="color: #8a8a8a; font-size: 11px">Penyedia jasa persewaan gudang yang terkemuka dalam industri. Kami adalah tim yang berdedikasi untuk memberikan solusi penyimpanan yang handal dan efisien bagi pelanggan kami.</p>
                    <div class="read-more-content" id="read-more">
                        <p class="desk-tentang text-center" style="color: #8a8a8a; font-size: 11px">Dengan berbagai pengalaman dan pengetahuan di bidang logistik dan manajemen gudang, kami bertujuan untuk menjadi mitra terpercaya bagi bisnis Anda.</p>
                    </div>
                    <a class="read-more-button fw-semibold w-100 text-center" style="color: #2A49CE; font-size: 11px" href="#read-more">READ MORE</a>
                </div>
            </div>
            <div class="about-footer d-flex flex-column" style="background-color: #fff">
                <div class="about-content-text text-left d-flex flex-column w-100">
                    <h2 class="tentang-kami fw-bold" style="font-size: 16px;">Hubungi Kami</h2>
                    <p class="desk-tentang" style="color: #8a8a8a; font-size: 11px">Jangan malu-malu untuk cerita kendala dan keluh kesahmu pada kami ya!</p>
                </div>
                <div class="about-hubungi text-center d-flex flex-row w-100">
                    <div class="pesan d-flex text-center w-100 gap-1">
                        <span class="material-icons" style="font-size: 16px">
                        mail
                        </span>
                        <p class="mail-text" style="font-size: 11px">relowlogistic@gmail.com</p>
                    </div>
                    <div class="callphone d-flex text-center w-100 gap-1">
                        <span class="material-icons" style="font-size: 16px">
                        call
                        </span>
                        <p class="mail-text" style="font-size: 11px">+62 81234567890</p>
                    </div>
                </div>
                <div class="office-img-footer">
                    <img src="{{ asset('img/hmcard.png') }}" alt="about-img" style="height: auto; width: 100%;" class="about-hero">
                </div>
            </div>
            <div class="about-end d-flex flex-column" style="background-color: #EAEDFA">
            </div>
        </div>
    </div>

</body>
</html>
