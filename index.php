<?php
session_start();

if (! isset($_SESSION["login"]) || $_SESSION["login"] !== true) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Main Page</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/script.js" defer></script>
</head>
<body>
    <h1>Welcome to the main page</h1>
    <a href="logout.php">Logout</a>
</body>
</html>

