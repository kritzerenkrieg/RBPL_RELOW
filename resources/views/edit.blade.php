@extends ('master')
@section('konten')

<title>Settings - Edit</title>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

  <body>
    <div class="sign-up-user">
      <div class="container-1 d-flex flex-column px-3 gap-3">
        <a href="{{url ('/pengaturan')}}" class="button-w-icon d-flex">
            <span class="material-symbols-outlined" type="button">arrow_back_ios</span>
            <p class="button-text" type="button">Kembali</p>
        </a>
        
        <div class="container-2 d-grid">
          <div class="title text-center d-flex flex-column">
            <h2 class="main-title">Pengaturan akun</h2>
            <p class="sub-title">Mau apa kamu hari ini?</p>
          </div>

          <form  action="{{ route('user_edit', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
          <div class="form-cta-control d-grid">
            <div class="container-3">
              <div class="form-sign-up">
                <div class="form-1 mb-3">
                  <label for="exampleInputPassword1" class="form-label">Nama</label>
                  <input value="{{auth()->user()->nama}}" type="text" class="form-control" id="nama" name="nama" />
                </div>



                <div class="form-2 mb-3">
                  <label for="exampleInputPassword1" class="form-label">Email</label>
                  <input value="{{auth()->user()->email}}" type="text" class="form-control" id="email" name="email" />
                </div>


                <div class="form-3 mb-3">
                  <label for="exampleInputPassword1" class="form-label">Nomor Whatsapp</label>
                  <input value="0{{auth()->user()->nohp}}" type="text" class="form-control" id="nohp" name="nohp" />
                </div>

<!-- 
                <div class="form-4 mb-3">
                  <label for="exampleInputPassword1" class="form-label">Kata Sandi</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" />
                </div> -->


              </div>
            </div>
            <div class="cta d-grid">
                <!-- <a href="{{url ('/pengaturan')}}" class="button-wo-icon text-center"> -->
                    <button class="button-wo-icon" id="saveButton" type="submit ">Simpan</button>
                <!-- </a> -->
                <div class="info-text d-flex justify-content-center">
                </div>
              </div> 
            </form>
            <!-- <div class="form-control d-grid button-wo-icon text-center">
                <form action="/pengaturan" method="post">
                    @csrf
                <button class="bton-wo-icon w-100" type="submit">Simpan</button>
                </form>
            </div> -->



            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
@endsection
