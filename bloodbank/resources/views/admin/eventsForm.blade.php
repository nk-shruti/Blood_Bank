@extends('admin.base')

@section('content')

<br>

<div class="container">
<h2><u><center>UPLOAD EVENT DETAILS</center></u></h2>
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
<form method="POST"
      action="{{ action('EventsController@uploadEvents') }}"
      accept-charset="UTF-8"
      enctype="multipart/form-data">
<!-- <form role="form" method="POST" enctype="multipart/form-data" action="{{ action('EventsController@uploadEvents') }}">
   -->
  <input type="hidden" name="_token" value="{!! csrf_token() !!}">
  <div class="form-group">
    <label for="collegeName">College Name:</label>
    <input type="text" class="form-control" id="collegeName" name="collegeName" placeholder="Enter College Name" required>
  </div>
  <div class="form-group">
    <label for="description">Description:</label>
    <textarea type="text" class="form-control" id="description" name="description" placeholder="Enter Description of the event" required></textarea>
  </div>
  <div class="form-group">
    <label for="description">Link(If Any):</label>
    <input type="text" class="form-control" id="link" name="link" placeholder="Enter Full Link"></input>
  </div>
 <div class="form-group"> 
<label class="control-label">Select File</label>
<input id="input" name="input[]" type="file" multiple class="file-loading" type='image/jpeg, image/jpg' >
</div>
<br>
<button type="submit" class="btn btn-default">Submit</button>
</form>
</div>

<script src="{{ asset('assets/js/fileinput.js') }}"></script>
@endsection