<!DOCTYPE html>
<html lang="en">
<head>
  <title>Blood Donation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="{{ URL::asset('/assets/css/jquery-ui.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('/assets/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('/assets/css/bootstrap.css') }}" rel="stylesheet">

  <script src="{{ URL::asset('/assets/js/jquery.min.js') }}"></script>
  <script src="{{ URL::asset('/assets/js/bootstrap.min.js') }}"></script>
  <script src="{{ URL::asset('/assets/js/jquery-ui.min.js') }}"></script>

  <style>
  body {
      font: 400 15px/1.8 Lato, sans-serif;
      color: #000000;
      display: block;
      position: relative;
  }

  
body::after {
  content: "";
  background: url({{ asset('images/bloodbackground.png') }}) no-repeat center center fixed; 
  opacity: 0.3;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  position: absolute;
  z-index: -1;   
}

  h3, h4 {
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

          <span class="navbar-brand logo"><a href="{{ action('AdminController@homeView') }}" style="color:white;text-decoration: none !important;">Blood Donation</a></span>
            </div>
               
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav">
                  <li><a href="{{ action('AdminController@homeView') }}">Home</a></li>
                  <li><a href="{{ action('signupController@signupForm') }}">Registration Form</a></li> 
                </ul>
            </div>
      </div>
    </nav>

    @yield('content')

    <!-- Footer -->
    <footer class="container-fluid">
    <br>
      <!-- <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP"> -->
        <!-- <span class="glyphicon glyphicon-chevron-up"></span> -->
      <!-- </a><br><br> -->
      <!-- <center><p>AIESEC is the world's largest youth run organization. It is spanned over 133 countries with a membership of over 100,000. This is something that you will learn about it when you search online. But to understand the rich culture of the organization, one has to be inside it, one has to be an AIESECer. AIESEC in NIT Trichy was incepted as a tiny idea last July by two third year students. Since then it has been growing progressively to become an established Interest Group under AIESEC in Chennai with a membership of 28 efficient people.</p> </center> -->
      <div class="row">
        <div class="col-md-5">
          <p style="font-size:20px;"><u>Address</u></p>
          <p>hyugyuygkgyugyukgykyu</p>
          <p>location</p>
          <p>city, state pin</p>
        </div>
        <div class="col-md-3">
          <p style="font-size:20px;"><u>Contact Details</u></p>
          <p>Contact Number: +91-9940267294</p>
          <p>Email Id: donation@gmail.com</p>
          </div>
        </div>
      </div>

    </footer>

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

</body>
</html>