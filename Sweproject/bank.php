<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
    $bank = $_POST['bank'];
    $account_number =$_POST['account_number'];
		$amount = $_POST['amount'];


		if( !empty($bank) && !empty($bank) && !empty($account_number) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into bank_payment (bank,account_number,amount) values ('$bank','$account_number','$amount')";

			mysqli_query($con, $query);

			header("Location: bank.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="index.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css"
    href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Prepaid user benifited like postpaid user</title>
    <style>
         body {
      font-size: 12px;
    }

    body,
    button,
    input {
      font-family: 'Montserrat', sans-serif;
      font-weight: 700;
      letter-spacing: 1.4px;
    }

    .site-footer {
      background-color: #26272b;
      padding: 45px 0 20px;
      font-size: 15px;
      line-height: 24px;
      color: #737373;
    }

    .site-footer hr {
      border-top-color: #bbb;
      opacity: 0.5
    }

    .site-footer hr.small {
      margin: 20px 0
    }

    .site-footer h6 {
      color: #fff;
      font-size: 16px;
      text-transform: uppercase;
      margin-top: 5px;
      letter-spacing: 2px
    }

    .site-footer a {
      color: #737373;
    }

    .site-footer a:hover {
      color: #3366cc;
      text-decoration: none;
    }

    .footer-links {
      padding-left: 0;
      list-style: none
    }

    .footer-links li {
      display: block
    }

    .footer-links a {
      color: #737373
    }

    .footer-links a:active,
    .footer-links a:focus,
    .footer-links a:hover {
      color: #3366cc;
      text-decoration: none;
    }

    .footer-links.inline li {
      display: inline-block
    }

    .site-footer .social-icons {
      text-align: right
    }

    .site-footer .social-icons a {
      width: 40px;
      height: 40px;
      line-height: 40px;
      margin-left: 6px;
      margin-right: 0;
      border-radius: 100%;
      background-color: #33353d
    }

    .copyright-text {
      margin: 0
    }

    @media (max-width:991px) {
      .site-footer [class^=col-] {
        margin-bottom: 30px
      }
    }

    @media (max-width:767px) {
      .site-footer {
        padding-bottom: 0
      }

      .site-footer .copyright-text,
      .site-footer .social-icons {
        text-align: center
      }
    }

    .social-icons {
      padding-left: 0;
      margin-bottom: 0;
      list-style: none
    }

    .social-icons li {
      display: inline-block;
      margin-bottom: 4px
    }

    .social-icons li.title {
      margin-right: 15px;
      text-transform: uppercase;
      color: #96a2b2;
      font-weight: 700;
      font-size: 13px
    }

    .social-icons a {
      background-color: #eceeef;
      color: #818a91;
      font-size: 16px;
      display: inline-block;
      line-height: 44px;
      width: 44px;
      height: 44px;
      text-align: center;
      margin-right: 8px;
      border-radius: 100%;
      -webkit-transition: all .2s linear;
      -o-transition: all .2s linear;
      transition: all .2s linear
    }

    .social-icons a:active,
    .social-icons a:focus,
    .social-icons a:hover {
      color: #fff;
      background-color: #29aafe
    }

    .social-icons.size-sm a {
      line-height: 34px;
      height: 34px;
      width: 34px;
      font-size: 14px
    }

    .social-icons a.facebook:hover {
      background-color: #3b5998
    }

    .social-icons a.twitter:hover {
      background-color: #00aced
    }

    .social-icons a.linkedin:hover {
      background-color: #007bb6
    }

    .social-icons a.dribbble:hover {
      background-color: #ea4c89
    }

    @media (max-width:767px) {
      .social-icons li.title {
        display: block;
        margin-right: 0;
        font-weight: 600
      }
    }
        /*** */
        .dropdown {
      position: relative;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      width: 100%;
      overflow: auto;
      box-shadow: 0px 10px 10px 0px rgba(0, 0, 0, 0.4);
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }

    .dropdown-content a {
      display: block;
      color: #000000;
      padding: 5px;
      text-decoration: none;
    }

    .dropdown-content a:hover {
      color: #FFFFFF;
      background-color: #00A4BD;
    }
    </style>
    <title>Document</title>
</head>
<body>
<nav class=" nav fixed-top custom-nav sticky navbar navbar-expand-lg navbar-light bg-light">

<button class=" navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <form class="form-inline my-2 my-lg-0">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item bg-light ml-4  active">
        <a class="nav-link" href="prepaid.php#id2">Package</a>
      </li>
      <li class="nav-item bg-light ml-4  active">
        <a class="nav-link" href="postpaid.php#id3">TopUp</a>
      </li>
      <li class="nav-item bg-light ml-4 active">
        <div class="dropdown">
          <a style="color: black;" class="nav-link" href="payment.php">Payment </a>
          <div class="dropdown-content">
            <a href="payment.php#card-payment">CARD</a>
            <a href="bank.php">BANK</a>
            <a href="payment.php#other">OTHER</a>
          </div>
        </div>
      </li>
      <li class="nav-item bg-light ml-4 active">
        <a class="nav-link" href="index.php#id1">Contact US </a>
      </li>
    </ul>
</div>
</form>
</nav>
<section id="bank-payment">
  <div class="row">
    <div class="col-sm-2">
      <div class="card-body"></div>
    </div>
    <div class="col-sm-8"><br><br><br><br><br> 
      <div class="card">
        <div class="card-body">
          <form method="post"><br>
           <h3>Bank Payment</h3><br>
            <div class="form-group "> 
              <label for="inputoperator">Select Bank</label>             
              <select name="bank" class="form-control" id="ccmonth">
                    <option value="" selected >--Select a Bank--</option>
                    <option value="Sonali Bank">Sonali Bank</option>
                    <option value="Jamuna Bank">Jamuna Bank</option>
                    <option value="Agrani Bank">Agrani Bank</option>
                    <option value="Social Islami Bank Limited">Social Islami Bank Limited</option>
                    <option value="Midland Bank">Midland Bank</option>
                    <option value="Dach Bangla Bank">Dach Bangla Bank</option>
              </select> 
            </div>
            <div class="form-group">
              <label for="inputnumber">Account Number</label><br>
              <input class="form-control" id="text" type="number" class="feedback-input" name="account_number">
            </div> 
                  <div class="form-group">
                    <label for="inputnumber">Amount</label><br>
                    <input class="form-control" id="text" type="number" class="feedback-input" name="amount">
                  </div>
                  <div class="form-group">
                  <button type="button" class="btn"><input class="contact_submit" id="button" type="submit" value="Payment"></button>
                  </div>    
          </form>
        </div>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="card-body"></div>
    </div> 
  </div>
</section><br>
<footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <h6>About</h6>
          <p class="text-justify"> <i>UNDER CONSTRACTION </i> </p>
        </div>

        <div class="col-xs-6 col-md-3">
          <h6>Categories</h6>
          <ul class="footer-links">
            <li><a href="#">BOOTSTRAP</a></li>
            <li><a href="#">HTML</a></li>
            <li><a href="#">CSS</a></li>
            <li><a href="#">JS</a></li>
            <li><a href="#">Android</a></li>
            <li><a href="#">Templates</a></li>
          </ul>
        </div>

        <div class="col-xs-6 col-md-3">
          <h6>Quick Links</h6>
          <ul class="footer-links">
            <li><a href="#">Package</a></li>
            <li><a href="#">TopUp</a></li>
            <li><a href="#">Payment</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul>
        </div>
      </div>
      <hr>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-6 col-xs-12">
          <p class="copyright-text">Copyright &copy; 2022 All Rights Reserved by
            <a href="#">Prepaid User Benifited Like Postpaid User</a>.
          </p>
        </div>

        <div class="col-md-4 col-sm-6 col-xs-12">
          <ul class="social-icons">
            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
            <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
</body>
</html>