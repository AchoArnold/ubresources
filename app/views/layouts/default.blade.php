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
               {{ HTML:: link('gist/','Gist',array('class' =>'list-group-item active')) }}
              	{{ HTML:: link('timetables/','Timetables',array('class' =>'list-group-item')) }}
              	{{ HTML:: link('past-questions/','Past Questions',array('class' =>'list-group-item')) }}
              	{{ HTML:: link('gpa-calculator/','GPA Calculator',array('class' =>'list-group-item')) }}
              	{{ HTML:: link('course-outline/','Course Outline',array('class' =>'list-group-item')) }}
         		{{ HTML:: link('useful-links/','Useful Links',array('class' =>'list-group-item')) }}
              	{{ HTML:: link('contribute/','Contribute',array('class' =>'list-group-item')) }}
              	{{ HTML:: link('help-desk/','Help desk',array('class' =>'list-group-item')) }}
            </div>
          </div>

          <div class="col-md-9">
            <div class="main-content">

              @yield('warning')
          
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