  @extends ('master')
  @section ('konten')

   <title>Landing Page</title>

  <body>
  <div class="container-fluid p-0">
        <img src="{{ asset('images/landing.jpg') }}" class="img-fluid no-space" alt="Image Missing">
  </div>

  <div class="container-2 d-grid card-header">
          <div class="title text-left d-flex flex-column p-4">
            <h2 class="main-title">Gudang menarik untuk bisnismu</h2>
            <p class="sub-title">Ada beragam jenis gudang yang cocok buat kamu nih! Yuk temukan selera hatimu sekarang!</p>
            <p><p><p><p>  {{--INI NANTI DELETE KLO ADA PAGINATE--}}
            <div class="zrayacenter">
            <button class="btn zrayastyle">
            Lihat Semua Gudang
            </button>
            </div>
        
          </div>

          
  </div>

  <div class="container-2 d-grid card-header">
          <div class="title text-left d-flex flex-column p-4">
            <h2 class="main-title mb-4">Kenapa kamu harus menggunakan jasa gudang Relow?</h2>

            <div id="accordion">
    <div class="card">
      <div class="card-header">
        <a class="collapsed btn card-font" data-bs-toggle="collapse" href="#collapseOne">
          Proses Cepat
        </a>
      </div>
      <div id="collapseOne" class="collapse" data-bs-parent="#accordion">
        <div class="card-body sub-title">
        Jasa kami memiliki proses yang cepat karena kami mengutamakan efisiensi dan kecepatan dalam memberikan layanan kepada pelanggan kami. Pertama, kami memiliki tim yang terdiri dari para ahli yang terlatih dengan baik di bidang mereka masing-masing. Mereka memiliki pengetahuan dan keterampilan yang mendalam dalam menjalankan tugas-tugas yang diberikan. Hal ini memungkinkan mereka untuk bekerja dengan cepat dan efektif, tanpa mengorbankan kualitas pekerjaan.
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed btn btn card-font" data-bs-toggle="collapse" href="#collapseTwo">
        Biaya Terjangkau
      </a>
      </div>
      <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
        <div class="card-body sub-title">
        Biaya kami terjangkau karena kami berkomitmen untuk memberikan nilai terbaik kepada pelanggan kami tanpa memberatkan kantong mereka. Pertama, kami memiliki kebijakan harga yang transparan dan adil. Kami menyadari bahwa setiap pelanggan memiliki anggaran yang berbeda, dan oleh karena itu, kami menawarkan paket harga yang fleksibel dan disesuaikan dengan kebutuhan individu. Kami tidak menambahkan biaya tersembunyi atau biaya tambahan yang tidak perlu, sehingga pelanggan dapat memiliki gambaran yang jelas tentang apa yang mereka bayar.
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed btn card-font" data-bs-toggle="collapse" href="#collapseThree">
          Lokasi Tersebar
        </a>
      </div>
      <div id="collapseThree" class="collapse" data-bs-parent="#accordion">
        <div class="card-body sub-title">
        Lokasi layanan kami tersebar karena kami ingin memberikan aksesibilitas yang lebih baik kepada pelanggan di berbagai daerah. Kami percaya bahwa setiap pelanggan memiliki kebutuhan unik dan tidak semua orang dapat dengan mudah mengakses layanan di satu titik sentral. Dengan memiliki lokasi layanan yang tersebar, kami dapat memberikan kenyamanan dan kemudahan bagi pelanggan kami.
        </div>
      </div>
    </div>
  </div>
{{--
          <div class="container p-2 mt-2 d-grid gap-2">
            <button class="btn zrayastyle" data-bs-toggle="collapse" data-bs-target="#demo1">Proses Cepat</button>
              <div id="demo1" class="collapse sub-title">
              Jasa kami memiliki proses yang cepat karena kami mengutamakan efisiensi dan kecepatan dalam memberikan layanan kepada pelanggan kami. Pertama, kami memiliki tim yang terdiri dari para ahli yang terlatih dengan baik di bidang mereka masing-masing. Mereka memiliki pengetahuan dan keterampilan yang mendalam dalam menjalankan tugas-tugas yang diberikan. Hal ini memungkinkan mereka untuk bekerja dengan cepat dan efektif, tanpa mengorbankan kualitas pekerjaan.
              </div>
          </div>
          <div class="container p-2 mt-2 d-grid gap-2">
            <button class="btn zrayastyle" data-bs-toggle="collapse" data-bs-target="#demo2">Biaya Terjangkau</button>
              <div id="demo2" class="collapse sub-title">
              Biaya kami terjangkau karena kami berkomitmen untuk memberikan nilai terbaik kepada pelanggan kami tanpa memberatkan kantong mereka. Pertama, kami memiliki kebijakan harga yang transparan dan adil. Kami menyadari bahwa setiap pelanggan memiliki anggaran yang berbeda, dan oleh karena itu, kami menawarkan paket harga yang fleksibel dan disesuaikan dengan kebutuhan individu. Kami tidak menambahkan biaya tersembunyi atau biaya tambahan yang tidak perlu, sehingga pelanggan dapat memiliki gambaran yang jelas tentang apa yang mereka bayar.
              </div>
          </div>
          <div class="container p-2 mt-2 d-grid gap-2">
            <button class="btn zrayastyle" data-bs-toggle="collapse" data-bs-target="#demo3">Lokasi Tersebar</button>
              <div id="demo3" class="collapse sub-title">
              Lokasi layanan kami tersebar karena kami ingin memberikan aksesibilitas yang lebih baik kepada pelanggan di berbagai daerah. Kami percaya bahwa setiap pelanggan memiliki kebutuhan unik dan tidak semua orang dapat dengan mudah mengakses layanan di satu titik sentral. Dengan memiliki lokasi layanan yang tersebar, kami dapat memberikan kenyamanan dan kemudahan bagi pelanggan kami.
              </div>
          </div>
      </div>
  </div>
--}}
  <div class="container-2 card-header">
          <div class="title text-left mt-5 d-flex flex-column p-4">
            <h2 class="main-title">Panduan lengkap untuk menggunakan jasa gudang Relow</h2>
          </div>
          <div class="container">
            <img src="{{ asset('images/seo_landing.png') }}" class="img-fluid no-space" alt="Image Missing">
          </div>
          <div class="title text-left d-flex flex-column p-4">
            <a class="sub-title">Download PDF Panduan</a>
          </div>
  </div>
  </body>
</html>
