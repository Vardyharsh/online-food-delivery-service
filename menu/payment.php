

<!Doctype HTML>
<HTML>
<head>
<style>
body, html {
    height: 100%;
    margin: 0;
}

.wer{

}
.wer a{
color:white;
}

</style>

<title> checkout</title>
</head>
<body>
<div class="bg"></div>
    <h1 align="center"><b>REVIEW YOUR ORDER</b></h1>
	<h2 align="right"><b>Choose payment method</b></h2>
	<div style="border-radius:0.1em;
position:fixed;
top:200px;
right:50px;
padding:20px;
background-color:green;
font-size:50px;
color:white;">
<a href="payment2.php" class="button">cash</a> </div>
<br>
<div style="border-radius:0.1em;
position:fixed;
top:350px;
right:50px;
padding:20px;
background-color:green;
font-size:50px;
color:white;">
<a href="payment2.php" class="button">credit/debit card</a> </div>
<br>
<div style="border-radius:0.1em;
position:fixed;
top:500px;
right:50px;
padding:20px;
background-color:green;
font-size:50px;
color:white;">
<a href="payment2.php" class="button">paytm</a> </div>
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

mysqli_close($con);
?>