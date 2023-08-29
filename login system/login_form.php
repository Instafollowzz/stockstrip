<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = ($_POST['password']);
   $cpass = ($_POST['cpassword']);


   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'IRA account'){

         $_SESSION['user_name'] = $row['name'];
         header('location: IRA account/index.php');


     }elseif($row['user_type'] == 'stock account'){

         $_SESSION['user_name'] = $row['name'];
         header('location: stock trade/index.php');

      }
     
   }else{
      $error[] = 'incorrect email or password!';
   }

};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>STOCKSTRIP-Login</title>
     <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/css/reset.css" />
    <link rel="stylesheet" href="css/css/normalize.css" />
    <link rel="stylesheet" href="css/css/styles.css" />
    <link rel="icon" href="logo.ico" type="image/x-icon"/>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/rellax/1.12.1/rellax.min.js"
      integrity="sha512-f5HTYZYTDZelxS7LEQYv8ppMHTZ6JJWglzeQmr0CVTS70vJgaJiIO15ALqI7bhsracojbXkezUIL+35UXwwGrQ=="
      crossorigin="anonymous"
    ></script>

</head>
<body>

 <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
      <script 
type="text/javascript"src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
        {
          "symbols": [
              {
                    "description": "",
                          "proName": "NASDAQ:TSLA"
                              },
                                  {
                                        "description": "",
                                              "proName": "NASDAQ:AAPL"
                                                  },
                                                      {
                                                            "description": "",
                                                                  "proName": "NASDAQ:NVDA"
                                                                      },
                                                                          {
                                                                                "description": "",
                                                                                      "proName": "NASDAQ:AMZN"
                                                                                          },
                                                                                              {
                                                                                                    "description": "",
                                                                                                          "proName": "NASDAQ:META"
                                                                                                              },
                                                                                                                  {
                                                                                                                        "description": "",
                                                                                                                              "proName": "NASDAQ:MSFT"
                                                                                                                                  }
                                                                                                                                    ],
                                                                                                                                      "showSymbolLogo": true,
                                                                                                                                        "colorTheme": "dark",
                                                                                                                                          "isTransparent": true,
                                                                                                                                            "displayMode": "adaptive",
                                                                                                                                              "locale": "en"
                                                                                                                                              }
                                                                                                                                                </script>
                                                                                                                                                </div>
                                                                                                                                                <!-- TradingView Widget END -->

    <!-- Header-->
    <header class="header">
      <!-- Top Header -->
      <div class="header__top">
       <a href="../index.html" style="color: white;"> <div class="logo">
          <img src="images/logo.svg" alt="STOCKSTRIP" />
          <span class="text text--medium">STOCKSTRIP</span>
        </div></a>
        <nav>
         
       
        </nav>
      </div>
      <!-- Header Body -->
      <div class="header__body">
        <div class="grid grid--1x2 grid--centered grid-gap--small">
          <div class="value-proposition">
            <div class="badge-container">
              <span class="badge badge--dark text--small">90% Save</span>
              <span class="text text--small text--regular text--white">Investing your Stocks with us</span>
            </div>
            <a href="register_form.php"> <button class="value-proposition__button btn btn--flex btn--accent">
              <span class="text--standart text--medium">Register</span>
              <div class="chiron-icon-container">
                <img src="images/chevron-right.svg" alt="Right Icon" />
              </div>
            </button></a>
          </div>
          <img src="images/stocks.png" alt="Trading your Stocks" class="btc-illustration" data-rellax-horizontal-speed="-2" data-rellax-vertical-scroll-axis="x"/>
        </div>
      </div>
      <img class="background-item-1" src="images/background-item-1.svg" alt="" />
      <img class="background-item-2" src="images/background-item-2.svg" alt="" />
    </header>

   
<div class="form-container">

   <form action="" method="post">
      <h3>login now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="submit" name="submit" value="login now" class="form-btn">
      <p>don't have an account? <a href="register_form.php">register now</a></p>
   </form>

</div>

