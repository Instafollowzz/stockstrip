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
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

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
			<li class="active">
				<a href="#">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Analytics</span>
				</a>
			</li>
			<li>
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
					<h1>Analytics</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Analytics</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>

			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>List of stocks</h3>
					</div>
                    <h4>Here are some common list of stocks.<h4><br><br>
	<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
  {
  "colorTheme": "dark",
  "dateRange": "1D",
  "showChart": true,
  "locale": "en",
  "largeChartUrl": "",
  "isTransparent": false,
  "showSymbolLogo": true,
  "showFloatingTooltip": false,
  "width": "600",
  "height": "660",
  "plotLineColorGrowing": "rgba(41, 98, 255, 1)",
  "plotLineColorFalling": "rgba(41, 98, 255, 1)",
  "gridLineColor": "rgba(240, 243, 250, 0)",
  "scaleFontColor": "rgba(106, 109, 120, 1)",
  "belowLineFillColorGrowing": "rgba(41, 98, 255, 0.12)",
  "belowLineFillColorFalling": "rgba(41, 98, 255, 0.12)",
  "belowLineFillColorGrowingBottom": "rgba(41, 98, 255, 0)",
  "belowLineFillColorFallingBottom": "rgba(41, 98, 255, 0)",
  "symbolActiveColor": "rgba(41, 98, 255, 0.12)",
  "tabs": [
    {
      "title": "Stocks",
      "symbols": [
        {
          "s": "OANDA:XAUUSD",
          "d": "GOLD"
        },
        {
          "s": "TVC:SILVER",
          "d": "SILVER"
        },
        {
          "s": "NASDAQ:COIN",
          "d": "COINBASE"
        },
        {
          "s": "NEO:NFT",
          "d": "NFT"
        },
        {
          "s": "NASDAQ:NFLX",
          "d": "NETFLIX"
        },
        {
          "s": "NASDAQ:TSLA",
          "d": "TESLA"
        },
        {
          "s": "NASDAQ:AMZN",
          "d": "AMAZON"
        }
      ]
    }
  ]
}
  </script>
</div>
<!-- TradingView Widget END -->
				</div>
				<div class="todo">
					<div class="head">
						<h3>Calender</h3>
					</div>
                    <h4>Keep an eye on key upcoming economic events, announcements, and news.<h4><br><br>
					<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-events.js" async>
  {
  "colorTheme": "dark",
  "isTransparent": false,
  "width": "400",
  "height": "600",
  "locale": "en",
  "importanceFilter": "-1,0,1",
  "currencyFilter": "USD,EUR,ITL,NZD,CHF,AUD,FRF,JPY,ZAR,TRL,CAD,DEM,MXN,ESP,GBP"
}
  </script>
</div>
<!-- TradingView Widget END -->
				</div>
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