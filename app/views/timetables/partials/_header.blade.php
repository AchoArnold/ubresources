@include('layouts/side-nav')

@section('header')
   <h1>Exam Time Table</h1>
    <p>This regularly updated timetable will help to ensure that you don't miss your exams</p>
    @if(Auth::user() && Auth::user()->is_admin())
     		@include('timetables/partials/_admin')
     	@endif
@stop