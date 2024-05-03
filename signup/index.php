<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="cache-control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="expires" content="0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="../css/signup.css">
</head>

<body>
    <div class="signup-container">
        <h2>Sign up</h2>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            include '../config.php';

            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $number = $_POST['number'];
            $email = $_POST['email'];
            $username = $_POST['username'];
            $password = hash('sha256', $_POST['password']);

            $insert_query = "INSERT INTO `account` (`name`, `surname`, `number`, `email`, `username`, `password`) VALUES ('$name', '$surname', '$number', '$email', '$username', '$password')";

            if ($conn->query($insert_query) === TRUE) {
                $message = "Reference added successfully";
            }

            $conn->close();

            echo "<p class='message'>$message</p>";
        }
        ?>

        <form action="" method="post">
            <input type="text" name="name" placeholder="Name" required>
            <input type="text" name="surname" placeholder="Surname" required>
            <input type="text" name="number" placeholder="Phone number" required>
            <input type="email" name="email" placeholder="E-mail" required>
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="Sign up">
            <p>Do you have an account? <a href="../login/">Login</a></p>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var messageElement = document.querySelector('.message');
            if (messageElement) {
                messageElement.style.display = 'block';
                setTimeout(function() {
                    messageElement.style.display = 'none';
                }, 3000);
            }
        });
    </script>
</body>

</html>