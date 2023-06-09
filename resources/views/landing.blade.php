<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Landing Page</title>
  </head>
  
  <body>
    @extends('styling')
  <div class="container-fluid p-0">
        <img src="{{ asset('images/landing.jpg') }}" class="img-fluid no-space" alt="Image Missing">
  </div>

  <div class="container-2 d-grid">
          <div class="title text-left d-flex flex-column p-4">
            <h2 class="main-title">Gudang menarik untuk bisnismu</h2>
            <p class="sub-title">Ada beragam jenis gudang yang cocok buat kamu nih! Yuk temukan selera hatimu sekarang!</p>
          </div>
  </div>

  <div class="container">
        <div class="text-center mt-5 mb-5 d-grid gap-2">
          <button class="btn zrayastyle">
            Lihat Semua Gudang
          </button>
        </div>
  </div>

  <div class="container-2 d-grid">
          <div class="title text-left d-flex flex-column p-4">
            <h2 class="main-title">Kenapa kamu harus menggunakan jasa gudang Relow?</h2>
          <div class="container p-2 mt-2 d-grid gap-2">
            <button class="btn zrayastyle" data-bs-toggle="collapse" data-bs-target="#demo1">Proses Cepat</button>
              <div id="demo1" class="collapse">
              AAAAA ZORAAAAAAAAAAAA
              </div>
          </div>
          <div class="container p-2 mt-2 d-grid gap-2">
            <button class="btn zrayastyle" data-bs-toggle="collapse" data-bs-target="#demo2">Biaya Terjangkau</button>
              <div id="demo2" class="collapse">
              CUUUUUUUUUTEEEE AND FUNNNYYYYYYY
              </div>
          </div>
          <div class="container p-2 mt-2 d-grid gap-2">
            <button class="btn zrayastyle" data-bs-toggle="collapse" data-bs-target="#demo3">Lokasi Tersebar</button>
              <div id="demo3" class="collapse">
              SEPERTI CINTA KU PADA MUUUUU
              </div>
          </div>
      </div>
  </div>

  <div class="container-2">
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
