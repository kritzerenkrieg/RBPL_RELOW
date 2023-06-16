<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sign In</title>
    @extends ('styling')
  </head>

  <body>
    <header>
      <!-- place navbar here -->
    </header>
    <main>
      <div class="container" style="font-family: poppins">
        <div class="text-center" style="font-family: poppins">

        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        @if(session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

          <p class="mt-5 mb-0 fw-bold" style="font-size: 19px">
            Selamat datang
          </p>
          <p class="mt-0 mb-5" style="color: #8a8a8a; font-size: 11px">
            Masukkan data yang udah kamu daftarin!
          </p>
        </div>
        <form action="/signin" method="post">
          @csrf
        <div class="mt-3">
          <label for="" class="form-label fw-bold" style="font-size: 13px"
            >Email</label
          >
          <input
            type="email"
            class="form-control @error('email') is-invalid @enderror"
            name="email"
            id="e mail"
            aria-describedby="emailHelpId"
            autofocus required value="{{ old('email') }}"
          />
          @error('email')
           <div class="invalid-feedback">
              {{ "Masukkan email yang valid"  }}
           </div>
           @enderror
        </div>
        <div class="mt-3">
          <label for="" class="form-label fw-bold" style="font-size: 13px" >Kata Sandi</label>
          <div class="input-group">
            <input
             type="password"
             class="form-control"
             name="password" 
             id="password"
             required 
           />
           
          <!--  <div class="input-group-append">
             <span class="input-group-text bg-white">
                <button class="btn btn-outline-secondary bg-white border-0" type="button" onclick="showhide();">
                  <i class="fas fa-eye d-none" id="hide_eye"></i>
                  <i class="fas fa-eye-slash" id="show_eye"></i>
                </button>
              </span>
            </div> 
          </div>-->
        </div>
        <div class="text-end">
        <a href="{{ url ('/forgot-password')}}" style="text-decoration: none;">
        <span class="info-text" style="color: #2a49ce" type="button"><b>Lupa Kata Sandi?</b>
           </a>
        </div>
        <div class="text-center mt-5 d-grid gap-2">
          <button type="submit" class="btn btn-primary" style="font-size: 13px">
            Sign In
          </button>
      </form>
        </div>
        <div class="text-center mt-2" style="font-size: 13px">
          <p>
            Belum punya akun?
            <a href="{{ url ('/signup')}}" style="text-decoration: none;"> <span class="info-text" style="color: #2a49ce" type="button"><b>Daftar Sekarang</b></span> </a>
          </p>
        </div>
      </div>
    </main>
    <footer>
      <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
      integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
