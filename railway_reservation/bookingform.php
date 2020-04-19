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
      <li class="active "><a href="home.php">Home</a></li>
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
            <div class="asside">
            <div class="form-group">
            <form method="POST" action="formvalidation.php">
                <div class="form-group">
                  <label class="col-sm-2 col-form-label">From</label>
                  <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="from" value="" id="from" name="from" required>
             </div>

                </div>
                <br><br><br>
                <div class="form-group">
                  <label class="col-sm-2 col-form-label">To</label>
                  <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="to" value="" id="to" name="to" required>
             </div>
                </div><br><br><br>
                <div class="form-group">
                  <label class="col-sm-2 col-form-label">Date</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" placeholde="" id="date" name="date" required>
                 </div>
                </div><br><br><br>

                <div class="form-group">
			      <label class="col-sm-2 col-form-label">State</label>
			      <div class="col-sm-10">
			      <select id="inputState" class="form-control" name="berth" required>
					<option value="" selected="selected">select-class</option>
                    <option value="sleeper">sleeper</option>
                    <option value="second sitting">second sitting</option>
                    <option value="AC chair">AC chair</option>
                    <option value="AC 3 Economy">AC 3 Economy</option>
                    <option value="Ac 3 Tire">Ac 3 Tire</option>
			      </select>
			  </div>
			    </div>
                </div><br><br><br>
                <div class="form-group">
                  <div class="col-sm-4" >
                  <input type="submit" class="btn btn-primary mb-2" name="" >
               </div>
               </div>
            </form>
            </div>
                
            </div>
        </div>
    </body>
</html>




