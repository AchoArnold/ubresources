@extends('/layouts/default')
@include('timetables/partials/_header')

@section('head')
  <meta name="description" content="Timetable for  {{strtolower($meta_data[0]->faculty_name)}} department of {{strtolower($meta_data[0]->department_name)}} level {{$level}}">
@stop


@section('content')
	<h3 class="text-center">Timetable  for  {{$meta_data[0]->faculty_name}} department of {{$meta_data[0]->department_name}} level {{$level}}</h3>
      <div id="timetable-section" class="js-spinner">

          <script>
              window.obj = {{ json_encode($timetable) }};
              window.onload= function(){
                  generateTimeTable(obj);
              }
          </script>

@stop

@section('extra-scripts')
  {{HTML::script('assets/js/timetable.js')}}
@stop