
<!Doctype HTML>
<html lang = "en_US">
<head> 
      <meta charset = "UTF-8">
     <title>confirmation page</title>  
</head>
<body>
      <h3 align="center">Your Order is received Successfully.</h3>
      <h3 align="center">Thanks for Ordering with Us.</h3>
</body>
</html>





<?php
 session_start();
$servername = "localhost";
$username = "root";
$password = "15106787";
$dbname = "project";

// Create connection
$conn =  new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql= "delete from checkout;";

$result=$conn->query($sql);

?>