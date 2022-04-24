<?php  
require "function.php";
session_start();
//query email

if(isset($_SESSION['login'])) {
    header("Location: index.php");
    exit;
}

if(isset($_POST['signin'])){
    if(signin($_POST) > 0){
            $email = $_POST['email'];
            $checkEmail = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
            $result = mysqli_fetch_array($checkEmail);
            $_SESSION['user'] = $result['nama'];
            $_SESSION['email'] = $result['email'];
            $_SESSION['login'] = true;
            header("Location: index.php");
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
    <title>Login</title>
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
                            echo "<p style='color: red; border: 1px solid red; border-radius: 20px;'>Password/Email yang anda masukkan salah</p>";    
                        }
                    ?>

                    <div class="input">
                        <input type="email" name="email" id="email" class="input" placeholder="Email" autocomplete="off" required>
                    </div>
                    <div class="input">
                        <input class="input" name="password" id="password" type="password" placeholder="password" required>
                    </div>
                    <input type="submit" value="Sign In" name="signin" class="submit">
                    <p class="p"> Don't have an Accoount? <a href="signuppage.php">Sign Up</a></p>
                </form>
      </div>
  </div>
  <div class="circle"></div>
</body>
</html>