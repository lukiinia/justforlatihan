<?php
session_start();
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = md5($_POST['password']); // Menggunakan MD5 untuk hashing password input

    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);
        
        // Simpan informasi pengguna dalam sesi
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = $user['role'];

        // Arahkan pengguna berdasarkan peran
        if ($user['role'] == 'admin') {
            header("Location: landadmin.php");
        } else {
            header("Location: landuser.php");
        }
        exit;
    } else {
        echo "Username atau password salah";
    }
}
?>
