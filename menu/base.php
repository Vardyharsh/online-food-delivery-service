<?php

$con = mysqli_connect('localhost','root','15106787','project');

$name= $_GET['name'];
$price=$_GET['price'];
$id="1006";

mysqli_begin_transaction($con,MYSQLI_TRANS_START_READ_WRITE);
//mysqli_query("call pro2('$name','$price')");
mysqli_autocommit($con, false);

			//$qry1 ="call pro2('$name','$price')";
			//$qry2 = update mlassi
			//         set qty = qty-1
				//	 where name = '$name'";
 
 
$run1 =mysqli_query($con,"call pro5('$name','$price','$id')");
$run2 =mysqli_query($con,"update mbase set qty=qty-1 where name='$name';");
$run3=mysqli_query($con,"update mbase set qty=10 where qty=3;");
if($run1 && $run2)
{
	mysqli_commit($con);
  header("LOCATION:menubase.html");
}
else
{
	echo "Not inserted";
}

?>