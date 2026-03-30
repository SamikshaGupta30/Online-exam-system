<?php
$conn = mysqli_connect("localhost", "root", "", "online_exam", 3307);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>