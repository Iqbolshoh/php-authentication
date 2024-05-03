<?php
session_start();

include '../config.php';

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header("Location: ../");
    exit;
}

if (isset($_POST['submit'])) {
    $input_username = $_POST['username'];
    $input_password = hash('sha256', $_POST['password']);

    $query = "SELECT * FROM account WHERE username='$input_username' AND password='$input_password'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $_SESSION['loggedin'] = true;
        header("Location: ../");
        exit;
    } else {
        $error = "The login or password is incorrect";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/login.css">
    <style>
        @keyframes fadeInOut {
            0% {
                opacity: 0;
                transform: translateY(-20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .error {
            animation: fadeInOut 0.5s ease forwards;
        }
    </style>
</head>

<body>
    <?php if (isset($error)) : ?><p class="error"><?php echo $error; ?></p><?php endif; ?>

    <form method="post" action="index.php">
        <h2>Login</h2>
        <input type="text" name="username" placeholder="Login" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" name="submit" value="Submit">
        <p>Don't have an account? <a href="../signup/">Sign up</a></p>
    </form>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(function() {
                var errorElement = document.querySelector('.error');
                if (errorElement) {
                    errorElement.remove();
                }
            }, 3000);
        });
    </script>
</body>

</html>