<?php
include 'db.php';

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$dept = $_POST['dept'];

$sql = "INSERT INTO Student VALUES ('$id','$name','$email','$dept',2,'2004-01-01')";

if(mysqli_query($conn, $sql)){
    echo "Inserted successfully!";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>