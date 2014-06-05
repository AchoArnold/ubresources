@extends('/layouts/default')
@include('account/side-nav')

@section('head')
	<meta name="description" content="About Us at UBresources">
@stop

@section('content')
      <div class="panel panel-success active">
              <div class="panel-body">
            <h2 class="text-center nice-header">Edit profile for {{Auth::user()->username}}</h2>
            {{Form::model($profile, array('method' => 'POST', 'url' => Request::url() ))}}
              <div class="form-group">
                {{Form::label('Full Name (optional)', null, array('class' => 'control-label'))}}
                {{Form::text('name',null, array('pattern'=>'[a-z A-Z]+','class'=>'form-control', 'placeholder' => 'Your full name goes here', 'maxlength' => '32'))}}
              </div>
              <div class="form-group">
                {{Form::label('Telephone (optional)', null, array('class' => 'control-label'))}}
                {{Form::text('telephone',null, array('pattern'=>'[0-9]+','class'=>'form-control', 'placeholder' => 'Please enter your telephone number', 'maxlength' => '15'))}}
              </div>
              <div class="form-group">
                {{Form::label('Faculty:')}}
                <select  name="faculty"class="form-control" id="faculty" onchange="fill_department(this.value)">
                  <option value="-1">---</option>
                </select>

              </div>
              <div class="form-group">
                {{Form::label('Department:')}}
                <select class="form-control" name="department" id="department">
                <option value="-1">---</option>
                </select>
              </div>
              <div class="form-group">
                {{Form::label('Level:')}}
                <select class="form-control" name="level" id="level">
                  <option value="-1">---</option>
                  <option value="2">200</option>
                  <option value="3">300</option>
                  <option value="4">400</option>
                  <option value="5">500</option>
                </select>
              </div>
              <div class="form-group">
                {{Form::label('Sex:')}}
                <select class="form-control" name="sex" id="sex">
                  <option value="-1">---</option>
                  <option value="1">Male</option>
                  <option value="2">Female</option>
                </select>
              </div>
               <div class="form-group">
                  {{Form::label('Location:')}}
                  {{Form::text('location',null, array('class'=>'form-control', 'placeholder' => 'eg Buea, Cameroon', 'maxlength' => '32'))}}
              </div>
              <div class="form-group">
                <div class="text-center">
                    {{HTML::link('/gist', 'Home', array('class'=>'btn btn-primary'))}}
                  <button type="submit" class="btn btn-success">Save<span class="glyphicon glyphicon-floppy-save"></span></button>
                </div>
              </div>
          {{Form::close()}}
          <div class="text-right">
          </div>

           <script>
              window.obj = {{ json_encode($faculty_data) }};
              window.user_profile = Array()
              user_profile[0]="{{$profile->faculty_id}}";
              user_profile[1]="{{$profile->department_id}}";
              user_profile[2]="{{$profile->level}}";
              user_profile[3]="{{$profile->sex}}";
              window.onload= function(){
                fill_faculty();
                select_profile();
              }
           </script>
           {{HTML::script('assets/js/feild.js')}}
      </div>
@stop