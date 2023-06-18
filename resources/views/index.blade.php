@extends ('master')
  @section ('konten')

   <title>Index Page</title>

  <body>

    <div class="d-flex flex-wrap justify-content-center text-center align-items-center m-4">
        <form action="/index/cari" method="GET" style="font-family: Poppins;">
            <div class="form-group">
                <label for="cari" style="display: block; width: 100%;">SEARCH</label>
                <input type="text" name="cari" id="cari" placeholder="Cari lokasi gudang..." value="{{ old('cari') }}" style="width: 100%;">
            </div>
            <div class="form-group">
                <input type="submit" value="CARI" class="btn zrayastyle">
            </div>
        </form>
        </div>

    <div class="card-container d-flex flex-wrap justify-content-center align-items-center mb-4">
            @foreach($gudang as $g)
            <div class="card" style="width: 18rem; font-family: Poppins;">
              <img src="\images\Information.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">{{ $g->nama_gudang }}</h5>
                <p class="card-text">{{ $g->lokasi_gudang }}</p>
                <p class="card-text">Rp. {{ $g->harga_gudang }}</p>
                <a href="{{ route('payment.req', ['id' => $g->id_gudang]) }}" class="btn btn-primary">Order</a>
              </div>
            </div>
            @endforeach
    </div>
<br><br><br>