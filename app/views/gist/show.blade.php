@extends('/layouts/default')
@include('layouts/side-nav')
   
@section('head')
	<meta name="description" content="Get updated with the latest news and events happening at the university of Buea">
@stop
@section('header')
    <h1>Gist</h1>
          <p>Get updated with what's happening in the {{HTML::link('http://www.ubuea.cm','University Of Buea')}}</br>
          no matter where you are!</p>
@stop

@section('content')
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

	<article class="gist-post single-post">
   <h3>{{$gist->title}}</h3>
   <p class="post-date">{{ExCarbon::niceDate("Posted", $gist->created_at)}}
   </p>
   <p>{{$gist->content}}
   </p>
   <div class="social-buttons">
	     <ul>
	       <li>
	       	<a href="https://twitter.com/share" data-counturl="{{Request::url()}}" class="twitter-share-button" data-related="UBresources: A web platform which provides resources for students in the university of Buea"  data-lang="en" data-count="vertical" data-url="@if(Cache::has($gist->gist_uri)){{Cache::get($gist->gist_uri)}}@else{{Request::url()}}@endif" data-text="{{$gist->title}}" data-hashtags="Education" data-via="UBresources">Tweet this</a>
	       </li>
	       <li>
					<div class="g-plusone" data-size="tall" data-href="{{Request::url()}}"></div>
	       </li>
	       <li>
					<div class="fb-share-button" data-href="{{Request::url()}}" data-type="box_count"></div>
	       </li>
	     </ul>
	   </div>
   </article>

	<div id="comments" class="post-comment">
		<div class="comment-heading">
			<h3 class='nice-header'>Join the discussion</h4>
		</div>
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
		@if(Auth::check())
		<section class="new-comment">
		   <div class="col-md-1">
				  	<img src="//gravatar.com/avatar/{{md5(Auth::user()->recovery_email)}}?s=50	" alt="profile picture" width="50">
			</div>
			<div class="col-md-11">
				<div class="panel panel-success comment-panel">
					<div class="panel-heading">
					<span class="glyphicon glyphicon-play"></span>
			    		<h4 class="panel-title">Say Something</h4>
			  		</div>
			  		<div class="panel-body comment-panel">
			  			{{Form::open( array('method' => 'post', 'url' => 'gist/'.$gist->gist_uri))}}
			  			<div class="form-group">
			  				{{Form::textarea('content', null, array('class' => 'form-control', 'placeholder' => 'Your comment goes here', 'maxlength' => '500', 'size'=>'30x4', 'oninput' => "toggle_button(this, 'post-comment')"))}}
			  			</div>
			    			<div class="text-right">
			      			{{Form::submit("Post Comment", array("class"=>"btn btn-success", 'id' => 'post-comment','disabled' => 'true'))}}
			    			</div>
						{{Form::close()}}
					</div>
				</div>
			</div>
		</section>
	@else
		Please {{HTML::link('login','Login')}} or {{HTML::link('join','sign up')}} to post a comment
	@endif
		<section class="old-comments">
			@foreach($comments as $comment)
				<div class="col-md-1">
				  	<img src="http://gravatar.com/avatar/{{md5(User::find($comment->author_id)->recovery_email)}}?s=50" alt="profile picture" width="50">
				</div>
				<div class="col-md-11">
					<div class="panel panel-default">
						<div class="panel-heading">
				    		<h4 class="panel-title">
				    			<span class="glyphicon glyphicon-play"></span>
				    			{{ExCarbon::niceDate("Commented", $comment->created_at)}}
				    			@if(Auth::check() && (Auth::user()->id == $comment->author_id))
				    				<a href="{{URL::to('gist/'.$comment->id.'/delete')}}" onclick="confirm_delete(event);"><span class="glyphicon glyphicon-remove"></span></a>
				    			@endif
				    		</h4>
				  		</div>
				  		<div class="panel-body">
				  			{{$comment->content}}
						</div>
					</div>
				</div>
		@endforeach
		</section>
	</div>
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/platform.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
@stop