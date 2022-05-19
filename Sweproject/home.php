

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="index.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css"
    href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700|Open+Sans:400,700">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" type="text/css"
    href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
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

    /*-----*/
    /*review*/
    h2 {
      color: #333;
      text-align: center;
      text-transform: uppercase;
      font-family: "Roboto", sans-serif;
      font-weight: bold;
      position: relative;
      margin: 25px 0 50px;
    }

    h2::after {
      content: "";
      width: 100px;
      position: absolute;
      margin: 0 auto;
      height: 3px;
      background: #ffdc12;
      left: 0;
      right: 0;
      bottom: -10px;
    }

    .carousel {
      width: 650px;
      margin: 0 auto;
      padding-bottom: 50px;
    }

    .carousel .carousel-item {
      color: #999;
      font-size: 14px;
      text-align: center;
      overflow: hidden;
      min-height: 340px;
    }

    .carousel .carousel-item a {
      color: #eb7245;
    }

    .carousel .img-box {
      width: 145px;
      height: 145px;
      margin: 0 auto;
      border-radius: 50%;
    }

    .carousel .img-box img {
      width: 100%;
      height: 100%;
      display: block;
      border-radius: 50%;
    }

    .carousel .testimonial {
      padding: 30px 0 10px;
    }

    .carousel .overview {
      text-align: center;
      padding-bottom: 5px;
    }

    .carousel .overview b {
      color: #333;
      font-size: 15px;
      text-transform: uppercase;
      display: block;
      padding-bottom: 5px;
    }

    .carousel .star-rating i {
      font-size: 18px;
      color: #ffdc12;
    }

    .carousel-control-prev,
    .carousel-control-next {
      width: 30px;
      height: 30px;
      border-radius: 50%;
      background: #999;
      text-shadow: none;
      top: 4px;
    }

    .carousel-control-prev i,
    .carousel-control-next i {
      font-size: 20px;
      margin-right: 2px;
    }

    .carousel-control-prev {
      left: auto;
      right: 40px;
    }

    .carousel-control-next i {
      margin-right: -2px;
    }

    .carousel .carousel-indicators {
      bottom: 15px;
    }

    .carousel-indicators li,
    .carousel-indicators li.active {
      width: 11px;
      height: 11px;
      margin: 1px 5px;
      border-radius: 50%;
    }

    .carousel-indicators li {
      background: #e2e2e2;
      border: none;
    }

    .carousel-indicators li.active {
      background: #888;
    }
  </style>
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
            <a class="nav-link" href="home.php#id5">Home</a>
          </li>
          <li class="nav-item bg-light ml-4  active">
            <a class="nav-link" href="#id7">TopUp</a>
          </li>
          <li class="nav-item bg-light ml-4  active">
            <a class="nav-link" href="about.php#id9">About Us</a>
          </li>
          <li class="nav-item bg-light ml-4  active">
            <a class="nav-link" href="livechat.php#id10">livechat</a>
          </li>
          <li class="nav-item bg-light ml-4  active">
            <a class="nav-link" href="login.php#id6" class="btn-s bg-primary text-light btn-outline-custom btn-round">
              MyAccount</a>
          </li>
        </ul>
    </div>
    </form>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </nav>

  </div>
  <div id="id5">
    <img src="image/Green Hello March Banner.png" width="1225px" height="400px">
  </div>
  <div class="card">
    <div class="card-body">
      <div style="text-align: center;" class="row">
        <div class="col-sm-3">
          <div class="card">
            <div class="card-body">
              <img src="image/airtel.jpg" height="50px" width="100px">
              <h5 class="card-title"> <b> Enjoy 225 min, 1GB + 0.5GB 4G internet @ 179 for 30 Days</b></h5>
              <p class="card-text">Validity: 30 Days
                Price: 179TK</p>
              <a href="login.php" class="btn btn-primary">GET IT</a>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card">
            <div class="card-body">
              <img src="image/Grameenphonepng.png" height="50px" width="100px">
              <h5 class="card-title"> <b>1GB at 49TK for 30 Days</b> </h5>
              <p class="card-text">Validity: 30 Days
                Price: 49TK</p> <br>
              <a href="login.php" class="btn btn-primary">GET IT</a>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card">
            <div class="card-body">
              <img src="image/banglalink.png" height="50px" width="100px">
              <h5 class="card-title"><b>120 Minutes at only 78TK for 7 Days</b></h5>
              <p class="card-text">Validity: 7 Days
                Price: 78TK</p> <br>
              <a href="login.php" class="btn btn-primary">GET IT</a>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card">
            <div class="card-body">
              <img src="image/robi.jpg" height="50px" width="100px">
              <h5 class="card-title"><b>250MB at only 13TK for 3 Days</b></h5>
              <p class="card-text">Validity: 3 Days
                Price: 13TK</p> <br>
              <a href="login.php" class="btn btn-primary">GET IT</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><br><br>
  <section id="id7"><br><br><br>

    <h2><b>TopUp Request</b></h2>
    <form>
      <div class="form-row">
        <div class="col">
          <input type="number" class="form-control" placeholder="Enter your number">
        </div>
        <div class="col">
          <select class="form-control" id="ccmonth">
            <option value="" selected>Select a operator</option>
            <option value="1">Robi</option>
            <option value="2">banglalink</option>
            <option value="3">Grameen</option>
            <option value="4">Telitalk</option>
          </select>
        </div>
        <div class="col">
          <select class="form-control" id="ccmonth">
            <option value="" selected>Select connection type</option>
            <option value="1">Prepaid</option>
          </select>
        </div>
        <div class="col">
          <input type="number" class="form-control" placeholder="Amount">
        </div>
      </div>
      <div><br>
        <div class="col">
          <button style="background-color: blue; color: #FFFFFF;" type="button" class="btn form-control">RECHARGE
            REQUEST</button>
        </div>
      </div>
    </form>
  </section><br><br>
  <section>
