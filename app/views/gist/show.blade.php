@extends('../layouts/default')
   
@section('head')
	<meta name="description" content="Get updated with the latest news and events happening at the university of Buea">
@stop
@section('header')
    <h1>Gist</h1>
          <p>Get updated with what's happening in the {{HTML::link('http://www.ubuea.cm','University Of Buea')}}</br>
          no matter where you are!</p>
@stop

@if( Session::has('message') )
	@section('message')
		<div class="alert alert-success fade in">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	   <p>
	   	@if(is_array(Session::get('message')))
				@foreach(Session::get('message') as $messages)
					<strong><span class="glyphicon glyphicon-ok-circle"></span></strong>
					{{$messages}}<br/>
				@endforeach
			@else
	   		<strong><span class="glyphicon glyphicon-ok-circle"></span></strong>
	   		{{Session::get('message')}}
			@endif
	   </p>
 		</div>
	@stop
@endif

@if(Session::has('error'))
	@section('error')
		 <div class="alert alert-danger fade in">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
       <p>
			@if(is_array(Session::get('error')))
				@foreach(Session::get('error') as $errors)
					<strong><span class="glyphicon glyphicon-remove-circle"></span></strong>
					{{$errors}}<br/>
				@endforeach
			@else
	   		<strong><span class="glyphicon glyphicon-remove-circle"></span></strong>
	   		{{Session::get('error')}}
			@endif
      </p>
   </div>
  	@stop
@endif


@section('content')
	<article class="gist-post">
   <h3>{{$gist->title}}</h3>
   <p class="post-date">{{ExCarbon::niceDate("Posted", $gist->created_at)}}
   </p>
   <p>{{$gist->content}}
   </p>
   <div class="social-buttons">
     <ul>
       <li><a href="">Twitter</a></li>
       <li><a href="">Google+</a></li>
       <li><a href="">facebook</a></li>
     </ul>
   </div>
   </article>

	<div id="comment" class="post-comment">
		<div class="comment-heading">
			<h4>Join the discussion</h4>
		</div>
		
		<section class="old-comments">
			@foreach($comments as $comment)
				<div class="col-md-1">
				  	<img src="/assets/images/profile-pic.jpg" alt="profile picture" width="50">
				</div>
				<div class="col-md-11">
					<div class="panel panel-default">
						<div class="panel-heading">
				    		<h4 class="panel-title">
				    			<span class="glyphicon glyphicon-play"></span>
				    			{{ExCarbon::niceDate("Commented", $comment->created_at)}}
				    			<a href="{{URL::to('gist/'.$comment->id.'/delete')}}" onclick="confirm_delete(event);"><span class="glyphicon glyphicon-remove"></span></a>
				    		</h4>
				  		</div>
				  		<div class="panel-body">
				  			{{$comment->content}}
						</div>
					</div>
				</div>
		@endforeach
		</section>

		<section class="new-comment">
		   <div class="col-md-1">
				  	<img src="/assets/images/profile-pic.jpg" alt="profile picture" width="50">
			</div>
			<div class="col-md-11">
				<div class="panel panel-success">
					<div class="panel-heading">
					<span class="glyphicon glyphicon-play"></span>
			    		<h4 class="panel-title">Say Something</h4>
			  		</div>
			  		<div class="panel-body">
			  			{{Form::open( array('method' => 'post', 'url' => 'gist/'.$gist->gist_uri))}}
			  			<div class="form-group">
			  				{{Form::textarea('content', null, array('class' => 'form-control', 'placeholder' => 'Your comment goes here', 'maxlength' => '500', 'size'=>'30x4', 'oninput' => "toggle_button(this, 'post-comment')"))}}
			  			</div>
			  			<div class="form-group">
			    			<div class="text-right">
			      			{{Form::submit("Post Comment", array("class"=>"btn btn-success", 'id' => 'post-comment','disabled' => 'true'))}}
			    			</div>
						</div>
						{{Form::close()}}
					</div>
				</div>
			</div>
		</section>
	</div>
@stop