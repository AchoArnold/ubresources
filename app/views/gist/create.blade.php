@extends('/layouts/default')
@include('gist/partials/_header')

@section('content')
  <div class="panel panel-success">
      <div class="panel-heading"><h2>Create a new Article</h2></div>
      	<div class="panel-body">
        		{{Form::open(array('method' =>'POST', 'route' => 'gist.store' ))}}
          		@include('gist/partials/_form')
        		{{Form::close()}}
      	</div>
   	</div>
  </div>
@stop