@extends('admin.base')

@section('content')
<br>
<div class="container">
<h2><u><center>UPLOAD PROJECT</center></u></h2>
<br>

<p style="text-indent: 30em;"><strong>{{ $message or ' ' }}</strong></p>
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<br>

<form role="form" method="GET" action="{{ action('ProjectsController@uploadProjects') }}">
  <div class="form-group">
    <label for="projectName">Project Name:</label>
    <input type="text" class="form-control" id="projectName" name="projectName" placeholder="Enter Project Name" required>
  </div>
  <div class="form-group">
    <label for="projectArea">Project Area:</label>
    <input type="text" class="form-control" id="projectArea" name="projectArea" placeholder="Enter Project Area" required>
  </div>
  <div class="form-group">
    <label for="projectCountry">Project Country:</label>
    <input type="text" class="form-control" id="projectCountry" name="projectCountry" placeholder="Enter Project Country" required>
  </div>
  <div class="form-group">
    <label for="projectDescription">Description:</label>
    <textarea type="text" class="form-control" id="projectDescription" name="projectDescription" placeholder="Enter Project Description" required></textarea>
  </div>
  <div class="form-group">
    <label for="projectLink">Project Link:</label>
    <input type="text" class="form-control" id="projectLink" name="projectLink" placeholder="Enter Project Link" required>
  </div>
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required>
  </div>
  <div class="form-group">
    <label for="contactNo">Contact Number:</label>
    <input type="number" minlength="10" class="form-control" id="contactNo" name="contactNo" placeholder="Enter Contact Number" required>
  </div>
  <br>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
<br><br>

@endsection