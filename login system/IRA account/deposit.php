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

               <div class="cardBox">
               <div class="card">
                    <div>
                        <div class="numbers"><?php echo $_SESSION['user_name'] ?></div>
                        
                    </div>


                </div>

                <div class="card">
                    <div>
                    <div class="numbers">$0</div>
                        <div class="cardName">Fund Balance</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                       <div class="numbers">$0</div>
                        <div class="cardName">Fund Savings</div> 
                    </div>

                    <div class="iconBx">
                        <ion-icon name="wallet-outline"></ion-icon>
                    </div>
                </div>

            </div>

            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Deposit</h2>
                    </div>

 <h2><a href="btc.php" style="color:inherit; text-decoration: none;">1. Bitcoin </h2>
				   <br>	
				   <img src="images/bitcoin.svg" alt="BTC"></a>
				   <br>
				   <br>
				   <h2><a href="" style="color:inherit; text-decoration: none;">2. Credit/Debit Card <h2>
				   <img src="images/visa.svg" alt="visa"><br>
				   <img src="images/mastercard.svg" alt="mastercard">
				</a>
				<h4  style="color:grey; font-size: 15px;"><b>Note:</b> Credit/Debit Card are temporarily unavailable, please select another payment method, THANK YOU. </h4> 
                
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