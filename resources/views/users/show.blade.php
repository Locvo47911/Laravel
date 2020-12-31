@extends('layouts.master')
@section('content')
<h1>Detail: </h1>
<div class="card" style="width: 18rem;">
  <img src="{{asset('img/indian2.jpg')}}" class="card-img-top" alt="img" width="140" height="140">
  <div class="card-body">
  	<h5 class="card-title">User: {{$users->name}}</h5>
    <p class="card-text">Email:{{$users->email}}</p>
    <a href="{{route ('users.edit', $users->id)}}"></a>
  </div>
</div>
<h1>List Comment: </h1>
<table class="table table-hover">
	<thead>
		<tr>
			<th scope="col">ID</th>
			<th scope="col">Content</th>
			<th scope="col">Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach($users->comments as $comment)
		<tr>
			<td scope="row">{{$comment->id}}</td>
			<td>{{$comment->content}}</td>
			<td><a href="#" class="btn btn-primary">Edit</a></td>
			<td><a href="#" class="btn btn-success">Detail</a></td>
			<td><form action="#" method="POST">
				@csrf
				@method('DELETE')
				<button type="submit" class="btn btn-danger">Delete</button>
			</form></td>
		</tr>
		@endforeach
	</tbody>
</table>
<hr>
<h1>List Post: </h1>
<table class="table table-hover">
	<thead>
		<tr>
			<th scope="col">ID</th>
			<th scope="col">Title</th>
			<th scope="col">Content</th>
			<th scope="col">Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach($users->posts as $post)
		<tr>
			<td scope="row">{{$post->id}}</td>
			<td>{{$post->title}}</td>
			<td>{{$post->content}}</td>
			<td><a href="#" class="btn btn-primary">Edit</a></td>
			<td><a href="#" class="btn btn-success">Detail</a></td>
			<td><form action="#" method="POST">
				@csrf
				@method('DELETE')
				<button type="submit" class="btn btn-danger">Delete</button>
			</form></td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection