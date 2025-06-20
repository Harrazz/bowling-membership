<?php
$conn = new mysqli("localhost", "root", "1234", "thelanes", 3307);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
