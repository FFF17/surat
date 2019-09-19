@extends('layouts.app')

@section ('title') CRUD Laravel - Data Jurusan @endsection

@section('content')

	<h1>Data Jurusan</h1>

	<a class="btn wavest-effect waves-light" href="{{route('tambah_jurusan')}}">Tambah Jurusan</a>

	<table>
		<thead>
			<th>Nama</th>
			<th>Kajur</th>
			<th>Keterangan</th>
			<th>Akreditasi</th>
			<th>Edit</th>
			<th>Delete</th>
		</thead>
		@foreach($jurusan as $key)
		<tbody>
			<tr>
				<td>{{$key->nama}}</td>
				<td>{{$key->kajur}}</td>
				<td>{{$key->keterangan}}</td>
				<td>{{$key->akreditasi}}</td>
				<td><a href="{{route('edit_jurusan',[$key->id])}}">Edit</a></td>
				<td><a onclick="return confirm('Hapus Data {{$key->jurusan}}?')" href="{{route('delete_jurusan',[$key->id])}}">Delete</td>
			</tr>
		</tbody>
		@endforeach
	</table>

	{!!$jurusan->render()!!}

@endsection