@extends('layout.app')




@section('content')

	<h1>Edit Posts</h1>

	<!-- <form action="{{route('posts.update', $post->id)}}" method="post"> -->

	{!! Form::model($post, ['method'=>'PATCH', 'action'=> ['PostController@update', $post->id]]) !!}


		{{ csrf_field() }}

		{!! Form:: label('title', 'Title:')!!}
		{!! Form:: text('title', null, ['class' => 'form-control']) !!}

		{!! Form:: label('content', 'Content:')!!}
		{!! Form:: textarea('content', null, ['class' => 'form-control']) !!}
		
		{!! Form:: submit('Update Posts', ['class' => 'btn btn-info']) !!}

	<br>

	<!-- </form> -->

	{!! Form::close()!!}
	
	<!-- <form method="post" action="{{ route('posts.destroy', $post->id)}}"> -->

	{!! Form::open(['method' => 'DELETE', 'action' => ['PostController@destroy', $post->id]]) !!}
		
		<br>
		 
		 {{ csrf_field() }}

		 {!! Form:: submit('Delete Post', ['class' => 'btn btn-primary']) !!}
<!-- 
	</form> -->
	{!! Form::close()!!}


@endsection