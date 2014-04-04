@section('spec-form')
	<h2>Please specify your details below</h2>
	{{Form::open( array('method' => 'POST', 'class' =>'course-form', 'url' => Request::segment(1) ))}}
		<div class="form-group">
			{{Form::label('Faculty:')}}
			<select  name="faculty"class="form-control" id="faculty" onchange="fill_department(this.value)"></select>
		</div>
		<div class="form-group">
			{{Form::label('Department:')}}
   		<select class="form-control" name="department" id="department" onchange="fill_level(this.value)">
   		</select>
		</div>
		<div class="form-group">
     		{{Form::label('Level:')}}
     		<select class="form-control" name="level" id="level">
     		</select>
   	</div>
		<div class="form-group">
 			<div class="text-right">
 				<button type="submit" class="btn btn-info">Next <span class="glyphicon glyphicon-chevron-right"></span></button>
 			</div>
		</div>
	{{Form::close()}}

   <script>
      window.obj = {{ json_encode($form_list) }};
      window.onload= function(){
      	fill_faculty();
      }
   </script>
   {{HTML::script('assets/js/feild.js')}}
@stop