<!DOCTYPE html>
<html>
  <head>
    	<title>{{ $title }}</title>
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
      @yield('head')
    	<!-- CSS are placed here -->
   	{{ HTML::style('assets/css/vendor/bootstrap.css') }}
    	{{ HTML::style('assets/css/vendor/rondo_fonts.min.css') }}
     	{{ HTML::style('assets/css/ui_style.css') }}
      <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      {{HTML::script('assets/js/vendor/html5shiv.min.js')}}
      {{HTML::script('assets/js/vendor/respond.min.js')}}
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
          <a class="navbar-brand" href="/">UB Resources</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <div class="navbar-left">
            <form class="navbar-form" role="search">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Search...">
              </div>
              <button type="submit" class="btn  btn-info"><span class="glyphicon glyphicon-search"></span></button>
            </form>
            <div>
              </div><!-- /.navbar-collapse -->
            </div>
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
          <div class="col-md-3">
            <div class="list-group side-nav">
              <a href="{{URL::to('gist')}}" class="list-group-item
              @if (Request::is('gist*'))
                active"><span class="badge"><span class="glyphicon glyphicon-hand-right"></span></span>
              @else
                ">
              @endif
              Gist</a>
              <a href="{{URL::to('timetables')}}" class="list-group-item
              @if (Request::is('timetable*'))
                active"><span class="badge"><span class="glyphicon glyphicon-hand-right"></span></span>
              @else
                ">
              @endif
              Timetables</a>
              <a href="{{URL::to('past-questions')}}" class="list-group-item
              @if (Request::is('past-questions*'))
                active"><span class="badge"><span class="glyphicon glyphicon-hand-right"></span></span>
              @else
                ">
              @endif
              Past Questions</a>
              <a href="{{URL::to('gpa-calculator')}}" class="list-group-item
              @if (Request::is('gpa-calculator*'))
                active"><span class="badge"><span class="glyphicon glyphicon-hand-right"></span></span>
              @else
                ">
              @endif
              GPA Calculator</a>
              <a href="{{URL::to('course-outline')}}" class="list-group-item
              @if (Request::is('course-outline*'))
                active"><span class="badge"><span class="glyphicon glyphicon-hand-right"></span></span>
              @else
                ">
              @endif
              Course Outline</a>
              <a href="{{URL::to('useful-links')}}" class="list-group-item
              @if (Request::is('useful-links*'))
                active"><span class="badge"><span class="glyphicon glyphicon-hand-right"></span></span>
              @else
                ">
              @endif
              Useful Links</a>
              <a href="{{URL::to('contribute')}}" class="list-group-item
              @if (Request::is('contribute*'))
                active"><span class="badge"><span class="glyphicon glyphicon-hand-right"></span></span>
              @else
                ">
              @endif
              Contribute</a>
              <a href="{{URL::to('help-desk')}}" class="list-group-item
              @if (Request::is('help-desk*'))
                active"><span class="badge"><span class="glyphicon glyphicon-hand-right"></span></span>
              @else
                ">
              @endif
              Help Desk</a>
            </div>
          </div>

          <div class="col-md-9">
            <div class="main-content">
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
            <div class="col-md-4">
              <p>&copy; {{ date('Y') }} UB Resources</p>
            </div>
            <div class="navbar-right">
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
        {{ HTML::script('assets/js/vendor/jquery-2.0.3.min.js') }}
        {{ HTML::script('assets/js/vendor/bootstrap.js') }}
    </body>
  </html>