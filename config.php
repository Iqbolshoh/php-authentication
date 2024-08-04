<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Test";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection error: " . $conn->connect_error);
}
