@extends('layouts.master')
@section('content')
<h1>Create Post</h1>
<form action="{{ route('posts.store')}}" method="POST" role="form">

	@csrf

	<div class="form-group">
		<label for="">Title</label>
		<input type="text" class="form-control" name="title" placeholder="Input field">
	</div>

	<div class="form-group">
		<label for="">Content</label>
		<input type="text" class="form-control" name="content" placeholder="Input field">
	</div>

	<button type="submit" class="btn btn-primary" action="save">Create</button>
</form>
@endsection