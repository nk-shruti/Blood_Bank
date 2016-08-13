<!DOCTYPE html>
<html lang="en">
<head>
  <title>AIESEC</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="_token" content="{!! csrf_token() !!}"/>
  <link href="{{ URL::asset('/assets/css/jquery-ui.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('/assets/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('/assets/css/bootstrap.css') }}" rel="stylesheet">

  <script src="{{ URL::asset('/assets/js/jquery.min.js') }}"></script>
  <script src="{{ URL::asset('/assets/js/bootstrap.min.js') }}"></script>
  <script src="{{ URL::asset('/assets/js/jquery-ui.min.js') }}"></script>
  <script>var base_url = "{{ url('/') }}";</script>

  <style>
  body {
      font: 400 15px/1.8 Lato, sans-serif;
      color: #777;
  }

  h2, h3, h4 {
      margin: 10px 0 30px 0;
      color: #111;
  }
  .container {
      padding: 80px 0px 0px 0px !important;
  }
  
  .nav-tabs li a {
      color: #777;
  } 
  .navbar {
      font:15px Montserrat, sans-serif;
      padding-top: 15px;
      padding-bottom: 15px;
      padding-left: 5px;
      background-color: #2590ec;
      border: 0;
      letter-spacing: 5px;
      /*opacity: 0.9;*/
  }
  .navbar li a, .navbar .navbar-brand { 
      color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
      color: #fff !important;
  }
  .navbar-nav li.active a {
      color: #fff !important;
      background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
  }

  footer {
      background-color: #2590ec; 
      color: #d5d5d5;
      bottom: 0px;
      margin-bottom: 0px;
      width:100%;
      font:15px Montserrat, sans-serif;
      padding-top: 15px;
      padding-bottom: 15px;
      padding-left: 5px;
      border: 0;
  }
 
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<!-- Navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>

          <span class="navbar-brand logo"><a href="{{ action('ogcController@registeredView') }}" style="color:white;text-decoration: none !important;">AIESEC</a></span>
        </div>
               
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="{{ action('EventsController@eventsForm') }}">Upload Events</a></li>
            <li><a href="{{ action('ProjectsController@projectsForm') }}">Upload Projects</a></li>
            <li><a href="{{ action('ogcController@registeredView') }}">Registrations</a></li>   
            <li><a href="{{ action('AdminController@logout') }}">Logout</a></li>   

          </ul>
        </div>
      </div>
    </nav>

    @yield('content')

</body>
</html>