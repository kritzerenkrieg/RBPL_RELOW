<!DOCTYPE html>
<html lang="en">
  <head>
    @extends('styling')
    <title>Lupa Kata Sandi</title>
  </head>
  <body>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="sign-up-user">
      <div class="container-1 d-flex flex-column px-3 gap-3">
        <a href="{{url ('/signin')}}" class="button-w-icon d-flex">
            <span class="material-symbols-outlined" type="button">arrow_back_ios</span>
            <p class="button-text" type="button">Kembali</p>
        </a>

        <div class="container-2 d-grid">
          <div class="title text-center d-flex flex-column">
            <h2 class="main-title">Lupa Kata Sandi?</h2>
            <p class="sub-title">Isi dulu yuk biar kamu bisa masuk!</p>
          </div>

          <form action="{{ route('password.update') }}" method="post">
            @csrf
            <input value="{{ request()->query('email') }}" type="hidden" class="form-control" name="email" id="email">
            <input value="{{ request()->route('token') }}" type="hidden" class="form-control" name="token" id="token">
          <div class="form-cta-control d-grid">
            <div class="container-3">
              <div class="form-sign-up">

                <div class="form-1 mb-3">
                  <label for="password" class="form-label">Kata Sandi Baru</label>
                  <input type="password" class="form-control @error('password') is-invalid @enderror"
                  name="password" id="password">
                  {{-- @error('password')
                    <div class="invalid-feedback" >
                      Kata sandi setidaknya 8 karakter
                    </div>
                  @enderror --}}
                </div>

                <div class="form-2 mb-3">
                    <label for="password_confirmation" class="form-label">Konfirmasi Kata Sandi</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password_confirmation" id="password_confirmation">
                    {{-- @error('password')
                      <div class="invalid-feedback" >
                        Kata sandi setidaknya 8 karakter
                      </div>
                    @enderror --}}
                </div>

              </div>
            </div>
            <div class="cta d-grid button-wo-icon text-center">
                    <button class="bton-wo-icon" id="saveButton" type="submit">Update</button>
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
</html>

