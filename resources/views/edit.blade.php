@extends ('master')
@section('konten')

<title>Settings - Edit</title>
  <body>
    <div class="sign-up-user">
      <div class="container-1 d-flex flex-column px-3 gap-3">
        <a href="{{url ('/pengaturan')}}" class="button-w-icon d-flex">
            <span class="material-symbols-outlined" type="button">arrow_back_ios</span>
            <p class="button-text" type="button">Kembali</p>
        </a>
        <form>
        <div class="container-2 d-grid">
          <div class="title text-center d-flex flex-column">
            <h2 class="main-title">Pengaturan akun</h2>
            <p class="sub-title">Mau apa kamu hari ini?</p>
          </div>


          <div class="form-cta-control d-grid">
            <div class="container-3">
              <div class="form-sign-up">
                <div class="form-1 mb-3">
                  <label for="exampleInputPassword1" class="form-label">Nama</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" />
                </div>



                <div class="form-2 mb-3">
                  <label for="exampleInputPassword1" class="form-label">Email</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" />
                </div>


                <div class="form-3 mb-3">
                  <label for="exampleInputPassword1" class="form-label">Nomor Whatsapp</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" />
                </div>


                <div class="form-4 mb-3">
                  <label for="exampleInputPassword1" class="form-label">Kata Sandi</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" />
                </div>


              </div>
            </div>
            <div class="cta d-grid">
                <a href="{{url ('/pengaturan')}}" class="button-wo-icon text-center">
                    <button class="bton-wo-icon" id="saveButton" type="button">Simpan</button>
                </a>
                <div class="info-text d-flex justify-content-center">
                </div>
              </div>
            </form>



            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
@endsection
