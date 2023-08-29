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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STOCKSTRIP-Dashboard </title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="index.html">
                        <img src="images/logo.svg" class="logo" />
                        <span class="title"></span>
                    </a>
                </li>

                <li>
                    <a href="index.php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="indexwallet.php">
                        <span class="icon">
                            <ion-icon name="wallet-outline"></ion-icon>
                        </span>
                        <span class="title">Wallet</span>
                    </a>
                </li>

                <li>
                    <a href="./logout.php">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="cardName">
                    <label>
                       <h1 style="color:grey;">IRA</h1>
                    </label>
                </div>

                <div class="user">
                    <img src="images/card.png" alt="user">
                </div>
            </div>

            <!-- ======================= Cards ================== -->
            <div class="cardBox">
               <div class="card">
                    <div>
                        <div class="numbers"><?php echo $_SESSION['user_name'] ?></div>
                        
                    </div>


                    <div class="iconBx">
                        <ion-icon name="person"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                    <div class="numbers">$0</div>
                        <div class="cardName">Balance</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                       <div class="numbers">$0</div>
                        <div class="cardName">Savings</div> 
                    </div>

                    <div class="iconBx">
                        <ion-icon name="wallet-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                       <div class="numbers">10%</div>
                        <div class="cardName">Rate</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="bar-chart-outline"></ion-icon>
                    </div>
                </div>
            </div>

            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>OVERVIEW</h2>
                    </div>

                    <br>
                    <br>
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
  "height": "500",
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

                <!-- ================= New Customers ================ -->
                <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>LIST OF STOCKS</h2>
                    </div>
                    <br>
                    <br>
                    
                    <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
  {
  "width": "300",
  "height": "500",
  "defaultColumn": "overview",
  "defaultScreen": "most_capitalized",
  "showToolbar": true,
  "locale": "en",
  "market": "us",
  "colorTheme": "dark"
}
  </script>
  
</div>
<!-- TradingView Widget END -->
                   
                   
                </div>
            </div>
        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <script>
	var beamer_config = {
		product_id : "rvFOJHwN53896" //DO NOT CHANGE: This is your product code on Beamer
	};
</script>
<script type="text/javascript" src="https://app.getbeamer.com/js/beamer-embed.js" defer="defer"></script>
					

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>