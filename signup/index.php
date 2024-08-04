<?php
session_start();

include '../config.php';

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header("Location: ../");
    exit;
}

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = hash('sha256', $_POST['password']);

    $query = "INSERT INTO `account` (`name`, `surname`, `number`, `email`, `username`, `password`) VALUES ('$name', '$surname', '$number', '$email', '$username', '$password')";

    if ($conn->query($query) === TRUE) {
        $_SESSION['loggedin'] = true;
        header("Location: ../");
        exit;
    } else {
        $error = "Xatolik: " . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="../css/login.css">
    <link rel="icon" href="../images/favicon.ico">
</head>

<body>

    <form method="post" action="index.php">
        <h2>Sign Up</h2>
        <input type="text" name="name" placeholder="Name" required>
        <input type="text" name="surname" placeholder="Surname" required>
        <input type="text" name="number" placeholder="Number" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" name="submit" value="Submit">
        <p>Already have an account? <a href="../login/">Log in</a></p>
    </form>

</body>

</html>