@extends('master2')
@section('judulhalaman', 'Data Pegawai')

@section('konten')
<div>
    <h2><a href="https://arek.its.ac.id/hmsi/">Departemen Sistem Informasi ITS</a></h2>
    <h3>View Pegawai</h3>
    <a href="/pegawai" class="btn btn-primary">Kembali</a>
</div>

<div class="row mt-5">
    <div class="col-6 border border-primary">
        <!-- Isi kolom pertama di sini jika diperlukan -->
    </div>
    <div class="col-6">
        @foreach ($pegawai as $p)
            <div class="row mb-4">
                <div class="col-3"><strong>Nama</strong></div>
                <div class="col-9">: {{ $p->pegawai_nama }}</div>
            </div>
            <div class="row mb-4">
                <div class="col-3"><strong>Jabatan</strong></div>
                <div class="col-9">: {{ $p->pegawai_jabatan }}</div>
            </div>
            <div class="row mb-4">
                <div class="col-3"><strong>Umur</strong></div>
                <div class="col-9">: {{ $p->pegawai_umur }}</div>
            </div>
            <div class="row mb-4">
                <div class="col-3"><strong>Alamat</strong></div>
                <div class="col-9">: {{ $p->pegawai_alamat }}</div>
            </div>
        @endforeach

        <div class="text-center mt-4">
            <a href="/pegawai" class="btn btn-primary btn-block w-50">OK</a>
        </div>
    </div>
</div>
@endsection
