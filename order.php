<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET');
header('Access-Control-Max-Age: 1000');
 

include('header.html');
?>
<div class="container" style="margin-top:90px;margin-bottom:250px">
  		
  <form id="orderform" method="POST"  enctype = "multipart/form-data" action = "https://geogws003.ad.umd.edu:8443/hbadam/Geog657/FinalProject/orderForm.php">
    <div class="form-group col-md-8 col-md-offset-2">
	<h2 style="color: brown;font-weight: bold">Place your order</h2>
      <label for="fname">Your Full Name:</label>
      <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter full name" required>
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
      <label for="menu">Dish:</label>
      <select class="form-control" id="dish" name="dish" required>
        <option value="">Select Dish</option>
        <option value="fufu">Fufu with Mixed meat Soup</option>
		    <option value="banku">Banku with tilapia</option>
        <option value="kenkey-2">Kenkey with shells</option>
        <option value="jollof">Jollof Rice with Chicken</option>
        <option value="friedrice">Fried Rice with chicken</option>
        <option value="plantain">Plantain with Stew</option>
        <option value="waakye">Waakye Special</option>
      </select>
    </div>
    <div class="form-group col-md-8 col-md-offset-2">
      <label for="rpDate"> Order Date: </label>
      <input type="datetime-local" id="rpDate" name="rpDate" placeholder="Type in a date" required/>
    </div>
    <div class="form-group col-md-8 col-md-offset-2">
      <label for="address"> Address: </label>
      <input type="text" class="form-control" id="address" name="address" placeholder="Enter your location address" required/>
    </div>
    <div class="form-group col-md-8 col-md-offset-2">
      <label for="desc">Additional Information:</label>
      <textarea class="form-control" rows="4" id="message" name="message"></textarea><br>
      <button type="button" class="btn btn-primary pull-right" id="submit">Place Order</button>
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
        url: 'orderForm.php',
        type: 'post',
        dataType: 'json',
        data: $('#orderform').serialize(),
        success: function(data) {
          alert(data.desc);
           alert('order sent successfully');
		   window.location.replace("index.php");
       },
       error:function(jqXHR,txtStatus){
         alert(jqXHR.responseText);
         alert(txtStatus);
       }
    });
});
});

</script>