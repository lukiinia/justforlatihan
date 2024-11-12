<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = md5($_POST['password']); // Menggunakan MD5 untuk hashing password
    $role = 'user'; // Default role untuk registrasi adalah user

    $query = "INSERT INTO users (username, password, role) VALUES ('$username', '$password', '$role')";
    if (mysqli_query($conn, $query)) {
        echo "Registrasi berhasil. Silakan login.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Register</title>
</head>
<body>
<div class="container mt-5">
    <h2>Register</h2>
    <form action="register.php" method="POST">
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
</div>
</body>
</html>
