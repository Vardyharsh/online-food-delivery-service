<?php
 session_start();
$servername = "localhost";
$username = "root";
$password = "15106787";
$dbname = "project";

         $email=$_POST['email'];
         $pass=$_POST['pass'];
// Create connection
$conn =  new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql= "Select * from customer where email = '$email' AND password='$pass'";
$result=$conn->query($sql);
if($result->num_rows == 1)
{
	$row = $result->fetch_array();
	$id=$row['id'];
	$email=$row['email'];
	$_SESSION['uid']=$id;
	$_SESSION['mail']=$email;
    header("Location:index2.php");
}
else
{
	header("Location:login.html");
}


?>