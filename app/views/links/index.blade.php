@extends('/layouts/default')
@include('layouts/side-nav')
   
@section('head')
	<meta name="description" content="Links to some external sites which provide top notch resources">
@stop
@section('header')
   <h1>Useful Links</h1>
          <p>These are some links to external sites which provide top notch resources you should know about
    </p>
@stop

@section('content')
    @foreach($articles as $article)
      <div class="col-md-6">
       <h2>{{$article->title}}</h2>
       <p>
        {{$article->content}}
       </p>
       </div>
  @endforeach
  <div class="add-content">
    <p>Please feel free to e-mail us any link you feel we should add to this page at {{HTML::mailto('support@ubresources.com')}}
    </p>
  </div>
@stop