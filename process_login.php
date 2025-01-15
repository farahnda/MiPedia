<?php
session_start();
require_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $password = $_POST['password'];
    
    $errors = [];

    if (empty($username)) {
        $errors[] = "Username wajib diisi";
    }
    if (empty($password)) {
        $errors[] = "Password wajib diisi";
    }

    if (empty($errors)) {
        $sql = "SELECT * FROM users WHERE username = '$username'";
        $result = mysqli_query($koneksi, $sql);

        if (mysqli_num_rows($result) == 1) {
            $user = mysqli_fetch_assoc($result);
            
            if (password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['email'] = $user['email'];
                
                $update_login = "UPDATE users SET last_login = NOW() WHERE id = " . $user['id'];
                mysqli_query($koneksi, $update_login);

                header("Location: index.php");
                exit();
            } else {
                $_SESSION['error'] = "Password salah!";
                header("Location: login.php");
                exit();
            }
        } else {
            $_SESSION['error'] = "Username tidak ditemukan!";
            header("Location: login.php");
            exit();
        }
    } else {
        $_SESSION['errors'] = $errors;
        header("Location: login.php");
        exit();
    }
}
mysqli_close($koneksi);
?>