@extends('master2')
@section('judulhalaman')
@section('konten')
    <div>
        <h3>View FLashdisk</h3>
        <a href="/flashdisk" class="btn btn-primary">Kembali</a>
    </div>

    <div class="row mt-5">
        <div class="col-6 border border-primary" class="d.flex">
        </div>
        <div class="col-6">
            @foreach ($flashdisk as $f)
                <div class="row mb-4">
                    <div class="col-3"><strong>Merk</strong></div>
                    <div class="col-9">: {{ $f->merkflashdisk }}</div>
                </div>
                <div class="row mb-4">
                    <div class="col-3"><strong>Stock</strong></div>
                    <div class="col-9">: {{ $f->stockflashdisk }}</div>
                </div>
                <div class="row mb-4">
                    <div class="col-3"><strong>Ketersediaan</strong></div>
                    <div class="col-9">: {{ $f->tersedia }}</div>
                </div>
            @endforeach

            <div class="text-center mt-4">
                <a href="/flashdisk" class="btn btn-primary btn-block w-50">OK</a>
            </div>
        </div>
    </div>
@endsection
