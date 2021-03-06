@extends('layout.main')
@section('title', 'Laravel - SI Absen')
@section('content')

<div class="container">
<div class="jumbotron">
<h1 class="display-6">Tambah Data Mahasiswa</h1>
<hr class="my-4">
<form action="/mahasiswa" method="POST">

@csrf

<div class="form-group">
<label for="id">Id</label>
<input type="text" class="form-control" id="Id"
                    name="Id" placeholder="Id"
                    value="{{ old('Id') }}">
</div>

<div class="form-group">
<label for="nama">Nama Mahasiswa</label>
<input type="text" class="form-control" id="nama"
                    name="nama_mahasiswa" placeholder="Nama mahasiswa"
                    value="{{ old('nama_mahasiswa') }}">
</div>

<div class="form-group">
<label for="alamat">Alamat</label>
<input type="text" class="form-control" id="alamat"
                    name="alamat" placeholder="Alamat"
                    value="{{ old('alamat') }}">

</div>
<div class="form-group">
<label for="no_tlp">No. HP</label>
<input type="text" class="form-control" id="no_tlp"
                    name="no_tlp" placeholder="NO. HP"
                    value="{{ old('no_tlp') }}">
</div>
</div>
<div class="form-group">
<label for="email">Email</label>
<input type="email" class="form-control" id="email"
                    name="email" aria-describedby="emailHelp"
                    placeholder="Enter email" value="{{ old('email') }}">
</div>

<button type="submit" class="btn btn-primary">Simpan</button>
</form>
</div>
</div>
@endsection