<h2> Satisfied Customer</h2>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Carousel indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <!-- Wrapper for carousel items -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="img-box"><img src="image/3.jpg" alt=""></div>
          <p class="testimonial">Phasellus vitae suscipit justo. Mauris pharetra feugiat ante id lacinia. Etiam faucibus
            mauris id tempor egestas. Duis luctus turpis at accumsan tincidunt. Phasellus risus risus, volutpat vel
            tellus ac, tincidunt fringilla massa. Etiam hendrerit dolor eget rutrum.</p>
          <p class="overview"><b>Michael Holz</b>Seo Analyst at <a href="#">OsCorp Tech.</a></p>
          <div class="star-rating">
            <ul class="list-inline">
              <li class="list-inline-item"><i class="fa fa-star"></i></li>
              <li class="list-inline-item"><i class="fa fa-star"></i></li>
              <li class="list-inline-item"><i class="fa fa-star"></i></li>
              <li class="list-inline-item"><i class="fa fa-star"></i></li>
              <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
            </ul>
          </div>
        </div>
        <div class="carousel-item">
          <div class="img-box"><img src="image/1.jpg" alt=""></div>
          <p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam
            at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Vestibulum idac nisl
            bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
          <p class="overview"><b>Paula Wilson</b>Media Analyst at <a href="#">SkyNet Inc.</a></p>
          <div class="star-rating">
            <ul class="list-inline">
              <li class="list-inline-item"><i class="fa fa-star"></i></li>
              <li class="list-inline-item"><i class="fa fa-star"></i></li>
              <li class="list-inline-item"><i class="fa fa-star"></i></li>
              <li class="list-inline-item"><i class="fa fa-star"></i></li>
              <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
            </ul>
          </div>
        </div>
        <div class="carousel-item">
          <div class="img-box"><img src="image/2.jpg" alt=""></div>
          <p class="testimonial">Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a mi suscipit
            tincidunt. Utmtc tempus dictum risus. Pellentesque viverra sagittis quam at mattis. Suspendisse potenti.
            Aliquam sit amet gravida nibh, facilisis gravida odio. Phasellus auctor velit.</p>
          <p class="overview"><b>Antonio Moreno</b>Web Developer at <a href="#">Circle Ltd.</a></p>
          <div class="star-rating">
            <ul class="list-inline">
              <li class="list-inline-item"><i class="fa fa-star"></i></li>
              <li class="list-inline-item"><i class="fa fa-star"></i></li>
              <li class="list-inline-item"><i class="fa fa-star"></i></li>
              <li class="list-inline-item"><i class="fa fa-star"></i></li>
              <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Carousel controls -->
      <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
        <i class="fa fa-angle-left"></i>
      </a>
      <a class="carousel-control-next" href="#myCarousel" data-slide="next">
        <i class="fa fa-angle-right"></i>
      </a>
    </div>
  </section>


  <footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <form action="action_page.php">
            <div class="container">
              <p style="font-size: 29px;">Subscribe to our Newsletter</p>
            </div>
            <div class="container">
              <input type="text" placeholder="Name" name="name" required>
              <input type="text" placeholder="Email address" name="mail" required>
              <label>
                <input type="checkbox" checked="checked" name="subscribe"> Daily Newsletter
              </label>
            </div>
            <div class="container">
              <input type="submit" value="Subscribe">
            </div>
          </form>
        </div>


        <div class="col-xs-6 col-md-3">
          <h6>Categories</h6>
          <ul class="footer-links">
            <li><a href="#">BOOTSTRAP</a></li>
            <li><a href="#">HTML</a></li>
            <li><a href="#">CSS</a></li>
            <li><a href="#">JS</a></li>
            <li><a href="#">PHP</a></li>
          </ul>
        </div>

        <div class="col-xs-6 col-md-3">
          <h6>Quick Links</h6>
          <ul class="footer-links">
            <li><a href="#">Home</a></li>
            <li><a href="#">TopUp</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">livechat</a></li>
            <li><a href="#">Account</a></li>
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