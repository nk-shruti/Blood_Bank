@extends('base')

@section('content')

<style type="text/css">

  .item {
    height: 90vh;
    width: 100%;
  }
  .carousel-caption h3 {
      color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }


</style>
<br><br>
<div class="container-fluid" style="margin:0px; padding:0px;">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
      <li data-target="#myCarousel" data-slide-to="6"></li>
      <li data-target="#myCarousel" data-slide-to="7"></li>
      <li data-target="#myCarousel" data-slide-to="8"></li>
      <!--<li data-target="#myCarousel" data-slide-to="9"></li>
      <li data-target="#myCarousel" data-slide-to="10"></li>
      <li data-target="#myCarousel" data-slide-to="11"></li>
      <li data-target="#myCarousel" data-slide-to="12"></li>
      <li data-target="#myCarousel" data-slide-to="13"></li>
      <li data-target="#myCarousel" data-slide-to="14"></li>
      <li data-target="#myCarousel" data-slide-to="15"></li> -->
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <!-- <div class="item active">
        <img src="{{URL::asset('images/home1.jpg')}}"  width="100%" height="80%">
        <div class="carousel-caption" >
          <h3>And then I realized, Adventure was the best way to learn.</h3>
          <p></p>
        </div>      
      </div> -->

       <div class="item active">
        <img src="{{URL::asset('images/homeblood.jpg')}}"  width="100%" height="80%">  
      </div>
      
      <div class="item">
        <img src="{{URL::asset('images/homeblood.jpg')}}"  width="100%" height="80%">
        <div class="carousel-caption">
          <!-- <h3>Take the Global #YouthSpeak Survey to contribute your valuable insights and actionable ideas for companies, organisations and governments to use.</h3>
          <p></p> -->
        </div>      
      </div>
    
      <!-- <div class="item">
        <img src="{{URL::asset('images/home3.png')}}"  width="100%" height="80%">
        <div class="carousel-caption" >
          <h3>We are what we repeatedly do. Excellence is not then an act, but a habit.</h3>
          <p></p>
        </div>      
      </div> -->
      
      <!-- <div class="item">
        <img src="{{URL::asset('images/home4.jpg')}}"  width="100%" height="80%">
        <div class="carousel-caption">
          <h3>Leadership is empowering others to become something greater than themselves.</h3>
          <p>The definition of leadership can vary, and it can be interpreted in different ways based on a person’s experience. We previously defined the difference between transformational vs transactional leadership and developed a Facebook application with IE Business School to identify your leadership style.
</p>
        </div>      
      </div> -->


      <div class="item">
        <img src="{{URL::asset('images/homeblood.jpg')}}"  width="100%" height="80%">  
      </div>

      <div class="item">
        <img src="{{URL::asset('images/homeblood.jpg')}}"  width="100%" height="80%">  
      </div>

    </div>

    
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
</div>

@endsection