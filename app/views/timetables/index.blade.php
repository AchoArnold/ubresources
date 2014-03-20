@extends('../layouts/default')
   
@section('head')
	<meta name="description" content="Links to some useful Material">
@stop
@section('header')
   <h1>Time Table</h1>
    <p>This regularly updated timetable will help to ensure that you don't miss lectures</p>
@stop

@section('warning')
   <div class="alert alert-danger">
       <strong>Sorry!</strong> We only have timetables for the faculty of Engineering and Technology. Please do check later for other timetables OR help us by submitting your timetable {{HTML::link('contribute/timetable','here')}}
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