<?php  
require "function.php";
session_start();

$email = $_GET['email'];

$datas = query("SELECT * FROM users WHERE email = '$email'");

if(isset($_POST["submit"])){
    if(updateData($_POST) > 0){
        echo "<script>alert('data berhasil diubah')";
        header("Location:index.php");
    } else {
        echo "<script>alert('data gagal diubah')</script>";
    }
} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="css/style-users.css">
    <title>Users</title>
</head>
<body>
    <header id="header">
        <a href="index.php" class="logo">IngfokanPKL</a>
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
    
        <div id="container-profiles">
    
            <div id="container-profile">
          
                <div id="profile">
                    <img class="foto-profile" src="foto/profile.png" alt="">
                    <h3><?= $_SESSION['user'] ?></h3>
                </div>
           
                <div id="select-profile">
                    <div class="select1">
                        <img src="foto/berkas.png" alt="">
                        <a href="" id="berkas" >Berkas</a>
                    </div>
                    <div class="select2">
                        <img src="foto/setting.png" alt="">
                        <a href="" id="setting">Setting</a>
                    </div>
                    <a href="logout.php" class="logout" >Log Out</a>
                </div>

            </div>

            <div id="container-edit-profile">
                
                <div id="form">

                    <div id="title-edit">
                        <h1>Edit Profile</h1>
                    </div>

                    <div id="edit-profile">
                        <form action="" method="POST">
                            <?php foreach($datas as $data): ?>
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" id="nama" value="<?= $data['nama'] ?>">

                            <label class="email" for="email">Email</label>
                            <input type="email" class="email" name="email" id="email" readonly value="<?= $data['email'] ?>">

                            <label for="sekolah">Sekolah</label>
                            <input type="text" name="sekolah" id="sekolah" value="<?= $data['sekolah'] ?>">

                            <label for="program-keahlian">Program keahlian</label>
                            <input type="text" name="program-keahlian" id="program-keahlian" value="<?= $data['program_keahlian'] ?>">

                            <label for="domisili">Domisili</label>
                            <input type="text" name="domisili" id="domisili" value="<?= $data['domisili'] ?>">

                            <label for="deskripsi">Deskripsi</label>
                            <textarea name="deskripsi" id="deskripsi" ><?= $data['deskripsi'] ?></textarea>
                            <?php endforeach; ?>
                            
                            <input type="submit" value="Simpan Profile" id="submit" name="submit">
                        </form>
                    </div>

                </div>

                <div id="dashboard">

                    <div id="porto">
                        <h1>Portofolio</h1>
                    </div>

                    <div id="container-porto">
                        <div class="container-porto2">
                            <h4>Fullstack Web</h4>
                            <p>Pembuatan Web Dinamis menggunakan MERN stack</p>
                            <img src="foto/Rectangle.png" alt="">
                        </div>
                        <button class="button-resume">Manage Portofolio</button>  
                    </div>

                    <div id="resume">
                        <h1>Resume/CV</h1>
                    </div>

                    <div id="container-resume">
                        <div id="cv">
                            <img src="foto/resume.png" alt="">
                        </div>
                        <button class="button-resume">Manage Resume</button>    
                    </div>
                    
                </div>

            </div>
            
        </div>
    </main>


    <script src="js/scripts-jobs.js"></script>
</body>
</html>
