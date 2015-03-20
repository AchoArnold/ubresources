@include('layouts/side-nav')

@section('head')
	<meta name="description" content="Assignments for the various classes taken at the university of Buea">
@stop
@section('header')
    <h1>Assignments</h1>
          <p>Easily check assignments for the various classes taken at  {{HTML::link('http://www.ubuea.cm','University Of Buea')}}</br>
          no matter where you are!</p>
		@if(Auth::user() && Auth::user()->is_admin())
     		@include('assignment/partials/_admin')
     	@endif
@stop
