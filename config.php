<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Test";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Ulanishda xatolik: " . $conn->connect_error);
}
