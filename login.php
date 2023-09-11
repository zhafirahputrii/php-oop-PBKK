<?php
session_start();

if (isset($_SESSION['user_id'])) {
    header("Location: dashboard.php"); 
//langsung menuju halaman dashboard apabila telah login
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
//mengambil data yang diinput pada field username dan password

    $users = [
        'pia' => ['password' => 'piacantik', 'name' => 'Pia'],
        'username' => ['password' => 'password', 'name' => 'Kamu'],
    ];
//menyimpan data dari user dalam bentuk array

    if (isset($users[$username]) && $users[$username]['password'] == $password) {
//memeriksa apakah username dan password yang diinput user cocok dengan username dan password yang telah tersimpan

        $_SESSION['user_id'] = $username;
        $_SESSION['user_name'] = $users[$username]['name'];
        header("Location: dashboard.php");
//menyimpan objek dan mengarahkan user ke halaman isi atau dashboard setelah berhasil login
        exit();
//menghentikan eksekusi setelah user beralih ke halaman dashboard
    } else {
        $error = "Username atau password salah!";
    }
//kondisi if tidak benar, yaitu pencocokan username dan password gagal, sehingga dijalankan perintah else yaitu error
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="POST" action="">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" required><br><br>
        <a href="dashboard.php"><button>Login</button></a>
    </form>
    <?php if (isset($error)) { ?>
        <p><?php echo $error; ?></p>
    <?php } ?>
</body>
</html>
