<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Reset Password</title>
    @extends ('styling')
  </head>

  <body>
    <header>
      <!-- place navbar here -->
    </header>
    <main>
      <div class="container" style="font-family: poppins">
        <div class="text-center" style="font-family: poppins">

        <form action="{{ route('password.email') }}" method="post">
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
        <button type="submit" class="btn btn-primary" style="font-size: 13px">
            Kirim
          </button>
          </form>
        
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
