@extends('master2')

@section('konten')
    <h3>Edit Data Flashdisk</h3>

    <a href="/flashdisk"> Kembali</a>

    <br />
    <br />

    @foreach ($flashdisk as $f)
        <form action="/flashdisk/update" method="post" class="form-horizontal">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $f->kodeflashdisk }}">
            <div class = "form-group">
                <label for = "merkhardisk" class = "col-sm-2 control-label">Merk Flashdisk</label>
                <div class = "col-sm-8">
                    <input required="required" name="merkflashdisk" type = "text" class = "form-control"
                        id = "merkflashdisk" placeholder = "Masukkan Merk Flashdisk" value="{{ $f->merkflashdisk }}">
                </div>
            </div>
            <div class = "form-group">
                <label for = "stockhardisk" class = "col-sm-2 control-label">Stock Flashdisk</label>
                <div class = "col-sm-8">
                    <input required="required" name="stockflashdisk" type = "number" class = "form-control"
                        id = "stockflashdisk" placeholder = "Masukkan Stock Flashdisk" value="{{ $f->stockflashdisk }}">
                </div>
            </div>
            <div class = "form-group">
                <label for = "tersedia" class = "col-sm-2 control-label">Ketersediaan</label>
                <div class = "col-sm-8">
                    <input class="col-1" type = "checkbox" id = "tersedia" name="is_checked"
                        {{ $f->tersedia == 'Y' ? 'checked' : '' }}>
                </div>
            </div>
            <input type="submit" value="Simpan Data" class="btn btn-primary">
        </form>
    @endforeach
@endsection
