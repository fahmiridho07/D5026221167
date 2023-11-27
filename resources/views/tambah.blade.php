@extends('master2')

@section('konten')
    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>Data Pegawai</h3>

    <a href="/pegawai"> Kembali</a>

    <br />
    <br />

    <form action="/pegawai/store" method="post" class="form-horizontal">
        {{ csrf_field() }}
        <div class = "form-group">
            <label for = "nama" class = "col-sm-2 control-label">Nama</label>
            <div class = "col-sm-8">
                <input name="nama" type = "text" class = "form-control" id = "nama"
                    placeholder = "Masukkan Nama Pegawai">
            </div>
        </div>
        Nama
        <br><input type="text" name="nama" required="required"> <br />
        Jabatan
        <br><input type="text" name="jabatan" required="required"> <br />
        Umur
        <br><input type="number" name="umur" required="required"> <br />
        Alamat
        <br>
        <textarea name="alamat" required="required"></textarea> <br />
        <input type="submit" value="Simpan Data">
    </form>
@endsection
