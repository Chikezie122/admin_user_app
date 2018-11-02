@extends('layout.app')




@section('content')

	<ul>
		
		@foreach($posts as $post)
			
			<div>
				<img height="50px" width="50px" src="{{ $post->path}}" alt="The uploaded image">
			</div>

			<li><a href="{{route('posts.show', $post->id)}}">{{$post->title}}</a></li>
		
		@endforeach



	</ul>

@endsection

