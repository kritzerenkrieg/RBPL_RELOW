                                        <!--YANG INI GA DIPAKE, KALO MAU HAPUS HAPUS AJA !!-->
                                        <!--YANG INI GA DIPAKE, KALO MAU HAPUS HAPUS AJA !!-->
                                        <!--YANG INI GA DIPAKE, KALO MAU HAPUS HAPUS AJA !!-->
                                        <!--YANG INI GA DIPAKE, KALO MAU HAPUS HAPUS AJA !!-->
                                        <!--YANG INI GA DIPAKE, KALO MAU HAPUS HAPUS AJA !!-->




<!DOCTYPE html>
<html lang="en">
  <head>
    @extends ('styling')
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link href="style-signup.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
    <title>Payment Checkout</title>
  </head>
  <body>
    <div class="payment-user">
      <div class="container-1 d-flex flex-column px-3 gap-3">
        <a href="{{url ('/signin')}}" class="button-w-icon d-flex">
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
                  <p for="examplePayment" class="sub-title">Total Tagihan</p>
                  <input type="text" class="form-control" id="examplePayment" disabled/>
                </div>
                <div class="form-3 mb-3 gap-1">
                  <label for="examplePayment" class="form-label">Rekening Tujuan</label>
                  <div class="form-3-1">
                    <input type="text" class="form-control" id="examplePayment" disabled/>
                  </div>
                  <div class="form-3-2 d-flex flex-row bd-highlight py-3">
                    <div class="bank">
                      <div class="p-2 flex-fill bd-highlight">BCA</div>

                    </div>
                    <div class="nominal flex-grow-1 bd-highlight" >
                      <input type="text" class="form-control" id="examplePayment" disabled/>
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
              <button class="button-wo-icon" type="button">Kirim Bukti</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>

<style>
  .sign-up-user {
    font-family: "Poppins", sans-serif;
  }

  .container-1 {
    padding-top: 1.25rem;
  }

  .container-2 {
    gap: 32px;
  }

  a:link { text-decoration: none; }
  a:visited { text-decoration: none; }
  a:hover { text-decoration: none; }
  a:active { text-decoration: none; }

  .button-w-icon .button-text {
    font-size: 13px;
    font-weight: 600;
    color: #1e3492;
  }

  .button-w-icon .material-symbols-outlined {
    font-size: 16px;
    padding-top: 2.45px;
  }

  .title {
    gap: 0px;
  }

  .title .sub-title {
    font-size: 11px;
    font-weight: 400;
  }

  .title .main-title {
    font-size: 19px;
    font-weight: 700;
  }

  .form-cta-control {
    gap: 16px;
  }

  /* .container-3 {
    gap: 8px;
} */

  .form-sign-up {
    font-size: 13px;
    font-weight: 500;
  }

  .form-control {
    font-size: 13px;
  }

  .dashed {
    font-size: 13px;
    border-style: dashed;
  }

  .bank {
  border: 1px solid #333333;;
  border-radius: 5px;
  height:33px;
}

.form-3-2 {
  gap: 16px;
}

  .form-4 .form-control {
    width: 100%;
    height: 100px;
    border-style: dashed;
  }

  .cta {
    gap: 8px;
  }

  .button-wo-icon {
    border-radius: 4px;
    border-color: transparent;
    background-color: #2a49ce;
    color: #eaedfa;
    font-weight: 600;
    padding-top: 6px;
    padding-bottom: 6px;
    font-size: 13px;
  }

  .button-wo-icon:hover {
    background-color: #2642bb;
    transition: 0.2s;
  }

  .info-text {
    align-items: center;
    gap: 4px;
    font-weight: 500;
    font-size: 13px;
  }

  .info-text .info-text-2 {
    font-weight: 600;
    color: #2a49ce;
    font-size: 13px;
  }

  .file-upload-input {
    width: 100%;
    height: 100px;
    opacity: 0%;
    border-style: dashed;
  }
  .file-upload-wrapper {
    width: 100%;
    height: 100px;
    opacity: 20%;
    border-style: dashed;
    border-radius: 6px;
  }

</style>
