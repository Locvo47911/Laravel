@extends('layouts.master')
@section('content')
<h1>Edit User: {{$users->name}}</h1>
<form action="{{ route('users.update', $users->id)}}" method="POST" role="form">

	@csrf

	@method('PUT')

	<div class="form-group">
		<label for="">Name</label>
		<input type="text" class="form-control" name="name" placeholder="Input field" value="{{$users->name}}">
	</div>

	<div class="form-group">
		<label for="">Email</label>
		<input type="email" class="form-control" name="email" placeholder="Input field" value="{{$users->email}}">
	</div>

	<div class="form-group">
		<label for="">Password</label>
		<input type="password" class="form-control" name="password" placeholder="Input field" value="{{$users->password}}">
	</div>

	<button type="submit" class="btn btn-primary" action="save">Update</button>
</form>
@endsection 