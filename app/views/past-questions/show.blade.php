@extends('/layouts/default')
@include('layouts/side-nav')

@section('head')
	<meta name="description" content="Past Questions for  {{strtolower($meta_data[0]->faculty_name)}} department of {{strtolower($meta_data[0]->department_name)}} level {{$level}}">
@stop
@section('header')
   <h1>Past Questions</h1>
   <p>Easily obtain past Exam and CA Question papers.<br /> Select your preferred question paper and download it easily.
   </p>
@stop

@section('content')
	<h3 class="text-center">Past questions for  {{$meta_data[0]->faculty_name}} department of {{$meta_data[0]->department_name}} level {{$level}}</h3>

      <div class="alert alert-info">
        <p><strong>NOTE:</strong> These files have been compressed so as to  reduce size and optimize bandwidth.</p>
      </div>

   <section class="course-table">
      @if($first_semester)
       	{{Form::open(array('method' => 'POST', 'class' =>'course-form', 'url' => Request::path()))}}
            {{ Form::hidden('semester', '1') }}
           <div calass="form-group">
           	{{Form::label('First Semester Courses:')}}
             <select class="form-control" name="course_id" id="course_id">
             	@foreach($first_semester as $entry)
           			@if($entry->semester == 1)
           				<option value="{{$entry->course_id}}">{{$entry->short_name}} : {{$entry->name}}
           				</option>
           			@endif
           		@endforeach
             </select>
             <br />
             <div class="text-right">
             <button type="submit" class="btn btn-primary">Download <span class="glyphicon glyphicon-download"></span></button>
             </div>
           </div>
         {{Form::close()}}
     @endif
     @if ($second_semester)
         {{Form::open( array('method' => 'POST', 'class' =>'course-form', 'url' => Request::path()))}}
                {{ Form::hidden('semester', '2') }}
         		<div calass="form-group">
         			{{Form::label('Second Semester Courses:')}}
             	<select class="form-control"  name="course_id" id="course_id">
    	           @foreach($second_semester as $entry)
    	       	   <option value="{{$entry->course_id}}">{{$entry->short_name}} : {{$entry->name}}</option>
    	           @endforeach
             	</select>
             	<br />
             <div class="text-right">
             <button type="submit" class="btn btn-primary">Download<span class="glyphicon glyphicon-download"></span></button>
             </div>
            </div>
        	{{Form::close()}}
      @endif
   </section>
@stop