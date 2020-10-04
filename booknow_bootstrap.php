<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Book Now</title>
<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  	
	<link rel="stylesheet" href="css/bootstrap.min.css">
  	<script src="js/bootstrap.min.js"></script>
<style>
body
{
	background-color:#696969;
	background-size=100% 100%;
}

.column
{
	float:left;
	width:50%;
	padding:10px;
	height:400px;
}

.row
{
	clear:both;
}

.carousel-inner img
{
	height:100%;
	width:100%;
}
</style>

</head>

<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
	<a class="navbar-brand" href="#">Kolhapur</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		<span class="navbar-toggler-icon"></span>
	</button>
  
	<div class="collapse navbar-collapse" id="collapsibleNavbar">
    		<ul class="navbar-nav">
      			<li class="nav-item">
        		<a class="nav-link" href="kolhapur_bootstrap.html">Home</a>
      			</li>
      
			<li class="nav-item">
        		<a class="nav-link" href="about_bootstrap.html">About</a>
      			</li>

    			<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="hotels_bootstrap.html" id="navbardrop" data-toggle="dropdown">Hotels</a>
      				<div class="dropdown-menu">
        				<a class="dropdown-item" href="sayaji_bootstrap.html">Hotel Sayaji</a>
        				<a class="dropdown-item" href="pearl_bootstrap.html">Hotel Pearl</a>
        				<a class="dropdown-item" href="citrus_bootstrap.html">Hotel Citrus</a>
        				<a class="dropdown-item" href="vrishali_bootstrap.html">Hotel Vrishali</a>
        				<a class="dropdown-item" href="panchashil_bootstrap.html">Hotel Panchashil</a>
        				<a class="dropdown-item" href="atria_bootstrap.html">Hotel Atria</a>
      				</div>
    			</li>

			<li class="nav-item">
        		<a class="nav-link" href="contact_bootstrap.html">Contact</a>
      			</li>  
		</ul>
  </div>  
</nav>
<br>
<br>
<br>

<iframe width="100%" height="315" allign="center" src="https://www.youtube.com/embed/Wlrh9sa5_PU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

<br>
<br>
<br>

<div class="container">
	<div class="row">
		<div class="col-6">
		<div id="d1" class="carousel slide" data-ride="carousel">
			<ul class="carousel-indicators">
				<li data-target="#d1" data-slide-to="0" class="active"></li>
				<li data-target="#d1" data-slide-to="1" class="active"></li>
			</ul>
			
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="images/sayaji_lobby.jpg">
				</div>

				<div class="carousel-item">
					<img src="images/sayaji_grande.jpg">
				</div>
			</div>

			<a class="carousel-control-prev" href="#d1" data-slide="prev">
			<span class="carousel-control-prev-icon"></span>
			</a>

			<a class="carousel-control-next" href="#d1" data-slide="next">
			<span class="carousel-control-next-icon"></span>
			</a>
				
		</div>	
		<h3 style="text-align:center;color:white;">Hotel Sayaji</h3>
		
		<br><br>

		<div id="d2" class="carousel slide" data-ride="carousel">
			<ul class="carousel-indicators">
				<li data-target="#d2" data-slide-to="0" class="active"></li>
				<li data-target="#d2" data-slide-to="1" class="active"></li>
			</ul>
			
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="images/pearl_lobby.jpg">
				</div>

				<div class="carousel-item">
					<img src="images/pearl_room.jpg">
				</div>
			</div>

			<a class="carousel-control-prev" href="#d2" data-slide="prev">
			<span class="carousel-control-prev-icon"></span>
			</a>

			<a class="carousel-control-next" href="#d2" data-slide="next">
			<span class="carousel-control-next-icon"></span>
			</a>
				
		</div>	
		<h3 style="text-align:center;color:white;">Hotel Pearl</h3>
		</div>
		
		<div class="col-6">
			<h2 class="text-center" style="color:white">Hotel Booking</h2>
			<form id="insert" action="books.php" method="post">
				<div class="form-group">
				<label for="name" style="color:white">Customer ID:</label>
				<input type="text" class="form-control" id="c_id" name="c_id" placeholder="Enter your customer ID" required>
				</div>

				<div class="form-group">
				<label for="hotel" style="color:white">Hotel:</label>
				<select class="form-control" id="hotel" name="hotel">
					<option>atr001</option>
					<option>pav01</option>
					<option>rad01</option>
					<option value="say005">say005</option>
					<option>tou01</option>
					<option>woo001</option>
				</select>
				</div>

				<div class="form-group">
				<label for="room" style="color:white">Room Type:</label>
				<select class="form-control" id="room" name="room">
					<option value="301">301</option>
					<option>Deleuxe Room</option>
					<option>Executive Room</option>
					<option>Twin Bed Deluxe Room</option>
					<option>Twin Bed Executive Room</option>
					<option>Grande Suite</option>
				</select>
				</div>
			
				<br>
				
				<div class="form-group">
				<label for="checkin" style="color:white">Check In:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
				<input type="date" id="checkin" name="checkin" required>
				</div>

				<br>
		
				<div class="form-group">
				<label for="checkout" style="color:white">Check Out:&nbsp;&nbsp;</label>
				<input type="date" id="checkout" name="checkout" required>
				</div>

				<div class="form-group">
            	<button class="btn btn-success" type="submit">Submit</button>
        		</div>

				
			</form>
		</div>
	</div>
</div>

<footer style="margin-top:70%">
<p>
Copyright 2019 @ Vedika&nbsp<span style="color:white;"><strong>All rights reserved</strong></span></p>
</body>
</html>