@extends('master2')
@section('title', 'Database Pegawai')

@section('judul_halaman')
    <h2>www.malasngoding.com</h2>
    <h3>Data Pegawai</h3>

    <a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>

    <br />
    <br />
@endsection

@section('konten')
    {{-- <div class="form-group">
            <label for="nama" class="col-sm-2 control-label">Nama</label>
            <div class="col-sm-10">
                <input name="nama" type="text" class="form-control" id="nama" value="{{ $p->pegawai_nama }}" required="required" disabled>
            </div>
        </div> --}}

    <p>Cari Data Pegawai :</p>
    <form action="/pegawai/cari" class="d-flex" method="GET">
        <input class='form-control w-fit' type="text" name="cari" placeholder="Cari pegawai berdasarkan nama ..."
            value="{{ old('cari') }}">
        <button type="submit" class="btn btn-primary">CARI</button>
    </form>


    <table class="table table-striped table-hover">
        <tr>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Opsi</th>
        </tr>
        @foreach ($pegawai as $p)
            <tr>
                <td>{{ $p->pegawai_nama }}</td>
                <td>{{ $p->pegawai_jabatan }}</td>
                <td
                    @if ($p->pegawai_umur <= 20) class="bg-success text-white"
                @elseif ($p->pegawai_umur >= 21 && $p->pegawai_umur <= 30)
                    class="bg-warning text-danger"
                @else
                    class="bg-primary text-white" @endif>
                    {{ $p->pegawai_umur }}</td>
                <td>{{ $p->pegawai_alamat }}</td>
                <td>
                    <a href="/pegawai/view/{{ $p->pegawai_id }}" class="btn btn-success">View</a>
                    |
                    <a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-warning">Edit</a>
                    |
                    <a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $pegawai->links() }}

@endsection

</html>
