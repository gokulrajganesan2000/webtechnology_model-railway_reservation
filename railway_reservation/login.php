<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<title>Home</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php
if($_POST)
{
	$user="root";
	$pass="";
	$host="localhost";
	$db="railway_reservation";

	$username=$_POST['username'];
	$password=$_POST['password'];
	echo "$username";

	$con=mysqli_connect($host,$user,$pass,$db);

	$sql="SELECT * FROM `user` WHERE username='$username' and password='$password'";
	$result=mysqli_query($con,$sql) or trigger_error("Query Failed! SQL: $sql - Error: ".mysqli_error(con), E_USER_ERROR);
	if(mysqli_num_rows($result)==1)
	{
		session_start();
		while($row = mysqli_fetch_array($result))
		{
			$_SESSION['auth']=$row['id'];
		}
		header('location:home.php');
	}
	else{
		echo "Wrong username";
	}
	mysqli_close($con);
}
?>
<nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">RailwayReservation</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="home.html">Home</a></li>
      <li><a href="about.html">About</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
<div class="container">
<form method="POST">
	<div class="form-group">
	<label class="col-sm-2 col-form-label">username:</label>
	<div class="col-sm-10">
	<input type="text" class="form-control" placeholder="username"  name="username">
	</div>
	</div><br><br><br>
	<div class="form-group">
	<label class="col-sm-2 col-form-label">password:</label>
	<div class="col-sm-10">
	<input type="password" class="form-control" placeholder="password"  name="password">
	</div>
	</div><br><br><br>
	<div class="form-group">
	<div class="col-sm-4" >
	<input type="submit" class="btn btn-primary mb-2" name="" >
	</div>
	</div>
</form>
</div>
</body>
</html>