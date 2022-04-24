<?php  
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="viewport">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/jquery-3.6.0.min.js"></script>
    <title>Sitcom</title>
</head>
<body>
    <header id="header">
        <a href="#" class="logo" >IngfokanPKL</a>
        <ul class="navigation" id="menulist">
            <li><a href="jobs.php">Jobs</a></li>
            <li><a href="company.php">Company</a></li>
            <li><a href="about.php">About</a></li>
        </ul>
        <img src="foto/menu.png" class="menuicon" onclick="togglemenu()">
        <ul class="nav">
        <?php  if(!isset($_SESSION['login'])) : ?>
            <li><a href="loginpage.php" class="login">Login</a></li>
            <li><a href="signuppage.php" class="signup">SignUp</a></li>
        <?php else : ?>
            <li><a href="users.php?email=<?= $_SESSION['email']; ?>" class='user-login'>hi, <?= $_SESSION['user'] ?></a></li>
        <?php endif; ?>
        </ul>
    </header>
    <div class="banner">
        <div class="content">
            <h1>
                Start your <FONT COLOR=#EEC643>career</FONT> with us!
            </h1>
            <div class="box-recom">
                <ul class="box-content">
                    <li>UI Designer</li>
                    <li>Ux Designer</li>
                    <li>IT Manager</li>
                    <li>Full-Stack Developer</li>
                    <li>Project Manager</li>
                    <li>Admin Shitpost Instagram</li>
                    <button id='search-box'>Search</button>
                </ul>
            </div>
        </div>
        <img src="foto/Sketch.png" class="foto">
    </div>
    <div class="brand">
        <div class="brand-text">
            <h3>1,000,000+</h3>
            <p>High demand job waiting for YOU!<br>
                more than 100+ companies</p>
        </div>
        <div class="brand-img">
            <img src="foto/Airbnb Logo.png" alt="">
            <img src="foto/Amazon Logo.png" alt="">
            <img src="foto/FedEx Logo.png" alt="">
            <img src="foto/Microsoft Logo.png" alt="">
            <img src="foto/Google Logo.png" alt="">
            <img src="foto/OLA logo.png" alt="">
            <img src="foto/Walmart Logo.png" alt="">
            <img src="foto/OYO Logo.png" alt="">
        </div>
    </div>
    <div class="box-featured">
        <h2 class="h2">Featured Companies</h2>
            <div class="box-featured2">
                <div class="mobile-app">
                    <h3 class="h3">Mobile Application</h3>
                    <p class="p">Lorem ipsum dolor amet, consectetur adipiscing elit. Mattis et sed nam sem tellus erat.
                    </p>
                    <a class="explore" href="jobs.php">Explore -></a>
                </div>
                <div class="web-app">
                    <h3 class="h3">Web Application</h3>
                    <p class="p">Lorem ipsum dolor amet, consectetur adipiscing elit. Mattis et sed nam sem tellus erat.
                    </p>
                    <a class="explore" href="jobs.php">Explore -></a>
                </div>
                <div class="ui-design">
                    <h3 class="h3">UI Design</h3>
                    <p class="p">Lorem ipsum dolor amet, consectetur adipiscing elit. Mattis et sed nam sem tellus erat.
                    </p>
                    <a class="explore" href="jobs.php">Explore -></a>
                </div>
                <div class="strat-brand">
                    <h3 class="h3">Strategy and Branding</h3>
                    <p class="p">Lorem ipsum dolor amet, consectetur adipiscing elit. Mattis et sed nam sem tellus erat.
                    </p>
                    <a class="explore" href="jobs.php">Explore -></a>
                </div>
                <div class="marketing">
                    <h3 class="h3">Performance Marketing</h3>
                    <p class="p">Lorem ipsum dolor amet, consectetur adipiscing elit. Mattis et sed nam sem tellus erat.
                    </p>
                    <a class="explore" href="jobs.php">Explore -></a>
                </div>
                <div class="pm">
                    <h3 class="h3">Project Management</h3>
                    <p class="p">Lorem ipsum dolor amet, consectetur adipiscing elit. Mattis et sed nam sem tellus erat.
                    </p>
                    <a class="explore" href="jobs.php">Explore -></a>
                </div>
            </div> 
    </div>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <div class="brand2">
                <img src="foto/kutip.png" alt="kutip" class="kutip">
                <p class="china">配写国屈島鉄静原更口街再売稿学題向知旅杯。刊毎載暁町中際理個治施夫万切。犠撒術問質決活監少始会人。海部行驚構稿分驚開変玲員。詳選亡再党常募種失野写指務真。
                    思連確午記族三同融本米権験音備増阪賞。使番王文市郎通課真響集浜制。奪毎圧表服奏応減将置界待数登準要。報本界次需近標名物国文夏力。王引紙暮通制森宇連視最類鮮指場島提可。</p>
                <p class="china2">John Xina</p>
                <p class="china3"> CEO at Ayonima </p>
                    <img src="foto/bingxiling.png" alt="bingxiling" class="bingxiling">
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <div class="brand2">
                <img src="foto/kutip.png" alt="kutip" class="kutip">
                <p class="china">WUAAH KAGETTT</p>
                <p class="china2">Joko Widodo</p>
                <p class="china3"> Presiden at Indonesia </p>
                    <img src="foto/jokowi.png" alt="bingxiling" class="bingxiling">
            </div>
          </div>
          <div class="carousel-item">
            <div class="brand2">
                <img src="foto/kutip.png" alt="kutip" class="kutip">
                <p class="china">mangan turu satire</p>
                <p class="china2">Sapik Ngumpet</p>
                <p class="china3"> Ketua Persatiran Dunia </p>
                    <img src="foto/sapik.png" alt="bingxiling" class="bingxiling">
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>
    <footer class="footer">
        <div class="box-footer">
            <div class="col1">
                <div class="footer-col">
                    <h5>IngfokanPKL</h5>
                    <ul>
                        <li>Copyright @2020 <br> IngfokanPKL</li>
                        <li>All rights reserved</li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h5>Company</h5>
                    <ul>
                        <li><a href="">About Us</a></li>
                        <li><a href="">Blog</a></li>
                        <li><a href="">Contact Us</a></li>
                        <li><a href="">Pricing</a></li>
                        <li><a href="">Testimonials</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h5>Support</h5>
                    <ul>
                        <li><a href="">Help Center</a></li>
                        <li><a href="">Terms of Service</a></li>
                        <li><a href="">Legal</a></li>
                        <li><a href="">Privacy Policy</a></li>
                        <li><a href="">Status</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h5>Support</h5>
                    <div class="social-link">
                        <a href="#"><img src="foto/instagram.png" alt=""></a>
                        <a href="#"><img src="foto/web.png" alt=""></a>
                        <a href="#"><img src="foto/facebook.png" alt=""></a>
                        <a href="#"><img src="foto/twitter.png" alt=""></a>
                    </div>
            </div>
        </div>
    </footer>

    <script src="js/scripts-jobs.js"></script>

</body>
</html>