@extends('layouts.master')
@section('content')
<h1>Edit User: {{$posts->id}}</h1>
<form action="{{ route('posts.update', $posts->id)}}" method="POST" role="form">

	@csrf

	@method('PUT')

	<div class="form-group">
		<label for="">Title</label>
		<input type="text" class="form-control" name="title" placeholder="Input field" value="{{$posts->title}}">
	</div>

	<div class="form-group">
		<label for="">Content</label>
		<input type="text" class="form-control" name="content" placeholder="Input field" value="{{$posts->content}}">
	</div>

	<button type="submit" class="btn btn-primary" action="save">Update</button>
</form>
@endsection 