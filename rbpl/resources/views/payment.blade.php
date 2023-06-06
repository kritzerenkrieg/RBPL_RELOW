   @extends ('master')
   @section('konten')
<title>Payment</title>
  <body>
    <div class="payment">
        <div class="container-1 d-flex flex-column px-3">
            <a href="{{url ('/')}}" class="button-w-icon d-flex">
              <span class="material-symbols-outlined" type="button">arrow_back_ios</span>
              <p class="button-text" type="button">Kembali</p>
            </a>

            <div class="card-payment">
                <div class="home-card-section d-flex flex-column gap-0 shadow p-3 mb-5 bg-body rounded">
                    <div class="card-text">
                        <div class="card-title text-start d-flex flex-column">
                            <h2 class="main-title fw-semibold">BARNhouse Serbaguna Surabaya</h2>
                        </div>
                    </div>
                    <div class="card-price d-flex flex-column">
                        <p class="sub-title">Sukolilo, Surabaya</p>
                        <div class="card-info d-flex gap-2">
                            <h2 class="price-title">Rp350,000</h2>
                            <p class="sub-title">per bulan</p>
                        </div>
                    </div>
                    <div class="benefit">
                        <div class="d-flex flex-row justify-content-around">
                            <div class="column">
                                <img src="{{ asset('img/ben-1.png') }}" alt="one" style="width:100%">
                            </div>
                            <div class="column">
                                <img src="{{ asset('img/ben-2.png') }}" alt="two" style="width:100%">
                            </div>
                            <div class="column">
                                <img src="{{ asset('img/ben-3.png') }}" alt="three" style="width:100%">
                            </div>
                        </div>
                    </div>
                    <div class="cta d-grid pt-2 mt-3">
                        <button class="button-wo-icon" type="submit">Lanjutkan Pembayaran</button>
                    </div>
                    <div class="note pt-3">
                        <p class="sub-title" style="color : #8a8a8a">Note : Hubungi admin untuk pengisian stock. (kontak admin terdapat pada menu “about”)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </body>
@endsection


