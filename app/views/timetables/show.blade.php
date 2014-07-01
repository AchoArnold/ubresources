@extends('/layouts/default')
@include('timetables/partials/_header')

@section('head')
  {{HTML::script('assets/js/timetable.js')}}
  <meta name="description" content="Timetable for  {{strtolower($meta_data[0]->faculty_name)}} department of {{strtolower($meta_data[0]->department_name)}} level {{$level}}">
@stop


@section('content')
	<h3 class="text-center">Timetable  for  {{$meta_data[0]->faculty_name}} department of {{$meta_data[0]->department_name}} level {{$level}}</h3>
      <div id="timetable-section" class="#js-spinner">

      <div class="row" style="margin-bottom: 10px;">
          <div class="col-md-4">
            @if ( $week > 1)
              <a class="btn btn-info" href="{{Request::url()}}?week={{$week-2}}"><span class="glyphicon glyphicon-backward"></span> Previous week</a>
            @endif
          </div>

          <div class="col-md-4 text-center">
            <strong>Week {{$week}}</strong>
          </div>

          <div class="col-md-4 text-right">
            @if ($week < 3)
              <a class="btn btn-info" href="{{Request::url()}}?week={{$week}}">Next week <span class="glyphicon glyphicon-forward"></span></a>
            @endif
          </div>
     </div>


          <table class="timetable table table-bordered" id="timetable-table">
        <thead>
          <tr>
           <th></th>
           <th>08:00 - 11:00</th>
           <th>11:30 - 14:30</th>
           <th>15:00 - 18:00</th>
         </tr>
        </thead>
        <tbody>
         <tr>
           <th>Monday</th>
           <td>
              @foreach($timetable as $entry)
                @if($entry->day == 1 && $entry->start_at == "08:00:00")
                  {{$entry->short_name}}<br/>{{$entry->venue}}
                @endif
              @endforeach
           </td>
           <td>
            @foreach($timetable as $entry)
                @if($entry->day == 1 && $entry->start_at == "11:30:00")
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
         </tr>

         <tr>
           <th>Tuesday</th>
           <td>
              @foreach($timetable as $entry)
                @if($entry->day == 2 && $entry->start_at == "08:00:00")
                  {{$entry->short_name}}<br/>{{$entry->venue}}
                @endif
              @endforeach
           </td>
           <td>
            @foreach($timetable as $entry)
                @if($entry->day == 2 && $entry->start_at == "11:30:00")
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
         </tr>

         <tr>
           <th>Wednesday</th>
           <td>
              @foreach($timetable as $entry)
                @if($entry->day == 3 && $entry->start_at == "08:00:00")
                  {{$entry->short_name}}<br/>{{$entry->venue}}
                @endif
              @endforeach
           </td>
           <td>
            @foreach($timetable as $entry)
                @if($entry->day == 3 && $entry->start_at == "11:30:00")
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
         </tr>

         <tr>
           <th>Thursday</th>
           <td>
              @foreach($timetable as $entry)
                @if($entry->day == 4 && $entry->start_at == "08:00:00")
                  {{$entry->short_name}}<br/>{{$entry->venue}}
                @endif
              @endforeach
           </td>
           <td>
            @foreach($timetable as $entry)
                @if($entry->day == 4 && $entry->start_at == "11:30:00")
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
         </tr>

         <tr>
           <th>Friday</th>
           <td>
              @foreach($timetable as $entry)
                @if($entry->day == 5 && $entry->start_at == "08:00:00")
                  {{$entry->short_name}}<br/>{{$entry->venue}}
                @endif
              @endforeach
           </td>
           <td>
            @foreach($timetable as $entry)
                @if($entry->day == 5 && $entry->start_at == "11:30:00")
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
         </tr>

         <tr>
           <th>Saturday</th>
           <td>
              @foreach($timetable as $entry)
                @if($entry->day == 6 && $entry->start_at == "08:00:00")
                  {{$entry->short_name}}<br/>{{$entry->venue}}
                @endif
              @endforeach
           </td>
           <td>
            @foreach($timetable as $entry)
                @if($entry->day == 6 && $entry->start_at == "11:30:00")
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
         </tr>

      </tbody>
    </table>


      </div>
      {{--
          <script>
              window.obj = {{ json_encode($timetable) }};
              window.onload= function(){
                  generateTimeTable(obj);
              }
          </script>
    --}}

@stop