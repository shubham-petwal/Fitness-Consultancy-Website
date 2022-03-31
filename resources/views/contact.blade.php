@extends('layouts.master')

@section('content')

<?php
// define variables and set to empty values
$nameErr = $emailErr = "";
$name = $email = $subject = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr ='* Name is required';
      echo $nameErr;
   
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "* Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["subject"])) {
    $subject = "";
  } else {
    $subject = test_input($_POST["subject"]);
  }

  if (empty($_POST["message"])) {
    $message = "";
  } else {
    $message = test_input($_POST["message"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<div class="contac"><br>



        <br>
    <div class="her">We'd love to hear from you!!</div>
        <div class="contact">
          <form method="post" action="{{url('/contact')}}"> 
         
           <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <!-- <form method="post" action="<?php //echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  -->       
        <input type="text" name="name" size="70" placeholder="Name" id="a" class="inp">
             <span class="error"> <?php echo $nameErr;?></span>
            <br><br>
        
        <input type="text" name="email" size="70" placeholder="Email" id="b" class="inp">
            <span class="error"> <?php echo $emailErr;?></span>
            <br><br>  
            
        <input type="text" name="subject" placeholder="Subject"  id="c" class="inp">
            <br><br><br> 
            
        <textarea  type="text" placeholder="Message" id="d" class="inp" style="resize:none" name="message"></textarea>
            <br><br><br>
            <input type="submit" name="submit" value="SUBMIT" class="sub">
            @if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>    
    <strong>{{ $message }}</strong>
</div>
@endif
        </form>
        <div class="location">
            T 10,703 <br>
            Royal heritage Sec 70 ,<br>Faridabad<br>IMT 121004<br>Contact:<br> +91 8930326379<br><br>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3511.632587388064!2d77.34991241494247!3d28.33971860402403!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cdbdea25901ff%3A0x8667007f32eca0ef!2sRoyal%20heritage!5e0!3m2!1sen!2sin!4v1617900449254!5m2!1sen!2sin" width="200" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>    
           </div>
        <br><br>
    </div>