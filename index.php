<?php

echo'<html lang="en">';

echo'<head>';
	
	echo'<title>SWISSTORE® : WAIT FOR IT !</title>';
	
	// Meta
	echo'<meta charset="UTF-8" />';

	// Bootstrap CSS
	echo'<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">';

	
	
echo'</head>';

echo'<body>';

// ================================================================================================
// TOP MAIN MENU
// ================================================================================================
echo'<div class="navbar" id="example">
  <div class="navbar-inner">
    <a class="brand" href="#">Swisstore</a>
    <ul class="nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Products</a></li>
			
			<ul class="nav nav-tabs">
			<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#">More <b class="caret"></b> </a>
				<ul class="dropdown-menu">
				  <a href="#">Terms</a>
				  <a href="#">About</a>
				  <a href="#">Contact</a>
				</ul>
		   </li>
		   </ul>
      
    </ul>';
    
  // Search bar
  echo'<form class="navbar-search pull-left" style=" top:5px; float:right;">
  <input type="text" class="search-query" data-provide="typeahead" data-items="4"  placeholder="Search" data-source=\'["aabb","cdef","abcdefgui"]\'>
  </form>
      
  </div>
  

  
</div>';

// ================================================================================================
// WELCOME ALERT
// ================================================================================================

echo'<div class="alert alert-info">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <h4>Welcome !</h4>
  Buy or die !
  
  
</div>';


// ================================================================================================
// CAROUSEL
// ================================================================================================

echo'<div id="myCarousel" class="carousel slide" style="width:900px; margin-left:auto; margin-right:auto;">
  <!-- Carousel items -->
  <div class="carousel-inner">';
    
echo'<div class="active item" style="border:1px solid black; ">

		<img  src="i/la_meule_1.JPG" style="margin-left:auto; margin-right:auto; width:150px; height:300px;" class="img-circle" >
		<div style="">
			<p class="lead">Bla bla bla </p> 
			<p>
			<button class="btn btn-large btn-primary" type="button">BUY IT NOW !</button>
			<button class="btn btn-large" type="button">Details ...</button>
			</p>
		</div>
	
	</div>';

   echo'<div class="item" style="border:1px solid black; ">
   		<div style="border:1px solid red; width:200px; float:left; ">
   			<img src="i/la_meule_1.JPG" style="margin-left:auto; margin-right:auto; width:150px; height:300px;" >
   		</div>
   		<div style="border:1px solid green; float:left; width:60%;">
   			<small>123213 Bla bla bla pas cher bla bla bla achetez bla bla bla</small>
   		</div>
   		<br style="clear:both">
  </div>
  
  </div>';
  
  echo'
  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div>';
	
// ================================================================================================
// JAVASCRIPTS
// ================================================================================================	
	
	// JQuery
	echo'<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>'; 
	
	// Bootstrap
	echo'<script src="bootstrap/js/bootstrap.min.js"></script>';
	
	
	
	// Bootstrap jscript
	echo'<script>
		
		 $(document).ready( function() {
			
			
			$(".carousel").carousel({
  					interval: 3000
			})
			
		} )
		
		</script>';
		
echo'</body>';

echo'</html>';

?>