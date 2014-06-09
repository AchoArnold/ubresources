@extends('/layouts/default')
@include('timetables/partials/_header')

@section('head')
  {{HTML::script('assets/js/timetable.js')}}
  <meta name="description" content="Timetable for  {{strtolower($meta_data[0]->faculty_name)}} department of {{strtolower($meta_data[0]->department_name)}} level {{$level}}">
@stop


@section('content')
	<h3 class="text-center">Timetable  for  {{$meta_data[0]->faculty_name}} department of {{$meta_data[0]->department_name}} level {{$level}}</h3>
   <table class="timetable table table-bordered" id="timetable-table">
    <thead>
      <tr>
       <th></th>
       <th>07:00 - 09:00</th>
       <th>09:00 - 11:00</th>
       <th>11:00 - 13:00</th>
       <th>13:00 - 15:00</th>
       <th>15:00 - 17:00</th>
       <th>17:00 - 19:00</th>
     </tr>
    </thead>
    <tbody>
     <tr>
       <th>Monday</th>
       <td>
       		@foreach($timetable as $entry)
       			@if($entry->day == 1 && $entry->start_at == "07:00:00")
       				{{$entry->short_name}}<br/>{{$entry->venue}}
       			@endif
       		@endforeach
       </td>
       <td>
       	@foreach($timetable as $entry)
       			@if($entry->day == 1 && $entry->start_at == "09:00:00")
       				{{$entry->short_name}}<br/>{{$entry->venue}}
       			@endif
       		@endforeach
       </td>
       <td>
       	@foreach($timetable as $entry)
       			@if($entry->day == 1 && $entry->start_at == "11:00:00")
       				{{$entry->short_name}}<br/>{{$entry->venue}}
       			@endif
       		@endforeach
       </td>
       <td>
@foreach($timetable as $entry)
       			@if($entry->day == 1 && $entry->start_at == "13:00:00")
       				{{$entry->short_name}}<br/>{{$entry->venue}}
       			@endif
       		@endforeach
       </td>
       <td>
       	@foreach($timetable as $entry)
       			@if($entry->day == 1 && $entry->start_at == "15:00:00")
       				{{$entry->short_name}}<br/>{{$entry->venue}}
       			@endif
       		@endforeach
       </td>
       <td>
       	@foreach($timetable as $entry)
       			@if($entry->day == 1 && $entry->start_at == "17:00:00")
       				{{$entry->short_name}}<br/>{{$entry->venue}}
       			@endif
       		@endforeach
       </td>
     </tr>
     <tr>
       <th>Tuesday</th>
      	<td>
       		@foreach($timetable as $entry)
       			@if($entry->day == 2 && $entry->start_at == "07:00:00")
       				{{$entry->short_name}}<br/>{{$entry->venue}}
       			@endif
       		@endforeach
       </td>
       <td>
       	@foreach($timetable as $entry)
       			@if($entry->day == 2 && $entry->start_at == "09:00:00")
       				{{$entry->short_name}}<br/>{{$entry->venue}}
       			@endif
       		@endforeach
       </td>
       <td>
       	@foreach($timetable as $entry)
       			@if($entry->day == 2 && $entry->start_at == "11:00:00")
       				{{$entry->short_name}}<br/>{{$entry->venue}}
       			@endif
       		@endforeach
       </td>
       <td>
