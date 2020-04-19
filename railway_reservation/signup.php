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
      <a class="navbar-brand" href="index.html">RailwayReservation</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.html">Home</a></li>
      <li><a href="about.html">About</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>

        <div class="container">
            <div class="asside">
            <div class="form-group">
            <form method="POST" action="signupvalidation.php">
                <div class="form-group">
                  <label class="col-sm-2 col-form-label">username</label>
                  <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="username" name="username" required>
             </div>

                </div>
                <br><br><br>
                <div class="form-group">
                  <label class="col-sm-2 col-form-label">password</label>
                  <div class="col-sm-10">
                <input type="password" class="form-control" placeholder="password"name="password" required>
             </div>
                </div><br><br><br>
                <div class="form-group">
                  <label class="col-sm-2 col-form-label">email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" placeholde="email" name="email" required>
                 </div>
                </div><br><br><br>

                <div class="form-group">
                  <label class="col-sm-2 col-form-label">phone</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" placeholde="phone" name="phone" required>
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




