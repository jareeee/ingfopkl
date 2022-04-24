<?php 
require "function.php";
session_start();

$jobs = query(" SELECT * FROM jobs, company WHERE jobs.company_id=company.id");

if(isset($_POST['cari'])){
    $result = cari($_POST['info']);
} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/style-jobs.css">
    <script src="js/jquery-3.6.0.min.js"></script>
    <title>Jobs</title>
    
</head>
<body>
    <header id="header">
        <a href="index.php" class="logo">IngfokanPKL</a>
        <ul class="navigation" id="menulist">
            <li><a href="#">Jobs</a></li>
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

    <main align="center">
        <h1>Dapatkan Ingfo pkl kamu disini !</h1>

        <form action="" method="POST">
            
            <div class="search-bar">

                    <div class="search">
                        <input type="text" name="info" id="info" placeholder="Ingfo PKL min" autocomplete="off">
                    </div>

                    <div class="search">
                        <input type="text" name="domisili" id="domisili" placeholder="Daerah mana min" autocomplete="off">
                    </div>

                    <div class="search">
                        <button class="cari" name="cari" id="cari" type="submit">Cari</button>
                    </div>

            </div>

        </form>

        <div id="result-search-bef">
            <p>Cari ingfo PKL mu pake search bar diatas ya!</p>
            <img src="foto/Anim.png">
        </div>

        <div id="result-search-aft">
            <div id="result-search-aft-right" > </div>
        </div>

    </main>

<script src="js/scripts-jobs.js"></script>

</body>
</html>