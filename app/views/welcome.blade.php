<!DOCTYPE html>
<html>
  <head>
    <title>{{$title}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{HTML::style('assets/css/welcome.css')}}
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      {{HTML::script('assets/js/vendor/html5shiv.min.js')}}
      {{HTML::script('assets/js/vendor/respond.min.js')}}
    <![endif]-->
  </head>
  <body>
    <section class="main-content">
      <ul class="bmenu">
        <li>{{HTML::link('gist/','Gist')}}</li>
        <li>{{HTML::link('timetables/','Timetables')}}</li>
        <li>{{HTML::link('past-questions/','Past Questions')}}</li>
        <li>{{HTML::link('gpa-calculator/','GPA Calculator')}}</li>
        <li>{{HTML::link('course-outline/','Course Outline')}}</li>
        <li>{{HTML::link('useful-links/','Useful Links')}}</li>
        <li>{{HTML::link('contribute/','Contribute')}}</li>
        <li>{{HTML::link('help-desk/','Help')}}</li>
      </ul>
    </section>
  </body>
</html>