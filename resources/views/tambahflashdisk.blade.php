@extends('master2')

@section('konten')
    <h3>Tambah Flash Disk Baru</h3>

    <a href="/flashdisk"> Kembali</a>

    <br />
    <br />

    <form action="/flashdisk/store" method="post" class="form-horizontal">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="merkflashdisk" class="col-sm-0 col-form-label">Merk Flashdisk:</label>
            <div class="col-sm-10">
                <input name="merkflashdisk" type="text" class="form-control" id="merkflashdisk"
                    placeholder="Masukkan Merk Flashdisk">
            </div>
        </div>
        <div class="form-group row">
            <label for="stockflashdisk" class="col-sm-0 col-form-label">Stock Flashdisk:</label>
            <div class="col-sm-10">
                <input name="stockflashdisk" type="text" class="form-control" id="stockflashdisk"
                    placeholder="Masukkan Stock Flashdisk">
            </div>
        </div>
        <div class="form-group d-flex row-flex">
            <label for="tersedia" class="col-sm-0 col-form-label">Ketersediaan:</label>
            <input class="col-1" name="is_checked" type = "checkbox" id = "tersedia" value="Ketersediaan barang">
        </div>

        <input type="submit" value="Simpan Data" class="btn btn-primary">
    </form>
@endsection
