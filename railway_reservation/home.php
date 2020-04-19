<?php
session_start();
if(!$_SESSION['auth'])
{
	header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
  <h3>Railway Reservation</h3>
  <p>For bookings go to booking tab</p>
</div>