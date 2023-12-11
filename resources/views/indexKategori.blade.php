@extends('master2')
@section('title', 'Pilih Kategori')

@section('judul_halaman')
    <h3>Pilih Kategori</h3>
@endsection

@section('konten')
    <div class="row">
        <div class="col-6">
            <form action="/kategori/hasilcombo" method="GET"> 
                <select name="kategori" class="form-control select2">
                    <option value="1">Elektronik</option>
                    <option value="2">Rumah Tangga</option>
                    <option value="3">Komputer</option>
                </select>
                <button type="submit" class="btn btn-primary mt-3">KIRIM</button>
            </form>
        </div>
    </div>
@endsection
