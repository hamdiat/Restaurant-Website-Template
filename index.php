<?php
include('header.html');
?>
<div class="container" style="margin-top:80px;margin-bottom:250px">
<h2 style="text-align:center;color: brown;font-weight: bolder; font-style: italic;">EAGALION AFRICAN CUISINE</h2>
  <div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="images/dish1.jpg" alt="Tilapia" style="width:100%;height:75%;">
        
      </div>

      <div class="item">
        <img src="images/fufu.jpg" alt="fufu" style="width:100%;height:75%;">
       
      </div>

      <div class="item">
        <img src="images/fried-rice.jpg" alt="friedrice" style="width:100%;height:75%;">
       
      </div>

      <div class="item">
        <img src="images/plantain.jpg" alt="plantain" style="width:100%;height:75%;">
       
      </div>

      <div class="item">
        <img src="images/waakye2.jpg" alt="waakye" style="width:100%;height:75%;">
       
      </div>
    
      <div class="item">
        <img src="images/kenkey.jpg" alt="kenkey" style="width:100%;height:75%;">
        
      </div>
	  <div class="item">
        <img src="images/jollof-rice.jpg" alt="jollof rice" style="width:100%;height:75%;">
        
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>
<?php
include('footer.html');
?>