@extends('layouts.master')
@section('content')
<h1>Login 1:</h1>
<form action="{{route('login')}}" method="POST" role="form">
	@csrf
	<div class="form-group">
		<label for="">Email</label>
		<input type="email" class="form-control" name="email" placeholder="Input field" value="{{old('email')}}">
	</div>

	<div class="form-group">
		<label for="">Password</label>
		<input type="password" class="form-control" name="password" placeholder="Input field">
	</div>
	@if(session()->has('fail'))
	<p style="color:red">{{session()->get('fail')}}</p>
	@endif
	<button type="submit" class="btn btn-primary">Login</button>
</form>
@endsection