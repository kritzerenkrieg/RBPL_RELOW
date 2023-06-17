@extends ('master')
@section('konten')

<title>Lupa kata sandi</title>
  <body>
    <div class="sign-up-user">
      <div class="container-1 d-flex flex-column px-3 gap-3">
        <a href="{{url ('/pengaturan')}}" class="button-w-icon d-flex">
            <span class="material-symbols-outlined" type="button">arrow_back_ios</span>
            <p class="button-text" type="button">Kembali</p>
        </a>

        <div class="container-2 d-grid">
          <div class="title text-center d-flex flex-column">
            <h2 class="main-title">Lupa Kata Sandi?</h2>
            <p class="sub-title">Isi ulang kata sandi barumu!</p>
          </div>

          <form action="/signup" method="post">
            @csrf
          <div class="form-cta-control d-grid">
            <div class="container-3">
              <div class="form-sign-up">

                <div class="form-1 mb-3">
                  <label for="exampleInputPassword1" class="form-label">Email</label>
                  <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="email" aria-describedby="emailHelpId" required value="{{ old('email') }}" />
                  @error('email')
                    <div class="invalid-feedback" >
                      Masukkan email yang valid
                    </div>
                  @enderror
                </div>

                <div class="form-2 mb-3">
                  <label for="exampleInputPassword1" class="form-label">Kata Sandi Baru</label>
                  <input type="password" class="form-control @error('password') is-invalid @enderror"
                  name="password" id="password" required />
                  @error('password')
                    <div class="invalid-feedback" >
                      Kata sandi setidaknya 8 karakter
                    </div>
                  @enderror
                </div>

              </div>
            </div>
            <div class="cta d-grid">
                <a href="{{url ('/signin')}}" class="button-wo-icon text-center">
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
