@extends('master')
@section('konten')

<title> Checkout </title>

<body>
    <div class="payment-user">
      <div class="container-1 d-flex flex-column px-3 gap-3">
        <a href="{{route ('payment.req', ['id'=> $id])}}" class="button-w-icon d-flex">
          <span class="material-symbols-outlined" type="button">arrow_back_ios</span>
          <p class="button-text" type="button">Kembali</p>
        </a>
        <div class="container-2 d-grid">
          <div class="title text-center d-flex flex-column">
            <h2 class="main-title">Bayar dulu yuk!</h2>
            <p class="sub-title">Lakukan pembayaran untuk gudangmu</p>
          </div>
          <div class="form-cta-control d-grid">
            <div class="container-3">
              <div class="payment-user">
                <div class="form-1 mb-3">
                  <label for="examplePayment" class="form-label">Total Tagihan</label>
                  <input value="Rp.{{$payment->harga_gudang}}" type="text" class="form-control" id="examplePayment" disabled/>
                </div>
                <div class="form-3 mb-3 gap-1">
                  <label for="examplePayment" class="form-label">Rekening Tujuan</label>
                  <div class="form-3-1">
                    <input value="Relow" type="text" class="form-control" id="examplePayment" disabled/>
                  </div>
                  <div class="form-3-2 d-flex flex-row bd-highlight py-3">
                    <div class="bank">
                      <div class="p-2 flex-fill bd-highlight">BCA</div>

                    </div>
                    <div class="nominal flex-grow-1 bd-highlight" >
                      <input value ="0481889234" type="text" class="form-control" id="examplePayment" disabled/>
                    </div>
                  </div>

                </div>
                <div class="form-4 mb-3">
                  <label for="examplePayment" class="form-label">Bukti Pembayaran</label>
                  <div class="file-upload-wrapper">
                    <input type="file" id="input-file-now" class="file-upload-input" data-mdb-file-upload="file-upload"/>
                  </div>


                </div>

              </div>
            </div>
            <div class="cta d-grid">
              <a href="{{url('/landing')}}" class="button-wo-icon text-center">
              <button class="bton-wo-icon" type="button">Kirim Bukti</button>
              </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
  @endsection