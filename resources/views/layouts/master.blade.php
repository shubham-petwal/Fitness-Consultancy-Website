<html>
<head>
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{asset('css/cssfiles.css')}}">
</head>
<body>

@extends('layouts.mainNav');
 <!-- content start -->
@yield('content')


<!-- footer start -->
<footer class="page-footer font-small teal pt-4">
  <!-- Footer Text -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
         <h5 class="text-uppercase font-weight-bold">Fitness Revolution</h5>
        <p>Fitness Revolution built a human who can be mentality fit and physically<br> healthy with its different programs which contains counceling,fitness tips,<br>dancing sessions,yoga knowledge,meditation for wellbeing and manymore.<br>
         </p>

      </div>

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-4 mb-md-0 mb-3">
         <h5 class="text-uppercase font-weight-bold">Get updates to your inbox</h5>
          <div class="input-group">
          <input type="text" class="form-control form-lg" placeholder="Your Email" aria-label="Recipient's username" aria-describedby="basic-addon2">
          <div class="input-group-append">
    <button class="btn btn-outline-secondary" type="button">Go</button>
  </div>   
          </div>
          <!--Facebook-->
<a class="btn-floating btn btn-fb" type="button" role="button"><i class="fab fa-facebook-f"></i></a>
<!--Twitter-->
<a class="btn-floating btn btn-tw" type="button" role="button"><i class="fab fa-twitter"></i></a>
<!--Linkedin-->
<a class="btn-floating btn btn-li" type="button" role="button"><i class="fab fa-linkedin-in"></i></a>
<!--Instagram-->
<a class="btn-floating btn btn-ins" type="button" role="button"><i class="fab fa-instagram"></i></a>
<!--WhatsApp-->
<a class="btn-floating btn btn-whatsapp" type="button" role="button"><i class="fab fa-whatsapp"></i></a>
      </div>
    </div>
 </div>
        <hr color="white" width="70%">
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://mdbootstrap.com/">Fitnessrevolutionary.com</a>
      </div>
</footer>
</body>
</html>
    


