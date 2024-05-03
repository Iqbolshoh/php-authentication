<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login/");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="admin-panel">
        <h2>Welcome admin!</h2>
        <p>This is your Admin Panel.</p>
        <a href="./logout/">Exit</a>
    </div>
</body>

</html>