@foreach($timetable as $entry)
       			@if($entry->day == 2 && $entry->start_at == "13:00:00")
       				{{$entry->short_name}}<br/>{{$entry->venue}}
       			@endif
       		@endforeach
       </td>
       <td>
       	@foreach($timetable as $entry)
       			@if($entry->day == 2 && $entry->start_at == "15:00:00")
       				{{$entry->short_name}}<br/>{{$entry->venue}}
       			@endif
       		@endforeach
       </td>
       <td>
       	@foreach($timetable as $entry)
       			@if($entry->day == 2 && $entry->start_at == "17:00:00")
       				{{$entry->short_name}}<br/>{{$entry->venue}}
       			@endif
       		@endforeach
       </td>
     </tr>
     <tr>
       <th>Wednesday</th>
       <td>
       	@foreach($timetable as $entry)
       			@if($entry->day == 3 && $entry->start_at == "07:00:00")
       				{{$entry->short_name}}<br/>{{$entry->venue}}
       			@endif
       		@endforeach
       </td>
       <td>
       	@foreach($timetable as $entry)
       			@if($entry->day == 3 && $entry->start_at == "09:00:00")
       				{{$entry->short_name}}<br/>{{$entry->venue}}
       			@endif
       		@endforeach
       </td>
       <td>
       	@foreach($timetable as $entry)
       			@if($entry->day == 3 && $entry->start_at == "11:00:00")
       				{{$entry->short_name}}<br/>{{$entry->venue}}
       			@endif
       		@endforeach
       </td>
       <td>
       	@foreach($timetable as $entry)
       			@if($entry->day == 3 && $entry->start_at == "13:00:00")
       				{{$entry->short_name}}<br/>{{$entry->venue}}
       			@endif
       		@endforeach
       </td>
       <td>
       	@foreach($timetable as $entry)
       			@if($entry->day == 3 && $entry->start_at == "15:00:00")
       				{{$entry->short_name}}<br/>{{$entry->venue}}
       			@endif
       		@endforeach
       </td>
       <td>
       	@foreach($timetable as $entry)
       			@if($entry->day == 3 && $entry->start_at == "17:00:00")
       				{{$entry->short_name}}<br/>{{$entry->venue}}
       			@endif
       		@endforeach
       </td>
     </tr>
     <tr>
       <th>Thursday</th>
       <td>
       	@foreach($timetable as $entry)
       			@if($entry->day == 4 && $entry->start_at == "07:00:00")
       				{{$entry->short_name}}<br/>{{$entry->venue}}
       			@endif
       		@endforeach
       </td>
       </td>
       <td>
       	@foreach($timetable as $entry)
       			@if($entry->day == 4 && $entry->start_at == "09:00:00")
       				{{$entry->short_name}}<br/>{{$entry->venue}}
       			@endif
       		@endforeach
       </td>
       <td>
       	@foreach($timetable as $entry)
       			@if($entry->day == 4 && $entry->start_at == "11:00:00")
       				{{$entry->short_name}}<br/>{{$entry->venue}}
       			@endif
       		@endforeach
       </td>
       <td>
       	@foreach($timetable as $entry)
       			@if($entry->day == 4 && $entry->start_at == "13:00:00")
       				{{$entry->short_name}}<br/>{{$entry->venue}}
       			@endif
       		@endforeach
       </td>
       <td>
       	@foreach($timetable as $entry)
       			@if($entry->day == 4 && $entry->start_at == "15:00:00")
       				{{$entry->short_name}}<br/>{{$entry->venue}}
       			@endif
       		@endforeach
       </td>
       <td>
       	@foreach($timetable as $entry)
       			@if($entry->day == 4 && $entry->start_at == "17:00:00")
       				{{$entry->short_name}}<br/>{{$entry->venue}}
       			@endif
       		@endforeach
       </td>
     </tr>
     <tr>
       <th>Friday</th>
       <td>
       	@foreach($timetable as $entry)
       			@if($entry->day == 5 && $entry->start_at == "07:00:00")
       				{{$entry->short_name}}<br/>{{$entry->venue}}
       			@endif
       		@endforeach
       </td>
       <td>
       	@foreach($timetable as $entry)
       			@if($entry->day == 5 && $entry->start_at == "09:00:00")
       				{{$entry->short_name}}<br/>{{$entry->venue}}
       			@endif
       		@endforeach
       </td>
       <td>
       	@foreach($timetable as $entry)
       			@if($entry->day == 5 && $entry->start_at == "11:00:00")
       				{{$entry->short_name}}<br/>{{$entry->venue}}
       			@endif
       		@endforeach
       </td>
       <td>
       	@foreach($timetable as $entry)
       			@if($entry->day == 5 && $entry->start_at == "13:00:00")
       				{{$entry->short_name}}<br/>{{$entry->venue}}
       			@endif
       		@endforeach
       </td>
       <td>
       	@foreach($timetable as $entry)
     			@if($entry->day == 5 && $entry->start_at == "15:00:00")
     				{{$entry->short_name}}<br/>{{$entry->venue}}
     			@endif
       	@endforeach
       </td>
       <td>
       	@foreach($timetable as $entry)
       			@if($entry->day == 5 && $entry->start_at == "17:00:00")
       				{{$entry->short_name}}<br/>{{$entry->venue}}
       			@endif
       		@endforeach
       </td>
     </tr>
     <tr>
       <th>Saturday</th>
       <td>
       	@foreach($timetable as $entry)
     			@if($entry->day == 6 && $entry->start_at == "07:00:00")
     				{{$entry->short_name}}<br/>{{$entry->venue}}
     			@endif
       	@endforeach
       </td>
       <td>
       	@foreach($timetable as $entry)
     			@if($entry->day == 6 && $entry->start_at == "09:00:00")
     				{{$entry->short_name}}<br/>{{$entry->venue}}
     			@endif
       	@endforeach
       </td>
       <td>
       	@foreach($timetable as $entry)
     			@if($entry->day == 6 && $entry->start_at == "11:00:00")
     				{{$entry->short_name}}<br/>{{$entry->venue}}
     			@endif
       	@endforeach
       </td>
       <td>
       	@foreach($timetable as $entry)
     			@if($entry->day == 6 && $entry->start_at == "13:00:00")
     				{{$entry->short_name}}<br/>{{$entry->venue}}
     			@endif
       	@endforeach
       </td>
       <td>
       	@foreach($timetable as $entry)
     			@if($entry->day == 6 && $entry->start_at == "15:00:00")
     				{{$entry->short_name}}<br/>{{$entry->venue}}
     			@endif
       	@endforeach
       </td>
       <td>
       	@foreach($timetable as $entry)
     			@if($entry->day == 6 && $entry->start_at == "17:00:00")
     				{{$entry->short_name}}<br/>{{$entry->venue}}
     			@endif
       	@endforeach
       </td>
     </tr>
     <tr>
       <th>Sunday</th>
       <td>
       	@foreach($timetable as $entry)
     			@if($entry->day == 7 && $entry->start_at == "07:00:00")
     				{{$entry->short_name}}<br/>{{$entry->venue}}
     			@endif
       	@endforeach
       </td>
       <td>
       	@foreach($timetable as $entry)
     			@if($entry->day == 7 && $entry->start_at == "09:00:00")
     				{{$entry->short_name}}<br/>{{$entry->venue}}
     			@endif
       	@endforeach
       </td>
       <td>
       	@foreach($timetable as $entry)
     			@if($entry->day == 7 && $entry->start_at == "11:00:00")
     				{{$entry->short_name}}<br/>{{$entry->venue}}
     			@endif
       	@endforeach
       </td>
       <td>
       	@foreach($timetable as $entry)
     			@if($entry->day == 7 && $entry->start_at == "13:00:00")
     				{{$entry->short_name}}<br/>{{$entry->venue}}
     			@endif
       	@endforeach
       </td>
       <td>
       	@foreach($timetable as $entry)
     			@if($entry->day == 7 && $entry->start_at == "15:00:00")
     				{{$entry->short_name}}<br/>{{$entry->venue}}
     			@endif
       	@endforeach
       </td>
       <td>
       	@foreach($timetable as $entry)
     			@if($entry->day == 7 && $entry->start_at == "17:00:00")
     				{{$entry->short_name}}<br/>{{$entry->venue}}
     			@endif
       	@endforeach
       </td>
     </tr>
     </tbody>
   </table>
@stop