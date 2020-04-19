<?php
if($_POST)
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "railway_reservation";

    $user=$_POST['username'];
    $pass=$_POST['password'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO user (username, password, email, phone)
    VALUES ('$user' , '$pass' , '$email' , '$phone' )";

    if (mysqli_query($conn, $sql)) {
        echo "<h1>Your account has been sucessfully created</h1>";
        echo "<a href='home.html'>go to home page</a>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>