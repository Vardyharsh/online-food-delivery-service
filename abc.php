<?php
$servername = "localhost";
$username = "root";
$password = "15106787";
$dbname = "project";

         $name= $_POST['name'];
         $email=$_POST['email'];
         $phone=$_POST['phone'];		 
		 $pass=$_POST['psw'];
// Create connection
$conn =  new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO customer( name, contact_number,password, email,id)
VALUES ('$name','$phone','$pass','$email',NULL)";

if ($conn->query($sql)) {
    header("Location:login.html");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>