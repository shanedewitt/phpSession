<?php

// 15 minute session cookies
session_start([
    'cookie_lifetime' => 900
]);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = "admin"; // Replace with your username
    $password = "admin"; // Replace with your password

    $inputUsername = $_POST["username"];
    $inputPassword = $_POST["password"];

    if ($inputUsername === $username && $inputPassword === $password) {
        $_SESSION["login"] = true;
        header("Location: ./index.php");
        exit;
    } else {
        echo "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <form action="" method="post">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
</body>
</html>
