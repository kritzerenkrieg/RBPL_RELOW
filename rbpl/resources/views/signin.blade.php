<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sign In</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
      crossorigin="anonymous"
    />

    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      rel="stylesheet"
    />
    <!--<script>
      function showhide() {
        var x = document.getElementById("formPassword");
        var show_eye = document.getElementById("show_eye");
        var hide_eye = document.getElementById("hide_eye");
        hide_eye.classList.remove("d-none");
        if (x.type === "password") {
          x.type = "text";
          show_eye.style.display = "none";
          hide_eye.style.display = "block";
        } else {
          x.type = "password";
          show_eye.style.display = "block";
          hide_eye.style.display = "none";
        }
      }
    </script>-->
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
             class="form-control "
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
          <label for="" class="fw-bold" style="font-size: 13px; color: #2a49ce"
            >Lupa kata sandi?</label
          >
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
