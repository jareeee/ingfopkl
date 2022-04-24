<?php  
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="viewport">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style-company.css">
    <title>Sitcom</title>
</head>
<body>
    <header id="header">
        <a href="index.php" class="logo" >IngfokanPKL</a>
        <ul class="navigation" id="menulist">
            <li><a href="jobs.php">Jobs</a></li>
            <li><a href="#">Company</a></li>
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
    <main>
        <div class="box-company">
            <div class="content-company">
                <h1>Buka Lowongan PKL-mu Min</h1>
                <p>Percayakan lowongan mu pada kami</p>
                <button id="button-company">Mulai Sekarang</button>
                <a href="#">Ingin mencari lowongan?</a>
            </div>
            <img src="foto/company.png">
        </div>
        <div class="bgkuning">

                <div class="content2">
                    <h1>Temui Kandidat yang kompetent</h1>
                    <img src="foto/tosan.png">
                </div>

                <div class="kotakkotak">

                    <div class="kotakkecil">
                        <img src="foto/circle1.png" alt="">
                        <div>
                            <h3>KENAPA KAMI?</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita beatae sed ea eum nesciunt omnis, voluptatem, est magnam ipsam iusto, ex vitae sit! Dolores fugiat quam voluptatibus voluptatem esse. Eaque!</p>
                        </div>
                    </div>

                    <div class="kotakkecil">
                        <img src="foto/circle2.png" alt="">
                        <div>
                            <h3>100+ SDM</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita beatae sed ea eum nesciunt omnis, voluptatem, est magnam ipsam iusto, ex vitae sit! Dolores fugiat quam voluptatibus voluptatem esse. Eaque!</p>
                        </div>
                    </div>

                    <div class="kotakkecil">
                        <img src="foto/circle3.png" alt="">
                        <div>
                            <h3>BELAJAR-BEKERJA-MEMBANGUN</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita beatae sed ea eum nesciunt omnis, voluptatem, est magnam ipsam iusto, ex vitae sit! Dolores fugiat quam voluptatibus voluptatem esse. Eaque!</p>
                        </div>
                    </div>

                </div>
        </div>
    </main>
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