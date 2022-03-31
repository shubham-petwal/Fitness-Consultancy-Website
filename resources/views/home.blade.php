@extends('layouts.master')

@section('content')
   
<!--Carousel Wrapper-->
    <div id="carousel-example-2" class="carousel slide carousel-fade z-depth-1-half" data-ride="carousel">
        <div>
      <!--Indicators-->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-2" data-slide-to="1"></li>
       
      </ol>
      <!--/.Indicators-->
      <!--Slides-->
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <div class="view">
             <div class="embed-responsive embed-responsive-16by9">
<video autoplay loop muted playsinline id="myvideo" >
<source src="{{ asset('image\yoga.mp4')}}" type="video/mp4">
</video>
              </div>
            <div class="mask rgba-black-light"></div>
          </div>
          <div class="carousel-caption text-center">
             
<h2>A STEP TOWARDS HEALTHY LIFE</h2>
              

          </div>
        </div>
        <div class="carousel-item">
          <!--Mask color-->
          <div class="view">
             <div class="embed-responsive embed-responsive-16by9">
<video autoplay loop muted playsinline id="myvideo" >
<source src="{{ asset('image\Honey1.mp4')}}" type="video/mp4">
</video>
              </div>
            <div class="mask rgba-black-strong"></div>
          </div>
            <div class="carousel-caption text-left">
             
<h2>GET THE PUREST HONEY DIRECT FROM THE FIELDS</h2>
                
 </div>
          
        </div>
        
        </div>
      </div>
      <!--/.Slides-->
      <!--Controls-->
      <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
      <!--/.Controls-->
    </div>
    <!--/.Carousel Wrapper-->
     <div class="sec">
         <div class="text">
         <h1 class="hh">Fitliving</h1>
             <font size="4px"><b>Making Health and Fitness within the doorstep of home with very lesser amount of money.</b></font>
         </div>
    <center>
       	<section>
            <div class="slide"><font class="con" size="10px" color="white"><b>FITNESS</b></font><br><br>
                <a href="#" class="content"><div class="bba">Stay fit and active while<br> being confined at home.<br>Our experts who have expirence <br>of years will give ample knowledge<br> and councelling which <br>will make a person phisically<br> fit and mentally strong.</div></a></div>
		<div class="slide"><font class="son" size="10px" color="white"><b>HEALTH</b></font><br><br>
            <a href="#" class="content"><div class="bba">Health is the core of ones <br>living as maintaining health is<br> proportional to earning great wealth.<br>So our products will give you all <br>essential ingredients required <br>for a good health.</div></a></div>
		</section>
         </center>
    </div>  





   
@stop

