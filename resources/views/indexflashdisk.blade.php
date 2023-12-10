@extends('master2')
@section('title', 'Data Flashdisk')

@section('judul_halaman')
    <h3>Data Flashdisk</h3>

    <a href="/flashdisk/tambah" class="btn btn-primary"> + Tambah Flashdisk Baru</a>

    <br />
    <br />
@endsection

@section('konten')

    <p>Cari Data Flashdisk :</p>
    <form action="/flashdisk/cari" class="form-inline" method="GET">
        <input class='form-control' type="text" name="cari" placeholder="Cari flashdisk..."
            value="{{ old('cari') }}">
        <button type="submit" class="btn btn-primary ml-2">CARI</button>
    </form>


    <table class="table table-striped table-hover" style="text-align: center;">
        <tr>
            <th>Kode Flashdisk</th>
            <th>Merk Flashdisk</th>
            <th>Stock Flashdisk</th>
            <th>Ketersediaan Barang</th>
            <th>Opsi</th>
        </tr>
        @foreach ($flashdisk as $f)
            <tr>
                <td>{{ $f->kodeflashdisk }}</td>
                <td>{{ $f->merkflashdisk }}</td>
                <td>{{ $f->stockflashdisk }}</td>
                <td>
                    <input type="checkbox" id="tersediaCheckbox" name="is_checked"
                        {{ $f->tersedia === 'Y' ? 'checked' : '' }} disabled>
                </td>
                <td>
                    <a href="/flashdisk/view/{{ $f->kodeflashdisk }}" class="btn btn-success">View</a>
                    |
                    <a href="/flashdisk/edit/{{ $f->kodeflashdisk }}" class="btn btn-warning">Edit</a>
                    |
                    <a href="/flashdisk/hapus/{{ $f->kodeflashdisk }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection

</html>
