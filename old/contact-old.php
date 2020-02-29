<?php
include('header.html');
?>
<div class="container" style="margin-top:90px;">
  <form id="contact-form">
    <div class="form-group col-md-8 col-md-offset-2">
	<h2>Contact us</h2>
      <label for="fname">First Name:</label>
      <input type="text" class="form-control" id="fname" name="fname">
    </div>
	<div class="form-group col-md-8 col-md-offset-2">
      <label for="lname">Last Name:</label>
      <input type="text" class="form-control" id="lname" name="lname">
    </div>
	<div class="form-group col-md-8 col-md-offset-2">
      <label for="email">Email Address:</label>
      <input type="text" class="form-control" id="email" name="email">
    </div>
    <div class="form-group col-md-8 col-md-offset-2">
      <label for="pwd">Phone Number:</label>
      <input type="text" class="form-control" id="phone" name="phone">
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
  $('#submit').click( function() {
    $.ajax({
        url: 'scripts/contactForm.php',
        type: 'post',
        dataType: 'json',
        data: $('#contact-form').serialize(),
        success: function(data) {
           alert('Email sent successfully');
		   window.location.replace("index.php");
       }
    });
});
});
</script>
