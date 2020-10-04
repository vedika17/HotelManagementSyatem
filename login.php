<!DOCTYPE html>
<html lang="en">
<head>
<title>Login</title>

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

column
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

<br>
<br>
<br>
<div class="container">
	<div class="row">
	<div class="col-12">
	<h1 class="text-center" style="color:white">Hello!</h1>
	<br>
	<h1 class="text-center" style="color:white">Are you a customer?</h1>
	<br>
	<center>
	<form action="" method="post">
	
	<div class="form-group">
	<label style="color:white">User Name :</label>
	<input id="name" name="txtuname" placeholder="Enter your first name" type="text">
	</div>
	
	<div class="form-group">
	<label style="color:white">Password :</label>
	<input id="upassword" name="txtupassw" placeholder="**********" type="password">
	</div>
	
	<div class="form-group">
	<input name="login" type="submit" value=" Login ">
	</div>
	
	</form>
	</center>	
	</div>
	</div>
	<br>
	<br>
	<br>
	<h1 class="text-center" style="color:white">Not Yet?</h1>
	
	<br>
	<div class="row">
	<div class="col-12">
	<center>
	<form action="" method="post">
	
	<div class="form-group">
	<label for="fname" style="color:white">First name:</label>
	<input type="text" class="form-control" id="fname" name="fname" placeholder="Enter your first name" required>
	</div>
	
	<div class="form-group">
	<label for="lname" style="color:white">Last name:</label>
	<input type="text" class="form-control" id="lname" name="lname" placeholder="Enter your last name" required>
	</div>
	
	<div class="form-group">
	<label for="password" style="color:white">Password :</label>
	<input id="passwordnew" name="passwordnew" placeholder="**********" type="password" class="form-control">
	</div>
	
	<div class="form-group">
	<label for="gender" style="color:white">Gender :</label>
	<input type="radio" name="gender" id="gender" value="female" style="color:white">Female
	<input type="radio" name="gender" id="gender" value="male" style="color:white">Male
	</div>
	
	<div class="form-group">
	<label for="pno" style="color:white">Age:</label>
	<input type="text" class="form-control" id="age" name="age" placeholder="Age" required>
	</div>
	
	<div class="form-group">
	<label for="name" style="color:white">Contact number:</label>
	<input type="text" class="form-control" id="cno" name="cno" placeholder="Enter your contact number" maxlength="10" autocomplete="off" required>
	</div>
				
	<div class="form-group">
	<label for="name" style="color:white">Address :</label>
	<input type="text" class="form-control" id="addr" name="addr" placeholder="Enter your address" required>
	</div>
	
	<div class="form-group">
	<input name="register" type="submit" value=" Register Now ">
	</div>
	
</form>
</center>
</div>
</div>

<footer style="margin-top:70%">
<p>
Copyright 2019 @ Vedika&nbsp<span style="color:white;"><strong>All rights reserved</strong></span></p>


<?
include("connection.php");
$uname=$_POST["txtuname"];
$upassw=$_POST["txtupassw"];

if (isset($_POST['login']))
{
	if (empty($_POST['txtuname']) || empty($_POST['txtupassw']))
	{
		echo 'invalid username or password';
	}
	else
	{
		$sql=mysqli_query($conn,"select first_name, cpassword from customer where first_name='$uname' and cpassword='$upassw'");
		$row=mysqli_fetch_array($sql);

		if(is_array($sql))
		{
			echo 'login successful';
		}
		else
		{
			echo 'login unsuccessful';
		}
	}
}

if(isset($_POST['register']))
{
	$fname=$_POST['fname'];
 	$lname=$_POST['lname'];
 	$pass=$_POST['passwordnew'];
 	$gender=$_POST['gender'];
 	$age=$_POST['age'];
	$addr=$_POST['addr'];
	$cno=$_POST['cno'];
	
	$q1="insert into customer (first_name,last_name,cpassword,gender,age,contact,caddress) values('$fname',$lname,'$pass','$gender','$age','$addr','$cno')";
	mysql_query($q1,$conn)or die("failed to insert");
	header('Location:login.php');
}
?>

</body>
</html>