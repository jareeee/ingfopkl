<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="css/style-about.css">
    <title>About</title>
</head>
<body>
    <header id="header">
        <a href="index.php" class="logo" >IngfokanPKL</a>
        <ul class="navigation" id="menulist">
            <li><a href="jobs.php">Jobs</a></li>
            <li><a href="company.php">Company</a></li>
            <li><a href="#">About</a></li>
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
        <div id="container-about">
            <img src="foto/about.png" alt="">
            <div>
                <h1>Tentang <FONT COLOR=#EEC643>Kami</FONT></h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquet egestas ut nisi orci adipiscing libero. Amet nibh lectus vel, netus. Ante metus nulla viverra ut feugiat molestie sed arcu. Egestas arcu, urna, montes, facilisis in magna in et eget. Phasellus dui in nec urna, posuere condimentum porta lectus in. Tortor, sit neque, vitae nulla. Viverra ultricies sed diam ac. Velit, commodo, urna luctus pharetra urna. Non imperdiet duis elit blandit sed etiam lorem consectetur rhoncus. Libero, vitae quis potenti tristique pharetra, pharetra, rhoncus amet. Enim cum sit natoque pulvinar. In amet gravida consectetur est, pretium cursus amet ultricies amet. Dolor, vestibulum sodales mi quisque mattis dignissim imperdiet sem. Commodo nunc, nulla tellus ut.</p>
            </div>
        </div>
        <div id="bg-yellow">
            <div class="top">
                <h1>Biarkan Data Yang Bicara!</h1>
                <p>Kami telah melayani lebih dari 1k+ User</p>
                <div>
                    <img src="foto/Count 1.png" alt="">
                    <img src="foto/Count 2.png" alt="">
                    <img src="foto/Count 3.png" alt="">
                    <img src="foto/Count 4.png" alt="">
                </div>
            </div>
            <div class="bottom">
                <h2>Featured Company</h2>
                <div>
                    <img src="foto/tokped.png" alt="">
                    <img src="foto/tokped.png" alt="">
                    <img src="foto/tokped.png" alt="">
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