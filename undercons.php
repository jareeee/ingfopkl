<?php  
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/errorpage-style.css">
    <title>Jobs</title>
</head>
<body>
<header id="header">
        <a href="index.php" class="logo" >IngfokanPKL</a>
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
    <main>
        <div class="error">
            <h1 class="kata">Halaman ini masih dalam pengembangan!</h1>
        </div>
        <div class="foto-undercons">
            <img src="foto/404.png" class="foto1">
        </div>
    </main>
    <script src="js/scripts-jobs.js"></script>
</body>
</html>