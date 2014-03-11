<!DOCTYPE html>
<html>
  <head>
    <title>
    @section('title')
    AA Medical
    @show
    </title>
    <meta chartset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ID=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon"
            type="image/png"
            href={{asset('img/usa.png')}}>
    <!-- CSS are placed here -->
    {{ HTML::style('css/bootstrap.css') }}
    {{ HTML::style('css/login.css?id=1') }}
  </head>
  <body>
    <div class="site-wrapper">
      <div class="site-wrapper-inner">
        <div class="cover-container">
          <div class="masthead clearfix">
            <div class="inner">
            </div>
          </div>
          <div class="loginform">
            <h1 class="cover-heading">All Americans Medical Transportation</h1>
            <p class="lead">
            <img src="/img/medicallogo.png" alt="Medical Logo" height="164" width="164">
            </p>
            <p class="lead">
            {{ Form::open(array('action' => 'HomeController@logUserIn')) }}
            {{ Form::email('email') }}
            {{ Form::password('password') }}
            {{ Form::submit('Login!') }}
            {{ Form::close() }}
            </p>
          </div>
          {{ Session::get('note') }}
        </div>
      </div>
    </div>
    
  </body>
  <footer>
    <div class="mastfoot">
      <div class="inner">
        <p>Copyright © 2014 AA Medical Inc. All rights reserved</p>
      </div>
    </div>
    <!-- Scripts are placed here -->
    {{ HTML::script('js/jquery-1.11.0.js') }}
    {{ HTML::script('js/bootstrap.min.js') }}
  </footer>
</html>