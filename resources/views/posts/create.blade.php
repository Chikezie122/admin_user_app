@extends('layout.app')




@section('content')
	
	<h1>Create Posts</h1>

<!-- 	<form action="{{ url('/posts') }}" method="post"> -->
	{!! Form:: open(['method' => 'POST', 'action' => 'PostController@store', 'files' => true]) !!}

		<div class="form-group">
			
			{!! Form:: label('title', 'Title:') !!}
			{!! Form:: text('title', null, ['class'=>'form-control'])!!}

		</div>
		
		<br>

		<div class="form-group">
			
			{!! Form:: label('content', 'Content:')!!}
			{!!Form:: textarea('content', null, ['class'=>'form-control']) !!}

		</div>

		<div class="form-group">
			
			{!! Form:: file('file', null, ['class'=>'form-control'])!!}

		</div>



		

		{!!Form:: submit('Create Posts', ['class' => 'btn btn-primary'])!!}
	

	<!-- </form> -->

	{!! Form:: close()!!}

	@if(count($errors) > 0)
		
		<div class = 'alert alert-danger'>
			
			<ul>
				
				@foreach($errors->all() as $error)
					
					<li> {{ $error }} </li>

				@endforeach

			</ul>

		</div>

	@endif

@endsection
