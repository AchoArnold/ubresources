<!DOCTYPE html>
<html>
  <head>
    	<title>{{ $title }} | UB Resources</title>
      <link rel="icon" href="{{URL::to('assets/images/favicon.ico')}}" type="image/x-icon">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
       <meta content="UB, Buea, University, resources, useful-links, 'past-questions', 'news', timetables, research" name="keywords"/>
      @yield('head')
    	<!-- CSS are placed here -->
      @if(Request::getClientIp() != '127.0.0.1')
        @include('layouts/style')
      @else
   	  {{HTML::style('assets/css/vendor/bootstrap.css')}}
      @endif

     	{{HTML::style('assets/css/ui_style.css') }}
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->

  </head>
  <body>
    <header class="navbar navbar-default navbar-fixed-top" role="navigation">
      <nav class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <a class="navbar-left" href="/">{{HTML::image('assets/images/logo.png','UBresources logo')}}</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <div class="navbar-left navbar-search">
            {{Form::open( array('method' => 'GET', 'class' =>'navbar-form', 'url' => 'search' ))}}
              <div class="form-group">
                {{Form::text('q',NULL, array('class' => 'form-control','maxlength' => '20', 'placeholder' => 'I want to search this site for..', 'oninput' => "toggle_button(this, 'post-query')"))}}
              </div>
              <button type="submit" id="post-query" class="btn  btn-info" disabled><span class="glyphicon glyphicon-search"></span></button>
            {{Form::close()}}
            <div>
              </div><!-- /.navbar-collapse -->
            </div>

                @if(Auth::check())
                  <ul class="nav navbar-nav navbar-right auth">
                    <li class="dropdown ">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="//gravatar.com/avatar/{{md5(Auth::user()->recovery_email)}}?s=28" alt="Profile picture" class="img-circle">
                        {{{Auth::user()->username}}}<b class="caret"></b>
                      </a>
                      <ul class="dropdown-menu">
                        <li>{{HTML::link('account/edit/', 'Edit Profile')}}</li>
                        <li class="divider"></li>
                        <li>{{link_to('account/logout?_token='.csrf_token(), 'Log Out')}}</li>
                      </ul>
                    </li>
                  </ul>
                @else
                  <div class="nav navbar-form navbar-right">
                    <div>
                      {{HTML::link('login', 'Login', array('class' => 'btn btn-success '))}}
                      {{HTML::link('join', 'Sign up', array('class' => 'btn btn-default '))}}
                    </div>
                  </div>
                @endif
          </div>
        </nav>
      </header>

      <!-- Docs page layout -->
      <section class="bs-header" id="content">
        <div class="container">

           <!-- Put the page header here -->
           @yield('header')

        </div>
      </section>
      <section class="container">
        <section class="row">
              @yield('side-nav')

          <div class="col-md-9">
            <div class="main-content">
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

            <noscript>
              <div class="alert alert-danger">
                <p><strong> This website requires JavaScript to be enabled on your browser</strong></p>
                <p>Please enable javascript if you want to use this website</p>
              </div>
            </noscript>

              @yield('error')
              @yield('message')

              <!-- Put the main page content here -->
              @yield('content')

            </div>
          </div>
        </section>
      </section>

      <footer class="copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="text-left">
            <ul class="list-inline">
              <li>&copy; {{ date('Y') }} UB Resources</li>
              <li class="icon"><a href="https://www.facebook.com/ubresources">{{HTML::image('assets/images/facebook.png','Facebook image')}}</a></li>
                <li class="icon"><a href="https://twitter.com/UBresources">{{HTML::image('assets/images/twitter.png','Twitter logo')}}</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6">
            <div class="text-right">
              <ul class="list-inline">
                <li>{{ HTML:: link('contribute/errors', 'Report Error') }}</li>
                <li>{{ HTML:: link('about', 'About Us') }}</li>
                <li>{{ HTML:: link('disclaimer', 'Disclaimer') }}</li>
              </ul>
            </div>
            </div>
          </div>
        </div>
      </footer>

      <!-- Scripts are placed here -->
       {{ HTML::script('assets/js/comments.js')}}
      @if(Request::getClientIp() != '127.0.0.1')
        @include('layouts.ga_analytics')
        @include('layouts.scripts')
      @else
        {{ HTML::script('assets/js/vendor/jquery-2.0.3.min.js') }}
        {{ HTML::script('assets/js/vendor/bootstrap.js') }}
      @endif
    </body>
  </html>