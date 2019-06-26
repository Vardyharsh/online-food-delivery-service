<!Doctype HTML>
<HTML>
<head>
<style>
body, html {
    height: 100%;
    margin: 0;
}

</style>

<title> checkout</title>
</head>
<body>
<div class="bg"></div>
    <h1 align="center"><b>South-Indian Restaurants</b></h1>



<?php
$con=mysqli_connect("localhost","root","15106787","project");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con," select r.name from r
     inner join cuisine
     on r.cuisine_id = cuisine.id
     where r.cuisine_id = 2 or r.cuisine_id =5;");

echo "<table border='1', align = 'center'>
<tr>
<th>Restaurants</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['name'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>

	<div style="border-radius:0.1em;
position:fixed;
top:200px;
left:50px;
padding:20px;
background-color:green;
font-size:50px;
color:white;">
<a href="index2.php" class="button">proceed to order</a> </div>

</body>
</html>
