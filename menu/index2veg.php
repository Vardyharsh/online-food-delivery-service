<?php
  session_start();
  $id=$_SESSION['uid'];
  $email=$_SESSION['mail'];
?>
<!DOCTYPE HTML>
<.!--
	Phase Shift by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Online Food Delivery</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body background="images/bgg.jpg">


		<!-- Wrapper -->
			<div class="wrapper style1">

				<!-- Header -->
					<div id="header" class="skel-panels-fixed">
						<div id="logo">
							<h1><a href="index.html">Zomato</a></h1>
							
						</div>
						<nav id="nav">
							<ul>
								<li>Hello <?php echo $email; ?> </li>
                                                          
								
							</ul>
						</nav>
					</div>

				<!-- Banner -->
					<div id="banner" class="container">
						<section>
                                                      
							<p style ="color:orange ;font-size:50px;">Order food online from Zomato!!</p>
    </form>
						</section>
					</div>

				<!-- Extra -->
					<div id="extra">
						<div class="container">
							<div class="row no-collapse-1">
								<section class="4u"> <a href="#" class="image featured"><img src="images/justdilli.jpg" alt="" height ="257" ></a>
									<div class="box"><a href="#">
										<p><b>JUST DILLI STREET</b><br>Gokulam,Mysuru</p>
							<?php 
							      $sql = select name from r where category_id = 1 and name = "Just DILLI STREET";
								  $result=$conn->query($sql);
								  if($row = $result->fetch_assoc()==0){
									  header("LOCATION:index2.php")
									  }
							?>
										<a href="menu/menudilli.html" class="button">Order Now</a></a> </div>

								</section>
								<section class="4u"> <a href="#" class="image featured"><img src="images/lassishop.jpg" alt="" height="250"></a>
									<div class="box"><a href="#">
										<p><b>LASSI SHOP</b><br>Hebbal Industrial Area,Mysuru</p>
										<a href="menu/menulassi.html" class="button">Order Now</a> </a></div>
								</section>
								<section class="4u"> <a href="#" class="image featured"><img src="images/basecampbistro.jpg" alt="" height="255"></a>
									<div class="box"><a href="#">
										<p><b>BASECAMP BISTRO</b><br>Vontikoppal,Mysuru</p>
										<a href="menu/menubase.html" class="button">Order Now</a> </a></div>
								</section>
							</div>
                                                         <div class="row no-collapse-1">
								<section class="4u"> <a href="#" class="image featured"><img src="images/getiteasy.jpg" alt="" height ="248" ></a>
									<div class="box"><a href="#">
										<p><b>GET IT EASY</b><br>Vidyaranyapuram,Mysuru</p>
										<a href="menu/menugetit.html" class="button">Order Now</a></a> </div>

								</section>
								<section class="4u"> <a href="#" class="image featured"><img src="images/vinaykamylari.jpg" alt="" height="255"></a>
									<div class="box"><a href="#">
										<p><b>VINAYKA MAYLARI</b><br>Chamrajpura,Mysuru</p>
										<a href="menu/menuvinayka.html" class="button">Order Now</a> </a></div>
								</section>
								<section class="4u"> <a href="#" class="image featured"><img src="images/cornerhouse.jpg" alt="" height="248"></a>
									<div class="box"><a href="#">
										<p><b>CORNER HOUSE</b><br>Vontikoppal,Mysuru</p>
										<a href="menu/menucorner.html" class="button">Order Now</a> </a></div>
								</section>
							</div>
							<div class="row no-collapse-1">
								<section class="4u"> <a href="#" class="image featured"><img src="images/lemonthree.jpg" alt="" height="255" ></a>
									<div class="box">
										<p><b>LEMON THREE</b><br>Gokulam,Mysuru</p>
										<a href="menu/menulemon.html" class="button">Order Now</a> </div>
								</section>
								<section class="4u"> <a href="#" class="image featured"><img src="images/nalpak.jpg" alt="" height="255"></a>
									<div class="box">
										<p><b>NALPAK</b><br>Gokulam,Mysuru</p>
										<a href="menu/menunalpak.html" class="button">Order Now</a> </div>
								</section>
								<section class="4u"> <a href="#" class="image featured"><img src="images/bigchicken.jpg" alt="" height="255"></a>
									<div class="box">
										<p><b>HYDERABADI RESTAURANT</b><br>Gokulam,Mysuru</p>
										<a href="menu/menuhyderabadi.html" class="button">Order Now</a> </div>
								</section>
							</div>
                                                       <div class="row no-collapse-1">
								<section class="4u"> <a href="#" class="image featured"><img src="images/dosapoint.jpg" alt="" height ="257" ></a>
									<div class="box"><a href="#">
										<p><b>DOSA POINT</b><br>Kuvempunagar,Mysuru</p>
										<a href="menu/menudosa.html" class="button">Order Now</a></a> </div>

								</section>
								
							</div>
						</div>
					</div>

				<!-- Main -->
			<br>		

	<!-- Footer -->
		
	<!-- Copyright -->
		<div id="copyright">
			<div class="container">
				<div class="copyright">
										<ul class="icons">
						<li><a href="#" class="fa fa-facebook"><span>Facebook</span></a></li>
						<li><a href="#" class="fa fa-twitter"><span>Twitter</span></a></li>
						<li><a href="#" class="fa fa-google-plus"><span>Google+</span></a></li>
					</ul>
				</div>
			</div>
		</div>

	</body>
</html>