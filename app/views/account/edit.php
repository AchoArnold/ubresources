@extends('/layouts/default')
@include('layouts/side-nav')
@include('user/side-nav')

@section('head')
	<meta name="description" content="About Us at UBresources">
@stop

@section('content')
      @if (Session::has('message'))
            <div class="alert alert-success fade in">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <strong><span class="glyphicon glyphicon-ok-circle"></span></strong>
            {{Session::get('message')}}
          </div>
      @endif
       @if(Session::has('error'))
          <div class="alert alert-danger fade in" id="validate_alert">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
               <p>
              @if(!is_object(Session::get('error')))
                {{Session::get('error')}}
              @else
                @foreach (Session::get('error')->all() as $error)
                        <div>{{ $error }}</div>
                @endforeach
              @endif
              </p>
          </div>
       @endif
      <div class="panel panel-success active">
              <div class="panel-body">
            <h3 class="text-center">Profile for {{Auth::user()->username}}</h3>
            {{Form::open( array('method' => 'POST', 'url' => Request::url() ))}}
              <div class="form-group">
                {{Form::label('Full Name (optional)', null, array('class' => 'control-label'))}}
                {{Form::text('name',null, array('pattern'=>'[a-z A-Z]+','class'=>'form-control', 'placeholder' => 'Your full name goes here', 'maxlength' => '32', 'required' => 'true'))}}
              </div>
              <div class="form-group">
                {{Form::label('Telephone (optional)', null, array('class' => 'control-label'))}}
                {{Form::text('telephone',null, array('pattern'=>'[0-9]+','class'=>'form-control', 'placeholder' => 'Please enter your telephone number', 'maxlength' => '15'))}}
              </div>
              <div class="form-group">
                {{Form::label('Faculty:')}}
                <select  name="faculty"class="form-control" id="faculty" onchange="fill_department(this.value)"></select>
              </div>
              <div class="form-group">
                {{Form::label('Department:')}}
                <select class="form-control" name="department" id="department">
                </select>
              </div>
              <div class="form-group">
                  {{Form::label('Level:')}}
                  {{Form::text('level',null, array('pattern'=>'[0-9]+','class'=>'form-control', 'placeholder' => 'Tell us your level', 'maxlength' => '3', 'required' => 'true'))}}
              </div>
              <div class="form-group">
                <div class="text-right">
                  {{HTML::link('login', 'Skip This', array('class' => 'btn btn-default '))}}
                  <button type="submit" class="btn btn-primary">Next <span class="glyphicon glyphicon-chevron-right"></span></button>
                </div>
              </div>
          {{Form::close()}}
          <div class="text-right">
          </div>

           <script>
              //window.obj = {{ 'hello'//json_encode($form_list) }};
              window.onload= function(){
                //fill_faculty();
              }
           </script>
           {{HTML::script('assets/js/feild.js')}}
      </div>
@stop