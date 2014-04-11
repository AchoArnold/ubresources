@extends('/layouts/default')
@include('layouts/side-nav')
   
@section('head')
	<meta name="description" content="Fast and efficient GPA calculator for the University of Buea">
      {{HTML::script('assets/js/gpa_calc.js')}}
@stop

@section('header')
  <h1>GPA Calculator</h1>
  <p>Easily calculate you GPA with this GPA calculator which is modified specifically for students in the {{HTML::link('http://www.ubuea.net','University of Buea')}}
	</p>
@stop

@section('message')
  <div class="alert alert-info">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <p><strong>This is an unofficial tool</strong></p>
    <p>The results you get from this gpa calculator are not 100% accurate and may differ from what is on your transcript</p>
  </div>
@stop

@section('content')
	<div class="gpa-button">
               <p>Cummulative GPA:
                   <input type="text" id="cumGpa" value="0.00" readonly="readonly">
                  </p>
              </div>
              <div class="semester">
                <h4>First Semester:</h4>
                <table class="gpa table table-bordered" id="gpaTable1" name="gpaTable1">
                  <tr>
                    <th style="width:20%;">Course Code</th>
                    <th style="width:55%;">Course Title</th>
                    <th style="width:10%;">Credit Value</th>
                    <th style="width:15%;">Grade</th>
                  </tr>
                  @foreach($course_outline as $entry)
                    @if($entry->semester == 1)
                       <tr>
                        <td><input class="form-control" type="text" value="{{$entry->short_name}}"/></td>
                        <td><input class="form-control" type="text" value="{{$entry->name}}"/></td>
                        <td><input class="form-control" type="text" maxlength="1" value="{{$entry->credit_value}}"  onkeyup="validate(this,1)"/></td>
                        <td>
                          <select class="form-control" onchange="processGPA(1)">
                            <option value="-1">--</option>
                            <option value="4">A</option>
                            <option value="3.5">B+</option>
                            <option value="3">B</option>
                            <option value="2.5">C+</option>
                            <option value="2">C</option>
                            <option value="1.5">D+</option>
                            <option value="1">D</option>
                            <option value="0">F</option>
                          </select>
                        </td>
                      </tr>
                    @endif
                  @endforeach
                  <input type="hidden" id="aqqCredit1" value="0">
                  <input type="hidden" id="totalCredit1" value="0">
                </table>
                <div class="gpa-button">
                <a href="javascript:void(0)"  onclick="addRow(1)">Add Row</a>
                <a href="javascript:void(0)"  onclick="deleteRow(1)">Remove Row</a>
                <p>Semester GPA:
                  <input type="text" value="0.00"  id="gpa1" disabled>
                </p>
              </div>
              </div>

              <div class="semester">
                <h4>Second semester:</h4>
                <table class="gpa table table-bordered" id="gpaTable2">
                  <tr>
                    <th style="width:25%;">Course Code</th>
                    <th style="width:55%;">Course Title</th>
                    <th style="width:5%;">Credit Value</th>
                    <th style="width:15%;">Grade</th>
                  </tr>
                   @foreach($course_outline as $entry)
                    @if($entry->semester == 2)
                       <tr>
                        <td><input class="form-control" type="text" value="{{$entry->short_name}}"/></td>
                        <td><input class="form-control" type="text" value="{{$entry->name}}"/></td>
                        <td><input class="form-control" type="text" maxlength="1" value="{{$entry->credit_value}}"  onkeyup="validate(this,2)"/></td>
                        <td>
                          <select class="form-control" onchange="processGPA(2)">
                            <option value="-1">--</option>
                            <option value="4">A</option>
                            <option value="3.5">B+</option>
                            <option value="3">B</option>
                            <option value="2.5">C+</option>
                            <option value="2">C</option>
                            <option value="1.5">D+</option>
                            <option value="1">D</option>
                            <option value="0">F</option>
                          </select>
                        </td>
                      </tr>
                    @endif
                  @endforeach
                  <input type="hidden" id="aqqCredit2" value="0">
                  <input type="hidden"  id="totalCredit2" value="0">
                </table>
                <div class="gpa-button">
                <a href="javascript:void(0)"  onclick="addRow(2)">Add Row</a>
                <a href="javascript:void(0)"  onclick="deleteRow(2)">Remove Row</a>
                <p>Semester GPA:
                  <input type="text" value="0.00"  id="gpa2" disabled>
                </p>
              </div>
            </div>

@stop