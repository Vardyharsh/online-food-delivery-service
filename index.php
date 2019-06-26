<?php
     include('dbcon.php');
	 if(isset($_POST['login'])){
	    $username = $_POST['uname'];
		$password = $_POST['pass'];
		
		$qry = "select * from 'customer' where 'name' = '$username' and password = '$password'";
		$run = mysqli_query($con, $qry);
		$row = mysqli_num_rows($run);
		if($row<1){
		     
			 ?>
			 <script>
			        alert("Username or password don't match!!");
					window.open('login.php','_self');
			 </script>
			 <?php        
			}
			else{
			     
			    $data = mysqli_fetch_assoc($run);
				
				$id=$data['id']; 
				session_start();
				
				$_SESSION['uid']=$id;
				
				header('location:index.php');
				
			}
		
	 }  
?>