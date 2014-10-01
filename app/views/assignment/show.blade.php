@extends('/layouts/default')
@include('gist/partials/_header')

@section('content')
	<article class="gist-post single-post">
   <h3>{{$gist->title}}</h3>
   <p class="post-date">{{ExCarbon::niceDate("Posted", $gist->updated_at)}}
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
			  				{{HTML::decode(Form::textarea('content', null, array('class' => 'form-control', 'placeholder' => 'Your comment goes here', 'maxlength' => '500', 'size'=>'30x4', 'oninput' => "toggle_button(this, 'post-comment')")))}}
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
				  	<img src="//gravatar.com/avatar/{{md5(Auth::user()->recovery_email)}}?s=50	" alt="profile picture" width="50">
				</div>
				<div class="col-md-11">
					<div class="panel panel-default">
						<div class="panel-heading">
				    		<h4 class="panel-title">
				    			<span class="glyphicon glyphicon-play"></span>
				    			{{ExCarbon::niceDate("Commented", $comment->updated_at)}}
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