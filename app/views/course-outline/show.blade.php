@extends('/layouts/default')
@include('layouts/side-nav')

@section('head')
	<meta name="description" content="Course Outline for  {{strtolower($meta_data->faculty_name)}} department of {{strtolower($meta_data->department_name)}} level {{$level}}">
@stop
@section('header')
    <h1>Course Outline</h1>
      <p>An overview of the courses taken at the {{HTML::link('http://www.ubuea.net','University of Buea')}}. You can download a copy or read the online version here.
   </p>
@stop

@section('content')
	<h3  class="text-center">Course outline for  {{$meta_data->faculty_name}} department of {{$meta_data->department_name}} level {{$level}}</h3>
   			<section>
	             <fieldset>
	               <legend>First Semester <small>(Major Courses)</small></legend>
	               <table class=" table table-bordered">
	                 <tr>
	                   <th>CourseCode</th>
	                   <th>Course Title</th>
	                   <th>Status</th>
	                   <th>Credit Value</th>
	                 </tr>
                   	@foreach($course_outline as $entry)
                   		<tr>
			      			@if($entry->semester == 1)
			      				<td>{{$entry->short_name}}</td>
			      				<td>{{$entry->name}}</td>
			      				<td>
			      					@if($entry->status == 1)
			      						Compulsory
			      					@elseif ($entry->status == 2) 
			      						University Requirement
			      					@else
			      						Elective
			      					@endif
			      				</td>
			      				<td>{{$entry->credit_value}}</td>
			      			@endif
			      			<tr>
			      		@endforeach
	                 <tr>
	                   <td><strong>Total</strong></td>
	                   <td></td>
	                   <td></td>
	                   <td><strong>{{$total_credit[0]}}</strong></td>
	                 </tr>
	               </table>
	             </fieldset>
				</section>
				<section>
	             <fieldset>
	               <legend>Second Semester <small>(Major Courses)</small></legend>
	               <table class=" table table-bordered">
	                 <tr>
	                   <th>CourseCode</th>
	                   <th>Course Title</th>
	                   <th>Status</th>
	                   <th>Credit Value</th>
	                 </tr>
                   	@foreach($course_outline as $entry)
                   		<tr>
			      			@if($entry->semester == 2)
			      				<td>{{$entry->short_name}}</td>
			      				<td>{{$entry->name}}</td>
			      				<td>
			      					@if($entry->status == 1)
			      						Compulsory
			      					@elseif ($entry->status == 2) 
			      						University Requirement
			      					@else
			      						Elective
			      					@endif
			      				</td>
			      				<td>{{$entry->credit_value}}</td>
			      			@endif
			      			<tr>
			      		@endforeach
	                 <tr>
	                   <td><strong>Total</strong></td>
	                   <td></td>
	                   <td></td>
	                   <td><strong>{{$total_credit[1]}}</strong></td>
	                 </tr>
	               </table>
	             </fieldset>
				</section>
@stop