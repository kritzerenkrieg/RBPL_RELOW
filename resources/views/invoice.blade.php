@extends('master')

@section('konten')
    <div class="container">
        <h1>Invoice</h1>
        
        <p>Total tagihan: Rp. {{ $payment->harga_gudang }}</p>
        <p>Nama Gudang : {{$payment->nama_gudang}}</p>
        <p>Lokasi Gudang : {{$payment->lokasi_gudang}}</p>
        <p>Rekening: Relow</p>
        <p>Nomor Rekening: 0481889234 </p>
       
        <!-- Additional result page content goes here -->
    </div>
@endsection