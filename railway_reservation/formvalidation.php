<?php 
session_start();
if(!$_SESSION['auth'])
{
    header('location:login.php');
}

if($_POST)
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "railway_reservation";
    $user_id=$_SESSION['auth'];

    $from=$_POST['from'];
    $to=$_POST['to'];
    $date=$_POST['date'];
    $berth=$_POST['berth'];
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO booking (source, destination, travell_date, berth, user_id)
    VALUES ('$from' , '$to' , '$date' , '$berth' , '$user_id')";

    if (mysqli_query($conn, $sql)) {
        echo "<h1>You have Sucessfully booked a train</h1>";
        echo "<a href='home.php'>go to home page</a>"
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>