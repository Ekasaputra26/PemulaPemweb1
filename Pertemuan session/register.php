<?php
include 'config.php';
session_start();

if (isset($_SESSION['username'])){
    header("location: index.php");
    exit();
}
if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = hash('sha256', $_POST['password']);
    $cpassword = hash('sha256' ,$_POST['cpassword']);

    if ($password == $cpassword){
        $sql = "SELECT + FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows>0){
            $sql = "INSERT INTO users (username, email, password)
                    VALUES ('$username', '$email', '$password')";
            $result = mysqli_query($conn, $sql);
            if (result){
                echo "<script>alert('selamat, registrasi berhasil!')</script>";
                $username ="";
                $email ="";
                $_POST['password']="";
                $_POST['cpassword']="";
            }else {
                echo "<script>alert('woops! terjadi kesalahan.')</script>";
            }
        }else {
            echo "<script>alert('woops! email sudah terdaftar.')</script>";
        }
    }else {
        echo "<script>alert('password tidk sesuai.')</script>";
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
    <title>mahasiswa register</title>
</head>
<body>
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
            <div class="input-group">
                <input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
            </div>
            <div class="input-group">
                <input type="email" placeholder="email" name="email" value="<?php echo $email; ?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" value="<?php echo $POST; ?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Confirm password" name="cpassword" value="<?php echo $POST['cpassword']; ?>" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Register</button>
            </div>
            <p class="login-register-text">Anda sudah punya akun? <a href="index.php">login</a></p>
        </form>
    </div>
</body>
</html>