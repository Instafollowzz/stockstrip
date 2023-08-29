<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $tel = mysqli_real_escape_string($conn, $_POST['tel']);
   $zip = mysqli_real_escape_string($conn, $_POST['zip']);
   $country = mysqli_real_escape_string($conn, $_POST['country']);
   $pass = ($_POST['password']);
   $cpass = ($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO user_form(name, email, tel, zip, country, password, user_type) VALUES('$name','$email','$tel','$zip', '$country','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:login_form.php');
      }
   }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>STOCKSTRIP-Register </title>
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
            <a href="login_form.php"> <button class="value-proposition__button btn btn--flex btn--accent">
              <span class="text--standart text--medium">Login</span>
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
      <h3>register now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="name" required placeholder="enter your name">
      <input type="email" name="email" required placeholder="enter your email">
       <input type="tel" name="tel" required placeholder="enter your phone number">
       <input type="zip" name="zip" required placeholder="enter your zipcode">
        <select name="country" >
         <option value="Afghanistan">Afghanistan</option>
                <option value="Åland Islands">Åland Islands</option>
                <option value="Albania">Albania</option>
                <option value="Algeria">Algeria</option>
                <option value="American Samoa">American Samoa</option>
                <option value="Andorra">Andorra</option>
                <option value="Angola">Angola</option>
                <option value="Anguilla">Anguilla</option>
                <option value="Antarctica">Antarctica</option>
                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                <option value="Argentina">Argentina</option>
                <option value="Armenia">Armenia</option>
                <option value="Aruba">Aruba</option>
                <option value="Australia">Australia</option>
                <option value="Austria">Austria</option>
                <option value="Azerbaijan">Azerbaijan</option>
                <option value="Bahamas">Bahamas</option>
                <option value="Bahrain">Bahrain</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Barbados">Barbados</option>
                <option value="Belarus">Belarus</option>
                <option value="Belgium">Belgium</option>
                <option value="Belize">Belize</option>
                <option value="Benin">Benin</option>
                <option value="Bermuda">Bermuda</option>
                <option value="Bhutan">Bhutan</option>
                <option value="Bolivia">Bolivia</option>
                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                <option value="Botswana">Botswana</option>
                <option value="Bouvet Island">Bouvet Island</option>
                <option value="Brazil">Brazil</option>
                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                <option value="Brunei Darussalam">Brunei Darussalam</option>
                <option value="Bulgaria">Bulgaria</option>
                <option value="Burkina Faso">Burkina Faso</option>
                <option value="Burundi">Burundi</option>
                <option value="Cambodia">Cambodia</option>
                <option value="Cameroon">Cameroon</option>
                <option value="Canada">Canada</option>
                <option value="Cape Verde">Cape Verde</option>
                <option value="Cayman Islands">Cayman Islands</option>
                <option value="Central African Republic">Central African Republic</option>
                <option value="Chad">Chad</option>
                <option value="Chile">Chile</option>
                <option value="China">China</option>
                <option value="Christmas Island">Christmas Island</option>
                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                <option value="Colombia">Colombia</option>
                <option value="Comoros">Comoros</option>
                <option value="Congo">Congo</option>
                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                <option value="Cook Islands">Cook Islands</option>
                <option value="Costa Rica">Costa Rica</option>
                <option value="Cote D'ivoire">Cote D'ivoire</option>
                <option value="Croatia">Croatia</option>
                <option value="Cuba">Cuba</option>
                <option value="Cyprus">Cyprus</option>
                <option value="Czech Republic">Czech Republic</option>
                <option value="Denmark">Denmark</option>
                <option value="Djibouti">Djibouti</option>
                <option value="Dominica">Dominica</option>
                <option value="Dominican Republic">Dominican Republic</option>
                <option value="Ecuador">Ecuador</option>
                <option value="Egypt">Egypt</option>
                <option value="El Salvador">El Salvador</option>
                <option value="Equatorial Guinea">Equatorial Guinea</option>
                <option value="Eritrea">Eritrea</option>
                <option value="Estonia">Estonia</option>
                <option value="Ethiopia">Ethiopia</option>
                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                <option value="Faroe Islands">Faroe Islands</option>
                <option value="Fiji">Fiji</option>
                <option value="Finland">Finland</option>
                <option value="France">France</option>
                <option value="French Guiana">French Guiana</option>
                <option value="French Polynesia">French Polynesia</option>
                <option value="French Southern Territories">French Southern Territories</option>
                <option value="Gabon">Gabon</option>
                <option value="Gambia">Gambia</option>
                <option value="Georgia">Georgia</option>
                <option value="Germany">Germany</option>
                <option value="Ghana">Ghana</option>
                <option value="Gibraltar">Gibraltar</option>
                <option value="Greece">Greece</option>
                <option value="Greenland">Greenland</option>
                <option value="Grenada">Grenada</option>
                <option value="Guadeloupe">Guadeloupe</option>
                <option value="Guam">Guam</option>
                <option value="Guatemala">Guatemala</option>
                <option value="Guernsey">Guernsey</option>
                <option value="Guinea">Guinea</option>
                <option value="Guinea-bissau">Guinea-bissau</option>
                <option value="Guyana">Guyana</option>
                <option value="Haiti">Haiti</option>
                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                <option value="Honduras">Honduras</option>
                <option value="Hong Kong">Hong Kong</option>
                <option value="Hungary">Hungary</option>
                <option value="Iceland">Iceland</option>
                <option value="India">India</option>
                <option value="Indonesia">Indonesia</option>
                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                <option value="Iraq">Iraq</option>
                <option value="Ireland">Ireland</option>
                <option value="Isle of Man">Isle of Man</option>
                <option value="Israel">Israel</option>
                <option value="Italy">Italy</option>
                <option value="Jamaica">Jamaica</option>
                <option value="Japan">Japan</option>
                <option value="Jersey">Jersey</option>
                <option value="Jordan">Jordan</option>
                <option value="Kazakhstan">Kazakhstan</option>
                <option value="Kenya">Kenya</option>
                <option value="Kiribati">Kiribati</option>
                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                <option value="Korea, Republic of">Korea, Republic of</option>
                <option value="Kuwait">Kuwait</option>
                <option value="Kyrgyzstan">Kyrgyzstan</option>
                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                <option value="Latvia">Latvia</option>
                <option value="Lebanon">Lebanon</option>
                <option value="Lesotho">Lesotho</option>
                <option value="Liberia">Liberia</option>
                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                <option value="Liechtenstein">Liechtenstein</option>
                <option value="Lithuania">Lithuania</option>
                <option value="Luxembourg">Luxembourg</option>
                <option value="Macao">Macao</option>
                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                <option value="Madagascar">Madagascar</option>
                <option value="Malawi">Malawi</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Maldives">Maldives</option>
                <option value="Mali">Mali</option>
                <option value="Malta">Malta</option>
                <option value="Marshall Islands">Marshall Islands</option>
                <option value="Martinique">Martinique</option>
                <option value="Mauritania">Mauritania</option>
                <option value="Mauritius">Mauritius</option>
                <option value="Mayotte">Mayotte</option>
                <option value="Mexico">Mexico</option>
                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                <option value="Moldova, Republic of">Moldova, Republic of</option>
                <option value="Monaco">Monaco</option>
                <option value="Mongolia">Mongolia</option>
                <option value="Montenegro">Montenegro</option>
                <option value="Montserrat">Montserrat</option>
                <option value="Morocco">Morocco</option>
                <option value="Mozambique">Mozambique</option>
                <option value="Myanmar">Myanmar</option>
                <option value="Namibia">Namibia</option>
                <option value="Nauru">Nauru</option>
                <option value="Nepal">Nepal</option>
                <option value="Netherlands">Netherlands</option>
                <option value="Netherlands Antilles">Netherlands Antilles</option>
                <option value="New Caledonia">New Caledonia</option>
                <option value="New Zealand">New Zealand</option>
                <option value="Nicaragua">Nicaragua</option>
                <option value="Niger">Niger</option>
                <option value="Nigeria">Nigeria</option>
                <option value="Niue">Niue</option>
                <option value="Norfolk Island">Norfolk Island</option>
                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                <option value="Norway">Norway</option>
                <option value="Oman">Oman</option>
                <option value="Pakistan">Pakistan</option>
                <option value="Palau">Palau</option>
                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                <option value="Panama">Panama</option>
                <option value="Papua New Guinea">Papua New Guinea</option>
                <option value="Paraguay">Paraguay</option>
                <option value="Peru">Peru</option>
                <option value="Philippines">Philippines</option>
                <option value="Pitcairn">Pitcairn</option>
                <option value="Poland">Poland</option>
                <option value="Portugal">Portugal</option>
                <option value="Puerto Rico">Puerto Rico</option>
                <option value="Qatar">Qatar</option>
                <option value="Reunion">Reunion</option>
                <option value="Romania">Romania</option>
                <option value="Russian Federation">Russian Federation</option>
                <option value="Rwanda">Rwanda</option>
                <option value="Saint Helena">Saint Helena</option>
                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                <option value="Saint Lucia">Saint Lucia</option>
                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                <option value="Samoa">Samoa</option>
                <option value="San Marino">San Marino</option>
                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                <option value="Saudi Arabia">Saudi Arabia</option>
                <option value="Senegal">Senegal</option>
                <option value="Serbia">Serbia</option>
                <option value="Seychelles">Seychelles</option>
                <option value="Sierra Leone">Sierra Leone</option>
                <option value="Singapore">Singapore</option>
                <option value="Slovakia">Slovakia</option>
                <option value="Slovenia">Slovenia</option>
                <option value="Solomon Islands">Solomon Islands</option>
                <option value="Somalia">Somalia</option>
                <option value="South Africa">South Africa</option>
                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                <option value="Spain">Spain</option>
                <option value="Sri Lanka">Sri Lanka</option>
                <option value="Sudan">Sudan</option>
                <option value="Suriname">Suriname</option>
                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                <option value="Swaziland">Swaziland</option>
                <option value="Sweden">Sweden</option>
                <option value="Switzerland">Switzerland</option>
                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                <option value="Taiwan">Taiwan</option>
                <option value="Tajikistan">Tajikistan</option>
                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                <option value="Thailand">Thailand</option>
                <option value="Timor-leste">Timor-leste</option>
                <option value="Togo">Togo</option>
                <option value="Tokelau">Tokelau</option>
                <option value="Tonga">Tonga</option>
                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                <option value="Tunisia">Tunisia</option>
                <option value="Turkey">Turkey</option>
                <option value="Turkmenistan">Turkmenistan</option>
                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                <option value="Tuvalu">Tuvalu</option>
                <option value="Uganda">Uganda</option>
                <option value="Ukraine">Ukraine</option>
                <option value="United Arab Emirates">United Arab Emirates</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="United States">United States</option>
                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                <option value="Uruguay">Uruguay</option>
                <option value="Uzbekistan">Uzbekistan</option>
                <option value="Vanuatu">Vanuatu</option>
                <option value="Venezuela">Venezuela</option>
                <option value="Viet Nam">Viet Nam</option>
                <option value="Virgin Islands, British">Virgin Islands, British</option>
                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                <option value="Wallis and Futuna">Wallis and Futuna</option>
                <option value="Western Sahara">Western Sahara</option>
                <option value="Yemen">Yemen</option>
                <option value="Zambia">Zambia</option>
                <option value="Zimbabwe">Zimbabwe</option>
      </select>
      <input type="password" name="password" required placeholder="enter your password">
      <input type="password" name="cpassword" required placeholder="confirm your password">
      <select name="user_type">
         <option value="IRA account">IRA account</option>
          <option value="stock account">Stock trading account</option>
      </select>
      <p style="color:grey"><b>NOTE:</b><i> Please select the type of stock account you are registering </i> 
    <br>
    <br>
    <strong>By clicking "Register Now", you agree to the below:</strong>
    <br>
    <br>
I declare that I have read, fully understood and hereby accept the entire text of the <a href="../term.html">Terms Of Services</a>
<br>
<br>
I declare that I have read, fully understood and hereby accept the entire text of the <a href="../privacy policy.html" >Privacy Policy</a>
    
    </p>

      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>already have an account? <a href="login_form.php">login now</a></p>
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