@extends('layouts/default')
@include('assignment/partials/_header')

@section('content')
	@if (empty($assignments))
		<div class="text-center">
		 	<h1>There are no assignments presently</h1>
		</div>
	@else
		@foreach($assignments as $assignment)
			<article class="gist-post">
			   <h3>{{HTML::link('assignments/'.$assignment->uri, $assignment->course_ids)}}</h3>
			   <p class="post-date">
			   	{{ExCarbon::niceDate("Posted", $assignment->created_at)}}
			   </p>
			   <p>
			   	@if(strlen($assignment->content) > 200)
			   		{{substr($assignment->content, 0,strpos($assignment->content, '. ', 150))}}
			   	@else
			   		{{$assignment->content}}
			   	@endif
			   	[{{HTML::link('assignments/'.$assignment->uri,'Read more')}}]
			   </p>
		   </article>
		@endforeach
	@endif
@stop