@extends('../layouts/default')
   
@section('head')
	<meta name="description" content="Search for news, timetables, past questions, and course outlines">
@stop

@section('header')
    <h1>Search</h1>
          <p>Easily search this website for  news, timetables, past questions, and course outlines</p>
@stop

@section('content')
	@if(isset($query))
		<h4>Search results for: <code>"{{$query}}"</code></h4>
		@if(is_array($gists) && $gists != NULL)
			<ul>
			@foreach($gists as $gist)
				<li>
				<article class="search-post">
			   <h4>{{HTML::link('gist/'.$gist->gist_uri, $gist->title)}}</h4>
			   <p>
			   	{{substr($gist->content, 0,strpos($gist->content, '. ', 150))}}
			   	[{{HTML::link('gist/'.$gist->gist_uri,'Read more')}}]
			   </p>
			   </article>
			   </li>
			@endforeach
			</ul>
			@else
				<div class="alert alert-danger fade in">
		      	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			   	<p><strong>Sorry!</strong> There is no content in this site is related to <code>"{{$query}}"</code></p>
		 		</div>
		@endif
		@else
				<div class="panel search-panel panel-success">
					<div class="panel-heading">
			    		<h3 class="text-center">Search this site for news, timetables, past questions, <br/>and course outlines</h3>
			  		</div>
			  		<div class="panel-body">
			  			{{Form::open( array('method' => 'GET', 'class' =>'nav bar-form', 'url' => 'search' ))}}
	              <div class="form-group">
	                {{Form::text('q',NULL, array('class' => 'form-control','maxlength' => '20', 'placeholder' => 'Please enter your search query', 'oninput' => "toggle_button(this, 'post-main-query')"))}}
	              </div>
	              <div class="text-right">
	              	<button type="submit" id="post-main-query" class="btn  btn-info" disabled><span class="glyphicon glyphicon-search"></span>Search</button>
	             	</div>
	            {{Form::close()}}
					</div>
				</div>
       @endif
@stop