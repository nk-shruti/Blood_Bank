@extends('base')

@section('content')

<br>
<div class="container">

<h2><u><center>Registration Form</center></u></h2><br>

<br>
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form role="form" method="post" action=" {{ action('signupController@signup') }}">

  <input type="hidden" name="_token" value="{!! csrf_token() !!}">
	<div class="form-group">
    	<label for="name">Name:</label>
    	<input type="text" class="form-control" id="name" name="name" placeholder="Enter your Name" required>
	</div>

  <!--	<div class="form-group">
    	<label for="password">Password:</label>
    	<input type="password" class="form-control" id="password" name="password" placeholder="Enter your Password" required>
  	</div> -->

  	<div class="form-group">
    	<label for="bloodgroup">BloodGroup:</label>
    	<input type="text" class="form-control" id="bloodgroup" name="bloodgroup" placeholder="Enter the name of your College" required>
  	</div>

   		<div class="form-group">
    	<label for="phoneNo">Contact Number:</label>
    	<input type="number" min ="100000000" data-fv-stringlength-message ="Enter a Valid Phone Number" class="form-control" id="phoneNo" name="phoneNo" placeholder="Enter your Phone No." required>
  	</div>

  	<div class="form-group">
    	<label for="lastdonated">Last Donated:</label>
    	<input type="date" class="form-control" id="lastdonated" name="lastdonated" placeholder="Enter the last time you donated blood" required>
  	</div>
  	
	<div class="form-group">
  		<label for="address">Address</label>
 		<textarea class="form-control" rows="5" id="address" name="address" required></textarea>
	</div>

 	<button type="submit" class="btn btn-default">Submit</button>

</form>
</div>
<br><br>

@endsection