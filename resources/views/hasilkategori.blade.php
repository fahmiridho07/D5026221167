@extends('master2')
@section('judul_halaman', 'Hasil Kategori')

@section('konten')
        <div class="row mb-4">
            <div class="col-3"><strong>Anda telah memilih kategori dengan Kode: {{ $kategori->ID }}</strong></div>
        </div>
@endsection
