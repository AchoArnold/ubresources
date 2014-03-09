<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{ HTML::style('assets/css/vendor/bootstrap.min.css') }}
   </head>
   <body>
   	<div class="container">
   		<div class="page-header">
				@yield('header')
   		</div>
   		@if(Session::has('message'))
   			<div class="alert alert-sucess">
   				{{ Session::get('message') }}
   			</div>
   		@endif
		@yield('content')
   	</div>
   </body>
</html>