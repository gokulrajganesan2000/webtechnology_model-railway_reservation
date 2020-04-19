<?php
session_start();
if(!$_SESSION['auth'])
{
	header('location:login.php');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Railway Reservation System</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   
    </head>
    <body>
        <nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">RailwayReservation</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="home.php">Home</a></li>
      <li><a href="about.html">About</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="bookeddetail.php"><span class="glyphicon glyphicon-bookmark"></span> BookedDetail</a></li>
      <li><a href="bookingform.php"><span class="glyphicon glyphicon-list-alt"></span> Book Ticket</a></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>
<div class="container">
	<table class="table">
  <thead>
    <tr>
      <th scope="col">S.no</th>
      <th scope="col">Source</th>
      <th scope="col">Destination</th>
      <th scope="col">Date</th>
      <th scope="col">Berth</th>
    </tr>
  </thead>
  <tbody>
<?php
	$user="root";
	$pass="";
	$host="localhost";
	$db="railway_reservation";

	$con=mysqli_connect($host,$user,$pass,$db);

	$user_id=$_SESSION['auth'];

	$sql="SELECT * FROM `booking` WHERE id='$user_id'";
	$result=mysqli_query($con,$sql) or trigger_error("Query Failed! SQL: $sql - Error: ".mysqli_error(con), E_USER_ERROR);
	if(mysqli_num_rows($result)>0)
	{

		$sno=1;
		
		while($row = mysqli_fetch_array($result))
		{
		  echo "<tr>";
	      echo "<th scope='row'>". $sno." </th>";
	      echo "<td scope='row'>". $row['source']." </td>";
	      echo "<td scope='row'>". $row['destination']." </td>";
	      echo "<td scope='row'>". $row['travell_date']." </td>";
	      echo "<td scope='row'>". $row['berth']." </td>";
	      
	    	echo "</tr>";
		}
		
	}
	else{
		echo "Wrong username";
	}
	mysqli_close($con);
?>
 </tbody>
</table>
</div>
</body>
</html>