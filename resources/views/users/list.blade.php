@extends('layouts.master')
@section('content')
<h1>List User</h1>
<table class="table table-hover">
	<thead>
		<tr>
			<th scope="col">ID</th>
			<th scope="col">Name</th>
			<th scope="col">Email</th>
			<th scope="col">Edit</th>
			<th scope="col">Detail</th>
			<th scope="col">Delete</th>
		</tr>
	</thead>
	<tbody>
		@foreach($users as $user)
		<tr>
			<td scope="row">{{$user->id}}</td>
			<td><a href="{{route('users.post_list', $user->id)}}">{{$user->name}}</a></td>
			<td>{{$user->email}}</td>
			<td><a href="{{route('users.edit', $user->id)}}" class="btn btn-primary">Edit</a></td>
			<td><a href="{{route('users.show', $user->id)}}" class="btn btn-success">Detail</a></td>
			<td><form action="{{route('users.destroy', $user->id)}}" method="POST">
				@csrf
				@method('DELETE')
				<button type="submit" class="btn btn-danger">Delete</button>
			</form></td>
		</tr>
		@endforeach
			<tr>
				<td>&nbsp</td>
				<td>&nbsp</td>
				<td>&nbsp</td>
				<td>&nbsp</td>
				<td>&nbsp</td>
				<td><a href="{{ route('users.create')}}" class="btn btn-primary">Create</a></td>
			</tr>
	</tbody>
</table>
@endsection