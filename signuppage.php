<?php  
require "function.php";
session_start();
    if(isset($_SESSION['login'])) {
        header("Location: index.php");
        exit;
    }

if(isset($_POST['signup'])) {
    if(signup($_POST) > 0 ) {
        header("Location: loginpage.php");
    } else {
        $pesan = true;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style-login.css">
    <title>Sign Up</title>
</head>
<body>
    <div class="container">
        <div class="img">
            <img src="foto/login.png">
        </div>
        <div class="login">
            <form action="" method="post">
                <h3>Welcome to</h3>
                <h2>IngfokanPKL</h2>

                <?php if(isset($pesan)){
                        echo "<p style='color: red; border: 1px solid red; border-radius: 20px;'>Password anda tidak sama / Email anda telah terdaftar</p>";    
                      }
                ?>

                
                <div class="input">
                    <input type="text" name="name" id="name" class="input" placeholder="Name" autocomplete="off" required>
                </div>
                <div class="input">
                    <input type="email" name="email" id="email" class="input" placeholder="Email" autocomplete="off" required>
                </div>
                <div class="input">
                    <input class="input" name="password" id="password" type="password" placeholder="password" required>
                </div>
                <div class="input">
                    <input class="input" name="password2" id="password2" type="password" placeholder="confirm password" required>
                </div>
                <input type="submit" value="Sign Up" name="signup" class="submit">
                <p class="p">Already have an account? <a href="loginpage.php">Sign In</a></p>
            </form>
        </div>
    </div>
    <div class="circle"></div>
</body>
</html>