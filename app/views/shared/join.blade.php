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

      <div class="col-md-9">
      <div>
        <ul class="nav nav-tabs nav-justified join">
         <li @if($tab == 'join')class='active'@endif >
            <a><strong>Step 1:</strong></br> Create and account</a>
          </li>
         <li @if($tab == 'join2')class='active'@endif >
            <a><strong>Step 2:</strong><br/>Complete your profile</a>
          </li>
        </ul>
    </div>

    @if ($tab == 'join')
        <div class="panel panel-success active">
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
      @else
        <div class="gravatar-default">
          <h3 class="text-center">Please give us more details about yourself</h3>
    {{Form::open( array('method' => 'POST', 'class' =>'course-form', 'url' => Request::url() ))}}
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
      window.obj = {{ 'hello'//json_encode($form_list) }};
      window.onload= function(){
        fill_faculty();
      }
   </script>
   {{HTML::script('assets/js/feild.js')}}
        </div>
      @endif
      </div>
      <div class="col-md-3">
        <div class="panel panel-default join-us">
          <div class="panel-heading"><h4 class="text-center"> Why you'll love UB Resources</h4></div>
          <div class="panel-body">
              <p>
                <span class="glyphicon glyphicon-ok"></span> We'll give only news you're interested in<br/>
                <span class="glyphicon glyphicon-ok"></span> Your timetables are customized to suit you<br/>
                <span class="glyphicon glyphicon-ok"></span> The GPA calculator is customized for you</p>
          </div>
        </div>
      </div>
      </div>
@stop