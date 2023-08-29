<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location: ../index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"
	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="style.css">

	<title>STOCKSTRIP</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
		<img src="img/image.png"/>
		</a>
		<ul class="side-menu top">
			<li>
				<a href="index.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="analytics.php">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Analytics</span>
				</a>
			</li>
			<li class="active">
				<a href="wallet.php">
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">Wallet</span>
				</a>
			</li>
		
			<li>
				<a href="logout.php" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>

			<a href="#" class="profile">
				<img src="img/card.png">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Wallet</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Wallet</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a href="#">Home</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Deposit</a>
						</li>
					</ul>
				</div>
				<a href="#" class="btn-download">
					<i class='bx bxs-user' ></i>
					<span class="text"><?php echo $_SESSION['user_name'] ?>'s wallet</span>
				</a>
			</div>



			<ul class="box-info">
				<li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
					<h3>$0</h3>
						<p>Balance</p>
					</span>
				</li>
			</ul>

	<div class="table-data">
				<div class="order">
					<div class="head">
						<h1>Payment Method</h1>
					</div>
			       <h2><a href="btc.php" style="color:inherit">1. Bitcoin </h2>
				   <br>	
				   <img src="img/bitcoin.svg" alt="BTC"></a>
				   <br>
				   <br>
				   <h2><a href="" style="color:inherit">2. Credit/Debit Card <h2>
				   <img src="img/visa.svg" alt="visa"><br>
				   <img src="img/mastercard.svg" alt="mastercard">
				</a>
				<h4  style="color:grey; font-size: 15px;"><b>Note:</b> Credit/Debit Card are temporarily unavailable, please select another payment method, THANK YOU. </h4> 
				</div>
			
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	
 <!-- ====== ionicons ======= -->
 <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
 <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

 <script>
	var beamer_config = {
		product_id : "cRWVZKuc53875" //DO NOT CHANGE: This is your product code on Beamer
	};
</script>
<script type="text/javascript" src="https://app.getbeamer.com/js/beamer-embed.js" defer="defer"></script>
					

	<script src="script.js"></script>
</body>
</html>