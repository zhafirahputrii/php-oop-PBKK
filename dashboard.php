<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$userName = $_SESSION['user_name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h2>Halo, <?php echo $userName; ?>!</h2>
    <p>Selamat datang di dashboard.</p>
    <a href="logout.php"><button>Logout</button></a>
</body>
</html>
