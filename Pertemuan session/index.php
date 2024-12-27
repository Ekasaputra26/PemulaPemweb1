<?php
include 'config.php';
session_start();

if (isset($_SESSION['username'])){
    header("localhost: sukses_login.php");
    exit();
}

if (isset($_POST['submit'])){
    $email = mysqli_real_escape_string($conn, $POST['email']);
    $password = hash('sha256',$_POST['password']);
    $sql = "select + FROM users WHERE email='$email'AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if ($result->num_rows>0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("location: sukses_login.php");
        exit();
    }else{
        echo "<script>alert('Email atau password Anda salah. silahkan coba lagi')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.8/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>kecot abis</title>
</head>
<body>
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rcm; font-weight: 800;">login</p>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="password" name="password" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">login</button>
            </div>
            <p class="login-register-text"> Anda belum punya akun? <a href="register.php">Register</a></p>
        </form>    
    </div>
</body>
</html>