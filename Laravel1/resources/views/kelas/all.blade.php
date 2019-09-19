@extends('layouts.app')

@section ('title') CRUD Laravel - Data Kelas @endsection

@section('content')

	<h1>Data kelas</h1>

	<a class="btn wavest-effect waves-light" href="{{route('tambah_kelas')}}">Tambah Kelas</a>

	<table>
		<thead>
			<th>Jurusan</th>
			<th>Kelas</th>
			<th>Jumlah Siswa</th>
			<th>Lokasi</th>
			<th>Edit</th>
			<th>Delete</th>
		</thead>
		@foreach($kelas as $key)
		<tbody>
			<tr>
				<td>{{$key->jurusan->nama}}</td>
				<td>{{$key->kelas}}</td>
				<td>{{$key->jumlah_siswa}}</td>
				<td>{{$key->lokasi}}</td>
				<td><a href="{{route('edit_kelas',[$key->id])}}">Edit</a></td>
				<td><a onclick="return confirm('Hapus Data {{$key->kelas}}?')" href="{{route('delete_kelas',[$key->id])}}">Delete</td>
			</tr>
		</tbody>
		@endforeach
	</table>

	{!!$kelas->render()!!}
@endsection