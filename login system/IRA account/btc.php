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

            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>BITCOIN</h2>
                    </div>
                    <br>
                    <img src="images/bitcoin.svg" alt="BTC">
                   <br><br>
				   <h2 style="font-size: 20px">STOCKSTRIP's Bitcoin wallet address:  </h2>
				   <br>
				   <h3 style="font-size: 15px">At STOCKSTRIP we accept the minimum of $1000 
				   <br> 
				   <br>
				   Wallet address: 1AY5RLZ9jtLADWZHwvSPiKE1J676kWMioK
				   <br>
				   <br>
				   Send proof of payment here:
				   </h3>
                   <form action="upload.php" method="post" enctype="multipart/form-data">
    <label>Select Image File:</label>
    <input type="file" name="image">
    <input type="submit" name="submit" value="Upload" style=" border-radius: 20px; padding: 10px; backgrund-color: skyblue">
    <h4 style="color:grey; font-size: 15px;">Note: Rename the file with your account name.</h4>
</form>
         <br>
         <h3 style="font-size: 20px">Don`t have BITCOIN ?</h3>
         <br>
         <a href="https://www.moonpay.com/" style="color:inherit; padding: 20px; background-color: blue; border-radius: 20px; text-decoration: none;">Purchase on MOONPAY</a>
         <br>
         <br>
         <br>
           <a href="https://www.coinbase.com/" style="color:inherit; padding: 20px; background-color: blue; border-radius: 20px; text-decoration: none;">Purchase on COINBASE</a>
             <br>
         <br>
         <br>
           <a href="https://crypto.com/" style="color:inherit; padding: 20px; background-color: blue; border-radius: 20px; text-decoration: none;">Purchase on CRYPTO</a>
 
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