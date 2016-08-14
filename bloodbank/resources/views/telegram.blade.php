@extends('base')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            {!! Form::open(['url' => '/send-message', 'class' => 'form-signin']) !!}
            <h2 class="form-signin-heading">Send Message as Telegram Bot</h2>
            <label for="inputText" class="sr-only">Message</label>
            <textarea name="message" type="text" id="inputText" class="form-control" placeholder="Message" required autofocus></textarea>
            <br />
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            {!! Form::close() !!}
            <br />
            @if(Session::has('message'))
                <div class="alert alert-{{ Session::get('status') }} status-box">
                    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    {{ Session::get('message') }}
                </div>
            @endif
        </div>
    </div>


</div> <!-- /container -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
{!! HTML::script('/js/bootstrap.min.js') !!}
@endsection
