@extends('../layouts/default')
   
@section('head')
	<meta name="description" content="Links to some useful Material">
@stop

@section('header')
   <h1>Course Outline</h1>
      <p>An overview of the courses taken at the {{HTML::link('http://www.ubuea.net','University of Buea')}}. You can download a copy or read the online version here.
   </p>
@stop

@section('warning')
	   <div class="alert alert-danger">
         <p><strong>Sorry!</strong> We only have information about courses  taken in the faculty of Engineering and Technology. Please do check later for courses in other faculties OR help us by submitting your course list {{HTML::link('contribute/course-outline','here')}}.</p>
 	</div>
@stop

@section('content')
	<h2>Fill your details below</h2>
   <form  role="user-specificaion" class="course-form" name="specification" method="get" onsubmit=" return specificationFormProcess()">
     <div class="form-group">
       <label>Faculty:</label>
       <select  name="faculty"class="form-control" disabled>
         <option value="FET">Engineering and Technology</option>
       </select>
     </div>
     <div class="form-group">
       <label>Department:</label>
       <select class="form-control" name="department" id="department">
         <option value="CE">Computer Engineering</option>
         <option value="EE">Electrical Engineering</option>
       </select>
     </div>
     <div class="form-group">
       <label>Level:</label>
       <select class="form-control" name="level" id="level">
         <option value="200">200</option>
         <option value="300">300</option>
         <option value="400">400</option>
       </select>
     </div>
     <button type="submit" class=" col-md-2 col-md-offset-4 btn btn-primary"> View <span class="glyphicon glyphicon-chevron-right"></span></button>
   </form>
@stop