<!-- Start mining -->
    <section class="start-mining">
      <div class="mining-container">
        <div class="mining-container__header">
          <h3 class="mining-container__header__title">Get updates</h3>
          <p class="mining-container__header__description text text--small text--regular">Join now with STOCKSTRIP to get the latest news and updates</p>
        </div>
        <div class="mining-container__subscribe">
          <input type="text" placeholder="Enter your email" />
          <button class="btn btn--white">Subscribe</button>
        </div>
        <img class="background-item-8" src="images/background-item-8.svg" alt="" />
        <img class="background-item-9" src="images/background-item-9.svg" alt="" />
      </div>
      <img class="background-item-10" src="images/background-item-10.svg" alt="" />
      <img class="background-item-11" src="images/background-item-11.svg" alt="" />
    </section>

       <!-- Footer -->
       <footer class="footer" style="color: grey;">
      <img class="" src="images/preview.png" alt="" style="width: 100%;"/>
      <div class="footer__top">
        <div class="footer__top__logo">
          <img src="images/logo.svg" alt="STOCKSTRIP logo" />
          <span class="text text--medium">STOCKSTRIP</span>
        </div>
        <div class="footer__top__payment-systems">
          <nav class="nav">
            <p class="nav__title text text--medium">Contact</p>
            <ul class="nav__list">
              <li class="nav__list__item text text--small text--regular"><a href="mailto:Stockstrip404@gmail.com" style="color:grey;">Email: Stockstrip404@gmail.com </a></li>
            </ul>
          </nav>
        </div>
        <br><br>
        <div class="footer__top__payment-systems">
          <nav class="nav">
            <p class="nav__title text text--medium">Legal</p>
            <ul class="nav__list">
              <li class="nav__list__item text text--small text--regular"><a href="../privacy policy.html" style="color:grey;">Privacy Policy</a></li>
              <li class="nav__list__item text text--small text--regular"><a href="../term.html" style="color:grey;">Terms of service</a></li>
            </ul>
          </nav>
        </div>
        <br><br>
        <div class="footer__top__payment-systems">
          <p class="payment-systems__title">We accept following payment systems</p>
          <div class="payment-systems__payments">
            <div class="payment-icon-container">
              <img src="images/visa.svg" alt="Visa Card" />
            </div>
            <div class="payment-icon-container">
              <img src="images/mastercard.svg" alt="Master Card" />
            </div>
            <div class="payment-icon-container">
              <img src="images/bitcoin.svg" alt="Master Card" />
            </div>
          </div>
        </div>
      </div>

<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
 
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-tickers.js" async>
  {
  "symbols": [
    {
      "description": "",
      "proName": "NASDAQ:GOOGL"
    },
    {
      "description": "",
      "proName": "NASDAQ:AMD"
    },
    {
      "description": "",
      "proName": "NASDAQ:PYPL"
    },
    {
      "description": "",
      "proName": "TSX:GOLD"
    },
    {
      "description": "",
      "proName": "NASDAQ:COIN"
    }
  ],
  "colorTheme": "dark",
  "isTransparent": true,
  "showSymbolLogo": true,
  "locale": "en"
}
  </script>
</div>
<!-- TradingView Widget END -->
<br>
<br>
<hr>
<br>
<p>This website can be accessed worldwide however the information on the website is related to STOCKSTRIP and is not specific to any entity of STOCKSTRIP. All clients will directly engage with STOCKSTRIP and all client agreements will be entered into with STOCKSTRIP and thus governed by stock market.
  <br>
  <br>

</p>
<br>
<hr>
<div class="footer__bottom">
        <div class="footer__bottom__copyright text text--small text--regular">&copy;2023 STOCKSTRIP. All rights reserved, registered in the US and other countries and regions.</div>
      </div>
    </footer>
    <script>
      new Rellax(".btc-illustration", {
        horizontal: true,
      });
      new Rellax("#gpu-illustration", {
        horizontal: true,
      });
    </script>

</body>
</html>