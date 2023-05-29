<!DOCTYPE html>
<html lang="en">
  <head>
    @extends('styling')
<title>Sign Up</title>
  </head>
  <body>
    <div class="sign-up-user">
      <div class="container-1 d-flex flex-column px-3 gap-3">
        <a href="{{url ('/signin')}}" class="button-w-icon d-flex">
          <span class="material-symbols-outlined" type="button">arrow_back_ios</span>
          <p class="button-text" type="button">Kembali</p>
        </a>
        <div class="container-2 d-grid">
          <div class="title text-center d-flex flex-column">
            <h2 class="main-title">Isi form dulu</h2>
            <p class="sub-title">Isi sesuai data diri kamu ya!</p>
          </div>
          <form action="/signup" method="post">
            @csrf
          <div class="form-cta-control d-grid">
            <div class="container-3">
              <div class="form-sign-up">
                <div class="form-1 mb-3">
                  <label for="nama" class="form-label">Nama Lengkap</label>
                  <input type="text" class="form-control @error('nama') is-invalid @enderror" 
                  name="nama" id="nama" required value="{{ old('nama') }}" />
                  @error('nama')
                    <div class="invalid-feedback" >
                      Pilih username anda
                    </div>
                  @enderror
                </div>
                <div class="form-2 mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control @error('email') is-invalid @enderror"
                   name="email" id="email" required value="{{ old('email') }}" />
                  @error('email')
                    <div class="invalid-feedback" >
                      Masukkan email yang valid
                    </div>
                  @enderror
                </div>
                <div class="form-3 mb-3">
                  <label for="nohp" class="form-label">Nomor Handphone</label>
                  <input type="text" class="form-control @error('nohp') is-invalid @enderror"
                   name="nohp" id="nohp" required value="{{ old('nohp') }}"/>
                  @error('nohp')
                    <div class="invalid-feedback" >
                      Masukkan nomor hp yang benar
                    </div>
                  @enderror
                </div>
                <div class="form-4 mb-3">
                  <label for="password" class="form-label">Kata Sandi</label>
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
              <button class="button-wo-icon" type="submit">Sign Up</button>
            </form>
              <div class="info-text d-flex justify-content-center">
                <p class="info-text-1 text-center">Sudah punya akun?</p>
                <a href="{{url ('/signin')}}"> <p class="info-text-2 text-center" type="button">Masuk di sini</p> </a>
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
</style>
