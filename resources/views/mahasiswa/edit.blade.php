@extends('layouts.app')

@section('title', 'Laravel - SI Absensi')

@section('content')
<form action="/mahasiswa/{{ $mahasiswa['alamat'] }}" method="post">
  @csrf
  @method('PUT')
  <div class="form-group">
    <label for="exampleInputEmail1">Id</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="Id" aria-describedby="emailHelp" value="{{ old('Id') ? old('Id') : $maha['Id'] }}">
    @error('Id')
    <div class="alert alert-danger">{{ $message}}</div>
    @enderror
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Nama Mahasiswa</label>
    <input type="text" class="form-control" name="nama_mahasiswa" id="exampleInputPassword1" value="{{ old('nama_mahasiswa') ? old('nama_mahasiswa') : $maha['nama_mahasiswa'] }}">
    @error('nama_mahasiswa')
    <div class="alert alert-danger">{{ $message}}</div>
    @enderror
  </div>

  <div class="form-group">
<label for="alamat">Alamat</label>
<input type="text" class="form-control" id="alamat"
                    name="alamat" aria-describedby="alamat"
                    placeholder="alamat" value="{{ old('alamat') }}">
</div>

<div class="form-group">
<label for="no_tlp">No. HP</label>
<input type="text" class="form-control" id="no_tlp"
                    name="no_tlp" placeholder="NO. HP"
                    value="{{ old('no_tlp') }}">
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
