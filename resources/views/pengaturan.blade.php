@extends ('master')
@section('konten')

<title>Settings</title>
  <body>
  @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

    <div class="sign-up-user">
      <div class="container-1 d-flex flex-column px-3 gap-3">
        <a href="{{url ('/dashboard')}}" class="button-w-icon d-flex">
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
                  <input value="{{auth()->user()->nama}}" type="text" class="form-control" id="exampleInputPassword1" disabled />
                  <a href="{{url ('/edit')}}" class="edit-link">Edit</a>
                </div>



                <div class="form-2 mb-3">
                  <label for="exampleInputPassword1" class="form-label">Email</label>
                  <input value="{{auth()->user()->email}}" type="text" class="form-control" id="exampleInputPassword1" disabled />
                  <a href="{{url ('/edit')}}" class="edit-link">Edit</a>
                </div>


                <div class="form-3 mb-3">
                  <label for="exampleInputPassword1" class="form-label">Nomor Whatsapp</label>
                  <input value="0{{auth()->user()->nohp}}" type="text" class="form-control" id="exampleInputPassword1" disabled />
                  <a href="{{url ('/edit')}}" class="edit-link">Edit</a>
                </div>


                <!-- <div class="form-4 mb-3">
                  <label for="exampleInputPassword1" class="form-label">Kata Sandi</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" disabled />
                  <a href="{{url ('/edit')}}" class="edit-link">Edit</a>
                </div> -->


              </div>
            </div>
            </form>
            <div class="form-control d-grid button-wo-icon text-center">
                <form action="/logout" method="post">
                    @csrf
                <button class="bton-wo-icon w-100" type="submit">Sign Out</button>
                </form>
            </div>


{{-- <!-- <a href="{{url ('/signin')}}" class="button-wo-icon text-center"> -->
<!-- <form action="/logout" method="post">
                  @csrf
              <button class="button-wo-icon" type="submit">Sign Out</button>
                </form> -->
              <!-- </a> --> --}}


            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
@endsection
