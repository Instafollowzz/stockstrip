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
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>STOCKSTRIP</title>
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <link href="assets/style.css" rel="stylesheet" />
  </head>
  <body>
    <nav>
      <div class="container">
        <a href="../index.html"><img src="assets/images/image.png" class="logo" /></a>
        <div class="search-bar">
          <span class="material-icons">search</span>
          <input type="search" placeholder="Search" />
        </div>

        <div class="profile-area">
          <div class="theme-btn">
            <span class="material-icons active">light_mode</span>
            <span class="material-icons">dark_mode</span>
          </div>
          <div class="profile">
            <div class="profile-photo">
              
            </div>
            <h5><span><?php echo $_SESSION['user_name'] ?></span></h5>
            <span class="material-icons">expand_more</span>
          </div>
          <button id="menu-btn">
            <span class="material-icons">menu</span>
          </button>
        </div>
      </div>
    </nav>
    <!-- End of Navbar -->
    <main>
      <aside>
        <button id="close-btn">
          <span class="material-icons">close</span>
        </button>
        <div class="sidebar">
          <a href="dashboard.php" >
            <span class="material-icons">dashboard</span>
            <h4>Dashboard</h4>
          </a>
          
          <a href="indexwallet.php">
            <span class="material-icons">account_balance_wallet</span>
            <h4>Wallet</h4>
          </a>
          <a href="#">
            <span class="material-icons">payment</span>
            <h4>Transactions</h4>
          </a>

            <a href="analytic.php" class="active">
            <span class="material-icons">pie_chart</span>
            <h4>Analytics</h4>
          </a>
        
          <a href="#">
            <span class="material-icons">message</span>
            <h4>Notification</h4>
          </a>

           <a href="logout.php">
            <span class="material-icons">person</span>
            <h4>Logout</h4>
          </a>

          <a href="#">
            <span class="material-icons">settings</span>
            <h4>Settings</h4>
          </a>
        </div>
        <!-- End of sidebar -->
      </aside>
      <!-- End of aside -->

      <section class="middle" style="width:80vw">
        <div class="header">
          <h1>Analytics</h1>
        </div>

        <div class="monthly-report">
          <div class="report">
            <h3>Income</h3>
            <div>
              <details>
                <h1>$29,023</h1>
                <h6 class="success">+3.5%</h6>
              </details>
              <p>Compared to $26,937 last month</p>
            </div>
          </div>

          <div class="report">
            <h3>Expenses</h3>
            <div>
              <details>
                <h1>$9,003</h1>
                <h6 class="danger">-6.5%</h6>
              </details>
              <p>Compared to $11,992 last month</p>
            </div>
          </div>

          <div class="report">
            <h3>Cashback</h3>
            <div>
              <details>
                <h1>$9.045</h1>
                <h6 class="success">+7.1%</h6>
              </details>
              <p>Compared to $3,053 last month</p>
            </div>
          </div>

          <div class="report">
            <h3>Turnover</h3>
            <div>
              <details>
                <h1>$118,224</h1>
                <h6 class="danger">-17.8%</h6>
              </details>
              <p>Compared to $114,234 last month</p>
            </div>
          </div>
        </div>
        <!-- End of monthly-report -->

      <br>
      <br>
      <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-technical-analysis.js" async>
  {
  "interval": "1m",
  "width": 425,
  "isTransparent": false,
  "height": 450,
  "symbol": "NASDAQ:AAPL",
  "showIntervalTabs": true,
  "locale": "en",
  "colorTheme": "dark"
}
  </script>
</div>
<!-- TradingView Widget END -->

<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-technical-analysis.js" async>
  {
  "interval": "1m",
  "width": 425,
  "isTransparent": false,
  "height": 450,
  "symbol": "NASDAQ:TSLA",
  "showIntervalTabs": true,
  "locale": "en",
  "colorTheme": "dark"
}
  </script>
</div>
<!-- TradingView Widget END -->

                <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-technical-analysis.js" async>
  {
  "interval": "1m",
  "width": 425,
  "isTransparent": false,
  "height": 450,
  "symbol": "NASDAQ:AMZN",
  "showIntervalTabs": true,
  "locale": "en",
  "colorTheme": "dark"
}
  </script>
</div>
<!-- TradingView Widget END -->
       
    <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-technical-analysis.js" async>
  {
  "interval": "1m",
  "width": 425,
  "isTransparent": false,
  "height": 450,
  "symbol": "NASDAQ:MSFT",
  "showIntervalTabs": true,
  "locale": "en",
  "colorTheme": "dark"
}
  </script>
</div>
<!-- TradingView Widget END -->    
    </main>

    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"
      integrity="sha512-QSkVNOCYLtj73J4hbmVoOV6KVZuMluZlioC+trLpewV8qMjsWqlIQvkn1KGX2StWvPMdWGBqim1xlC8krl1EKQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>

    <script src="assets/main.js"></script>
    <!-- End of Main -->
  </body>
</html>
