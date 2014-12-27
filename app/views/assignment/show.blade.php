@extends('layouts/default')
@include('assignment/partials/_header')

@section('content')
	<article class="gist-post single-post">
	   <h3>{{$assignment->course->name}} Assignment</h3>
	   <p class="post-date">
	   	@if ($assignment->given_at)
		   <p class="post-date">
		   Given on {{ExCarbon::fullTime($assignment->given_at)}}
		@endif
	   	@if ($assignment->due_at)
		   	<br>
		   	<span class="text-info">
		   		Due on {{ExCarbon::fullTime($assignment->due_at )}}
		   	</span>
		   @endif
		</p>
	   <p>{{$assignment->content}}
	   </p>
   </article>
@stop