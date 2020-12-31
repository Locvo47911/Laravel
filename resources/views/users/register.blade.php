@extends('layouts.master')
@section('content')
<h1>Register</h1>
<form action="{{ route('register')}}" method="POST" role="form">

	@csrf

	<div class="form-group">
		<label for="">Name</label>
		<input type="text" class="form-control" name="name" placeholder="Input field">
	</div>

	<div class="form-group">
		<label for="">Email</label>
		<input type="email" class="form-control" name="email" placeholder="Input field">
	</div>

	<div class="form-group">
		<label for="">Password</label>
		<input type="password" class="form-control" name="password" placeholder="Input field">
	</div>

	<button type="submit" class="btn btn-primary" action="save">Create</button>
</form>
@endsection