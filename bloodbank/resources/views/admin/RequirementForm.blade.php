@extends('admin.base')

@section('content')

<br>

<div class="container">
<h2><u><center>ENTER REQUIREMENTS</center></u></h2>
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
      action="{{ action('RequirementController@requiredBG') }}"
      accept-charset="UTF-8"
      enctype="multipart/form-data">

  <input type="hidden" name="_token" value="{!! csrf_token() !!}">
  <div class="form-group">
    <label for="bloodgroup">BloodGroup:</label>
    <input type="text" class="form-control" id="bloodgroup" name="bloodgroup" placeholder="Enter blood group " required>
  </div>
  <div class="form-group">
    <label for="quantity">Quantity:</label>
    <textarea type="text" class="form-control" id="quantity" name="quantity" placeholder="Enter quantity" required></textarea>
  </div>
<br>
<button type="submit" class="btn btn-default">Submit</button>
</form>
</div>

<script src="{{ asset('assets/js/fileinput.js') }}"></script>
@endsection