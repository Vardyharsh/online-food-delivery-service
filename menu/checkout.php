<!Doctype HTML>
<HTML>
<head>
<style>
body, html {
    height: 100%;
    margin: 0;
}

.bg {
    /* The image used */
    background-image: url("images/check.jpg");

    /* Full height */
    height: 30%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.wer{
border-radius:0.1em;
position:fixed;
top:250px;
right:50px;
padding:20px;
background-color:green;
font-size:50px;
color:white;
}
.wer a{
color:white;
}

</style>

<title> checkout</title>
</head>
<body>
<div class="bg"></div>
    <h1 align="center"><b>CHECKOUT</b></h1>
	<div class="wer">
<a href="payment.php" class="button">Proceed</a> </div>

<a href="../index2.php" class="button">Back to Restaurants</a> </div>
</body>
</HTML>


<?php
$con=mysqli_connect("localhost","root","15106787","project");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM checkout");

$tprice= mysqli_query($con,"select checkout() as 'cost'");

echo "<table border='1', align = 'center'>
<tr>
<th>RestaurantID</th>
<th>Name</th>
<th>price</th>
<th>qty</th>
</tr>";

if($result->num_rows>=1)
{
 while($row = mysqli_fetch_array($result))
 {
 echo "<tr>";
 echo "<td>" . $row['res_id'] . "</td>";
 echo "<td>" . $row['name'] . "</td>";
 echo "<td>" . $row['price'] . "</td>";
 echo "<td>" . $row['qty'] . "</td>";
 echo "</tr>";
 }
 echo "</table>";

 $prow =  mysqli_fetch_array($tprice);

 echo "<br>", str_repeat("&nbsp;",150), "<b>Total price is =:</b>", "<b>{$prow['cost']}</b>";
}
else
{
	header("Location:empty.php");
}
mysqli_close($con);
?>



































