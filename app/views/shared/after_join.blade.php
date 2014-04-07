@extends('../layouts/default')
   
@section('head')
	<meta name="description" content="About Us at UBresources">
@stop
@section('header')
   <h1>Join us</h1>
   <p>Join the our vibrant community at UB resources and benefit from our numerous resources</p>
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

      <div>
        <ul class="nav nav-tabs nav-justified">
         <li @if($tab == 'join')class='active'@endif>
            <strong>Step 1:</strong> Create and account
          </li>
         <li @if($tab == 'timetables')class='active'@endif>
            <strong>Step 2:</strong> Complete user profile
          </li>
        </ul>
    </div>

        <div class="panel panel-success active">
              <div class="panel-heading"><h3 class="text-center">Join us at UB Resources</h3></div>
              <div class="panel-body">
                {{Form::open(array('method' =>'POST', 'url' => Request::path() ))}}
                <div class="form-group">
                    {{Form::label('Username (required)')}}
                    {{Form::email('username',null, array('class'=>'form-control', 'placeholder' => 'Pick a username', 'maxlength' => '32',  'required' => 'true'))}}
                  </div>

                  <div class="form-group">
                    {{Form::label('Email Address')}}
                    {{Form::email('email',null, array('class'=>'form-control', 'placeholder' => 'Enter your email address here', 'maxlength' => '32',  'required' => 'true'))}}
                  </div>

                  <div class="form-group">
                    {{Form::label('Password')}}
                    {{Form::password('password[]', array('class'=>'form-control', 'placeholder' => 'Pick a strong password', 'maxlength' => '32',  'required' => 'true'))}}
                  </div>

                  <div class="form-group">
                    {{Form::label('Confirm Password')}}
                    {{Form::password('password[]', array('class'=>'form-control', 'placeholder' => 'Confirm the above password', 'maxlength' => '32',  'required' => 'true'))}}
                  </div>


                   <div class="form-group">
                    {{Form::label('Full Name (optional)', null, array('class' => 'control-label'))}}
                    {{Form::text('name',null, array('pattern'=>'[a-z A-Z]+','class'=>'form-control', 'placeholder' => 'Your full name goes here', 'maxlength' => '32', 'required' => 'true'))}}
                  </div>
                  <div class="form-group">
                    {{Form::label('Telephone (optional)', null, array('class' => 'control-label'))}}
                    {{Form::text('telephone',null, array('pattern'=>'[0-9]+','class'=>'form-control', 'placeholder' => 'Please enter your telephone number', 'maxlength' => '15'))}}
                  </div>
                  <div class="text-center">
                      {{Form::submit('Create an Account', array('id'=>'submit-message', 'class' => 'btn btn-success'))}}
                  </div>
               {{Form::close()}}
              </div>
            </div>
@stop