@extends('master2')

@section('konten')
    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>Edit Data Pegawai</h3>

    <a href="/pegawai"> Kembali</a>

    <br />
    <br />

    @foreach ($pegawai as $p)
        {{-- <form action="/pegawai/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br />
            Nama <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}"> <br />
            Jabatan <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"> <br />
            Umur <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}"> <br />
            Alamat
            <textarea required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea> <br /> --}}
        {{-- <input type="submit" value="Simpan Data"> --}}
        {{-- </form> --}}
        <form action="/pegawai/update" method="post" class="form-horizontal">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $p->pegawai_id }}">
            <div class = "form-group">
                <label for = "nama" class = "col-sm-2 control-label">Nama</label>
                <div class = "col-sm-8 ">
                    <input name="nama" type = "text" class = "form-control" id = "nama"
                        placeholder = "Masukkan Nama Pegawai" value="{{ $p->pegawai_nama }}">
                </div>
            </div>
            <div class = "form-group">
                <label for = "jabatan" class = "col-sm-2 control-label">Jabatan</label>
                <div class = "col-sm-8 ">
                    <input name="jabatan" type = "text" class = "form-control" id = "jabatan"
                        placeholder = "Masukkan Jabatan Pegawai" value="{{ $p->pegawai_jabatan }}">
                </div>
            </div>
            <div class = "form-group">
                <label for = "umur" class = "col-sm-2 control-label">Umur</label>
                <div class = "col-sm-8 ">
                    <input name="umur" type = "number" class = "form-control" id = "umur"
                        placeholder = "Masukkan Umur Pegawai" value="{{ $p->pegawai_umur }}">
                </div>
            </div>
            <div class = "form-group">
                <label for = "alamat" class = "col-sm-2 control-label">Alamat</label>
                <div class = "col-sm-8 ">
                    <textarea name="alamat" type = "text" class = "form-control" id = "alamat" placeholder = "Masukkan Alamat Pegawai">{{ $p->pegawai_alamat }}</textarea>
                </div>
            </div>
            {{-- Nama
            <br><input type="text" name="nama" required="required"> <br />
            Jabatan
            <br><input type="text" name="jabatan" required="required"> <br />
            Umur
            <br><input type="number" name="umur" required="required"> <br />
            Alamat
            <br>
            <textarea name="alamat" required="required"></textarea> <br /> --}}
            <input type="submit" value="Simpan Data" class="btn btn-primary">
        </form>
    @endforeach
@endsection
