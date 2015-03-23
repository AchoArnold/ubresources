@extends('/layouts/default')
@include('assignment/partials/_header')

@section('content')
	<div class="panel panel-success">
   	<div class="panel-heading"><h2>Update Assignment</h2></div>
    		<div class="panel-body">
      		{{Form::model($assignment, array('method' =>'PATCH', 'route' => ['assignment.update', $assignment->assignment_uri]  ))}}
        			@include('assignment/partials/_form')
        			<div class="text-center">
							  {{Form::submit('Update Assignment', array('id'=>'post-content', 'class' => 'btn btn-success'))}}
							</div>
      		{{Form::close()}}
    		</div>
  	</div>
	</div>
@stop

@section('extra-scripts')
 	<script>
    CKEDITOR.replace('assignment-body');
 	</script>
@stop