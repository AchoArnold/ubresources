@extends('layouts/default')
@include('assignment/partials/_header')

@section('content')
	<article class="gist-post single-post">
	   <h3>{{$assignment->course->name}} Assignment</h3>
	   <p class="post-date">
	   	{{ExCarbon::niceDate("Posted", $assignment->created_at)}}
	   	@if ($assignment->due_at)
		   	<br>
		   	<span class="text-info">
		   		{{ExCarbon::niceDate("Due", new Carbon\Carbon ($assignment->due_at ))}}
		   	</span>
		   @endif
		</p>
	   <p>{{$assignment->content}}
	   </p>
   </article>
@stop