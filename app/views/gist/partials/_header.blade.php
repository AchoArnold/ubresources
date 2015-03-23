@include('layouts/side-nav')

@section('head')
	<meta name="description" content="Get updated with the latest news and events happening at the university of Buea">
	@if(Auth::user() && Auth::user()->is_admin())
     	{{HTML::script('/assets/ckeditor/ckeditor.js')}}
    @endif
@stop
@section('header')
    <h1>Gist</h1>
          <p>Get updated with what's happening in the {{HTML::link('http://www.ubuea.cm','University Of Buea')}}</br>
          no matter where you are!</p>
		@if(Auth::user() && Auth::user()->is_admin())
     		@include('gist/partials/_admin')
     	@endif
@stop
