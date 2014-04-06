@extends('../layouts/default')

@section('head')
	<meta name="description" content="Submit your inquiries or problems to the UBresources developement team">
@stop
@section('header')
   <h1>Help Desk</h1>
   <p>Our goal is to provide friendly and responsive support. Please submit your request and we will get back to you as soon as possible!</p>
@stop

@section('content')
      @if(Session::has('error'))
          <div class="alert alert-danger fade in">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
               <p>
              @foreach (Session::get('error')->all() as $error)
                      <div>{{ $error }}</div>
                @endforeach
              </p>
          </div>
       @endif

      @if (Session::has('message'))
            <div class="alert alert-success fade in">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <strong><span class="glyphicon glyphicon-ok-circle"></span></strong>
            {{Session::get('message')}}
          </div>
      @endif

	<div class="panel panel-success">
              <div class="panel-heading"><h2>Talk To us</h2></div>
              <div class="panel-body">
                {{Form::open(array('method' =>'POST', 'url' => Request::path() ))}}
                  <div class="form-group">
                    {{Form::label('Full Name (required)', null, array('class' => 'control-label'))}}
                    {{Form::text('name',null, array('pattern'=>'[a-z A-Z]+','class'=>'form-control', 'placeholder' => 'Your full name goes here', 'maxlength' => '32', 'required' => 'true'))}}
                  </div>
                  <div class="form-group">
                    {{Form::label('Email Address (required)')}}
                    {{Form::email('email',null, array('class'=>'form-control', 'placeholder' => 'Enter your email address here', 'maxlength' => '32',  'required' => 'true'))}}
                  </div>
                  <div class="form-group">
                    {{Form::label('Telephone (optional)', null, array('class' => 'control-label'))}}
                    {{Form::text('telephone',null, array('pattern'=>'[0-9]+','class'=>'form-control', 'placeholder' => 'Please enter your telephone number', 'maxlength' => '15'))}}
                  </div>
                  <div class="form-group">
                    {{Form::label('Message (required)')}}
                    {{HTML::decode(Form::textarea('message', null, array('class' => 'form-control', 'placeholder' => 'Please enter your message briefly', 'maxlength' => '500','required' => 'true', 'size'=>'30x7', 'oninput'=> "toggle_button(this,'submit-message')")))}}
                  </div>
                  <div class="text-center">
                      {{Form::submit('Submit message', array('id'=>'submit-message','disabled'=>'true', 'class' => 'btn btn-success'))}}
                  </div>
               {{Form::close()}}
              </div>
            </div>
          </div>
@stop