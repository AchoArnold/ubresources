@include('layouts/side-nav')

@section('head')
	<meta name="description" content="Assignments for the various classes taken at the university of Buea">
	@if(Auth::user() && Auth::user()->is_admin())
     	{{HTML::script('/assets/ckeditor/ckeditor.js')}}
    @endif
@stop
@section('header')
    <h1>Assignments</h1>
          <p>Check assignments for the various courses
          <br>
          taken at the {{HTML::link('http://www.ubuea.cm','University Of Buea')}}</br>
		@if(Auth::user() && Auth::user()->is_admin())
     		@include('assignment/partials/_admin')
     	@endif
@stop
