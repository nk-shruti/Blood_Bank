<!DOCTYPE html>
<html lang="en">
<head>
  <title>AIESEC</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="{{ URL::asset('/assets/css/jquery-ui.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('/assets/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('/assets/css/bootstrap.css') }}" rel="stylesheet">

  <script src="{{ URL::asset('/assets/js/jquery.min.js') }}"></script>
  <script src="{{ URL::asset('/assets/js/bootstrap.min.js') }}"></script>
  <script src="{{ URL::asset('/assets/js/jquery-ui.min.js') }}"></script>
</head>

<body>
	<br>
	<div class="container">
	<h2><u><center>ADMIN LOGIN</center></u></h2>
	<br>
	<form role="form" method="POST" action="{{ action('AdminController@adminAuth') }}">
	 <input type="hidden" name="_token" value="{{ csrf_token() }}">
	  <div class="form-group">
	    <label for="username">Username:</label>
	    <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username">
	  </div>
	  <div class="form-group">
	    <label for="password">Password:</label>
	    <input type="password" class="form-control" id="password" name="password" placeholder="Password"></input>
	  </div>
	  <br>
	  <button type="submit" class="btn btn-default">Submit</button>
	</form>
	</div>
	<br>
</body>
</html>