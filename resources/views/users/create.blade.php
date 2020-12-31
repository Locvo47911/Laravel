@extends('layouts.master')
@section('content')
<h1>Create User</h1>
<form action="{{ route('users.store')}}" method="POST" role="form">

	@csrf

	<div class="form-group">
		<label for="">Name</label>
		<input type="text" class="form-control" name="name" placeholder="Input field" value="{{old('name')}}">
		@if($errors->has('name'))
		<p style="color: red">{{$errors->first('name')}}</p>
		@endif
	</div>

	<div class="form-group">
		<label for="">Email</label>
		<input type="email" class="form-control" name="email" placeholder="Input field" value="{{old('email')}}">
		@if($errors->has('email'))
		<p style="color: red">{{$errors->first('email')}}</p>
		@endif
	</div>

	<div class="form-group">
		<label for="">Password</label>
		<input type="password" class="form-control" name="password" placeholder="Input field" value="{{old('password')}}">
		@if($errors->has('password'))
		<p style="color: red">{{$errors->first('password')}}</p>
		@endif
	</div>

	<button type="submit" class="btn btn-primary" action="save">Create</button>
</form>
@endsection