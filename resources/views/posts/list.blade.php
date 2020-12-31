@extends('layouts.master')
@section('content')
<h1>List Post</h1>
<table class="table table-hover">
	<thead>
		<tr>
			<th scope="col">ID</th>
			<th scope="col">Title</th>
			<th scope="col">Content</th>
			<th scope="col">Edit</th>
		</tr>
	</thead>
	<tbody>
		@foreach($posts as $post)
		<tr>
			<td scope="row">{{$post->id}}</td>
			<td>{{$post->title}}</td>
			<td>{{$post->content}}</td>
			<td><a href="{{route('posts.edit', $post->id)}}"  class="btn btn-success">Edit</a></td>
		</tr>
		@endforeach
			<tr>
				<td>&nbsp</td>
				<td>&nbsp</td>
				<td>&nbsp</td>
				<td><a href="{{route('posts.create')}}" class="btn btn-primary">Create</a></td>
			</tr>
	</tbody>
</table>
@endsection

