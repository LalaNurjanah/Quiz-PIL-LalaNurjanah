@extends('layout.main')
@section('title', 'Laravel - SI Absen')
@section('content')

<div class="container">
<div class="jumbotron">
@if(session('msg'))
<div class="alert alert-success alert-dismissible fade show mt-2"
                role="alert">
{{session('msg')}}
<button type="button" class="close" data-dismiss="alert"
                aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
@endif

<h1 class="display-6">Daftar Mahasiswa</h1>
<hr class="my-4">
<a href="mahasiswa/create" class="btn btn-primary mb-1">
Daftar Mahasiswa</a>

<table class="table">
<thead class="thead-dark">
<tr>
<th scope="col">#</th>
<th scope="col">id</th>
<th scope="col">Nama_mahasiswa</th>
<th scope="col">Alamat</th>
<th scope="col">No_tlp</th>
<th scope="col">Email</th>
<th></th>


</tr>
</thead>
<tbody>
@foreach ($mahasiswa as $maha)
<tr>
<td>{{ $loop->iteration }}</td>
<td>{{ $maha->id }}</td>
<td>{{ $maha->nama_mahasiswa }}</td>
<td>{{ $maha->alamat }}</td>
<td>{{ $maha->no_tlp }}</td>
<td>{{ $maha->email }}</td>
<td>

<a href="/mahasiswa/{{$maha['alamat']}}/edit" class="card-link btn-warning">Edit</a>
<a href="" class="badge badge-danger">Hapus</a>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
@endsection
