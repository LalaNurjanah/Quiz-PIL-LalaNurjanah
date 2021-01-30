@extends('layout.main')
@section('title', 'Laravel - SI Absensi')
@section('content')



<div class="container">
<div class="jumbotron">
<h1 class="display-6">SILAHKAN MENGISI ABSENSI</h1>
<hr class="my-4">
<form action="absen" method="POST">


<div class="form-group">
<label for="nama">Id</label>
<input type="text" class="form-control" id="nama"
                    name="id" placeholder="id"
                    value="">
</div>

<div class="form-group">
<label for="waktu_absen">Waktu Absen</label>
<input type="time" class="form-control" id="waktu_absen"
                    name="id" placeholder="id"
                    value="">
<div class="form-group">
<label for="nama_mahasiswa">Nama Mahasiswa</label>
<input type="text" class="form-control" id="nama_mahasiswa"
                    name="nama_mahasiswa" placeholder="nama_mahasiswa"
                    value="">

</div>

<div class="form-group">
<label for="matakuliah">Matakuliah</label>
<select class="form-control" id="matakuliah"
                    name="matakuliah">
<option value="Pemograman Internet Lanjut">Pemograman Internet Lanjut</option>
<option value="Web Development">Web Development</option>
</select>
</div>
<div class="form-group">
<label for="keterangan">Keterangan</label>
<select class="form-control" id="keterangan"
                    name="keterangan">
<option value="Hadir">Hadir</option>
<option value="Sakit">Sakit</option>
<option value="Izin">Izin</option>
</select>
</div>
<button type="submit" class="btn btn-primary">Kirim</button>
</form>
</div>
</div>

