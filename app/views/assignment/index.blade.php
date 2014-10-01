@extends('layouts/default')
@include('assignment/partials/_header')

@section('content')
	@if (isset($assignments))
		@if (!$assignments->count())
			<div class="text-center">
			 	<h1>There are no assignments presently.<br>Please come back a little later</h1>
			</div>
		@else
			@foreach($assignments as $assignment)
				<article class="gist-post">
				   <h3>{{link_to_route('assignments.show','Object Oriented Programming (CEF306) Assignment',  [$assignment->uri])}}</h3>
				   <p class="post-date">
				   	{{ExCarbon::niceDate("Posted", $assignment->created_at)}}
				   </p>
				   <p>
				   	@if(strlen($assignment->content) > 200)
				   		{{substr($assignment->content, 0,strpos($assignment->content, '. ', 150))}}
				   	@else
				   		{{$assignment->content}}
				   	@endif
				   	[{{link_to_route('assignments.show','Read More',  [$assignment->uri])}}]
				   </p>
			   </article>
			@endforeach
		@endif

	@else
		<div class="text-center">
			<h1>
				Please complete your profile information so we can determine which assignments we should be displaying.
			</h1>
			<a href="{{URL::to('account/edit')}}" class="btn btn-warning btn-lg">Edit Profile <span class="glyphicon glyphicon-hand-right"></a>
		</div>
	@endif

@stop