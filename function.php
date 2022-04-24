<?php  
$conn = mysqli_connect("sql311.epizy.com","epiz_31422852","5A9J85fffY8S9v","epiz_31422852_ingfokanpkl");

if(!$conn){
    die("connection failed: " + mysqli_connect_error());
}

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_array($result)){
        $rows[] = $row;
    }
    return $rows;
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function signup($method) {
    global $conn;

    $name = test_input($method["name"]);
    $email = test_input($method["email"]);
    $password = mysqli_real_escape_string($conn, $method["password"]);
    $password2 = mysqli_real_escape_string($conn, $method["password2"]);

    $checkEmail = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
        
    if(mysqli_num_rows($checkEmail) > 0) {
        return false;
    } 

    if ($password === $password2) {
        $password = password_hash($password, PASSWORD_DEFAULT);
    
        $query = "INSERT INTO users(id, nama, email, password) VALUES ('','$name', '$email', '$password')";
        $result = mysqli_query($conn, $query);
    
        return mysqli_affected_rows($conn);
    }

}

function signin($method) {
    global $conn;

    $email = $method['email'];
    $password =$method['password'];

    $query = "SELECT * FROM users WHERE email = '$email' ";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);

    if(mysqli_num_rows($result) > 0) {
        if($password_verify = password_verify($password, $row['password'])) {
            return mysqli_affected_rows($conn);
        } 
    }
}

function cari($keyword){
    $result = query("SELECT * FROM jobs WHERE judul LIKE '%$keyword%' ");
    return $result;
}

function updateData($method){
    global $conn;
    $nama = $method["nama"];
    $email = $method["email"];
    $sekolah = $method["sekolah"];
    $programKeahlian = $method["program-keahlian"];
    $domisili = $method["domisili"];
    $deskripsi = $method["deskripsi"];
    

    $query = "UPDATE users SET 
    nama = '$nama',  
    email = '$email',
    sekolah = '$sekolah',
    program_keahlian = '$programKeahlian',
    domisili = '$domisili',
    deskripsi= '$deskripsi'
    WHERE email = '$email'";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


?>