<?php
session_start();
if ($_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Admin Page</title>
</head>
<body>
<div class="container mt-5">
    <h2>Welcome to Admin Page</h2>
    <p>Selamat datang di halaman admin, <?php echo $_SESSION['username']; ?></p>
    <a href="logout.php" class="btn btn-danger">Logout</a>
</div>
</body>
</html>
