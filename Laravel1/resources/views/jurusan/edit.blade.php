@extends('layouts.app')

@section('title') CRUD Laravel - Edit Jurusan
@endsection

@section('content')

<h1>Edit Data Jurusan</h1>

<form method="POST" action="{{route('update_jurusan')}}">
	<input type="hidden" name="id" value="{{$jurusan->id}}">
	@include('jurusan.forms')
</form>

@endsection