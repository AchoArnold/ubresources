@extends('../layouts/default')
   
@section('head')
	<meta name="description" content="Get updated with what's happening in the university of Buea">
@stop
@section('header')
    <h1>Gist</h1>
          <p>Get updated with what's happening in the {{HTML::link('http://www.ubuea.cm','University Of Buea')}}</br>
          no matter where you are!</p>
@stop

@section('content')
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
	       <li><a href="">Twitter</a></li>
	       <li><a href="">Google+</a></li>
	       <li><a href="">facebook</a></li>
	     </ul>
	   </div>
	   </article>
	@endforeach
@stop