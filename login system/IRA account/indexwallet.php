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
                    <a href="">
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
                   <a href="deposit.php" style="text-decoration: none;"> <div class="numbers">Deposit</div>
                        <div class="cardName">Fund</div> </a>
                    </div>


                    <div class="iconBx">
                    <ion-icon name="arrow-down-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                <a href="withdraw.php" style="text-decoration: none;"> <div>
                       <div class="numbers">Withdraw</div></a>
                    </div>

                    <div class="iconBx">
                    <ion-icon name="arrow-up-outline"></ion-icon>
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

            </div>



        
                   
                   
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