@extends('/layouts/default')
@include('layouts/side-nav')

@section('head')
	<meta name="description" content="Get updated with what's happening in the university of Buea">
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

	@foreach($gists as $gist)
		<article class="gist-post">
	   <h3>{{HTML::link('gist/'.$gist->gist_uri, $gist->title)}}</h3>
	   <p class="post-date">
	   	{{ExCarbon::niceDate("Posted", $gist->created_at)}}
	   </p>
	   <p>
	   	{{substr($gist->content, 0,strpos($gist->content, '. ', 150))}}
	   	[{{HTML::link('gist/'.$gist->gist_uri,'Read more')}}]
	   </p>
	   <div class="social-buttons">
	     <ul>
	       <li>
	       	<a href="https://twitter.com/share" data-counturl="{{URL::to('gist/'.$gist->gist_uri)}}" class="twitter-share-button" data-related="UBresources: A web platform which provides resources for students in the university of Buea"  data-lang="en" data-count="horizontal" data-url="@if(Cache::has($gist->gist_uri)){{Cache::get($gist->gist_uri)}}@else {{Isgd::shorten($gist->gist_uri)['shortURL']}}@endif" data-text="{{$gist->title}}" data-hashtags="Education" data-via="UBresources">Tweet this</a>
	       </li>
	       <li>
					<div class="g-plusone" data-size="medium" data-href="{{URL::to('gist/'.$gist->gist_uri)}}"></div>
	       </li>
	       <li>
					<div class="fb-share-button" data-href="{{URL::to('gist/'.$gist->gist_uri)}}" data-type="button_count"></div>
	       </li>
	     </ul>
	   </div>
	   </article>
	@endforeach
	<!-- Place this tag after the last +1 button tag. -->
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/platform.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
@stop