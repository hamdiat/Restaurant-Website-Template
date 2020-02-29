<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET');
header('Access-Control-Max-Age: 1000');
 

include('header.html');
?>
<div class="container" style="margin-top:90px;margin-bottom:250px">
  		
  <form id="contact-form" method="POST"  enctype = "multipart/form-data" action = "https://geogws003.ad.umd.edu:8443/hbadam/Geog657/FinalProject/contactForm.php">
    <div class="form-group col-md-8 col-md-offset-2">
      <h2 style="color: brown;font-weight: bold">Contact Us</h2>
      <label for="fname">First Name:</label>
      <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter your first name" required>
    </div>
    <div class="form-group col-md-8 col-md-offset-2">
      <label for="lname">Last Name:</label>
      <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter your last name" required>
    </div>
	<div class="form-group col-md-8 col-md-offset-2">
      <label for="email">Email Address:</label>
      <input type="text" class="form-control" id="email" name="email" placeholder="Email address" required>
    </div>
    <div class="form-group col-md-8 col-md-offset-2">
      <label for="phone">Phone Number:</label>
      <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone number" required>
    </div>
    <div class="form-group col-md-8 col-md-offset-2">
      <label for="rpDate">Date: </label>
      <input type="datetime-local" id="rpDate" name="rpDate" placeholder="Today's date" required/>
    </div>
    <div class="form-group col-md-8 col-md-offset-2">
      <label for="message">Message:</label>
      <textarea class="form-control" rows="5" id="message" name="message"></textarea><br>
      <button type="button" class="btn btn-primary pull-right" id="submit">Submit</button>
    </div>
	
  </form>
</div>
<?php
include('footer.html');
?>
<script>
$(document).ready(function(){
  console.log('ready');
  $('#submit').click( function() {


    $.ajax({
        url: 'contactForm.php',
        type: 'post',
        dataType: 'json',
        data: $('#contact-form').serialize(),
        success: function(data) {
          console.log(data.desc);
           alert('Email sent successfully');
		   window.location.replace("index.php");
       },
       error:function(jqXHR,txtStatus){
         console.log(jqXHR.responseText);
         alert(txtStatus);
       }
    });
});
});
</script>