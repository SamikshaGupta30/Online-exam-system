<?php
include 'db.php';

mysqli_query($conn, "INSERT INTO Result VALUES 
('".$_POST['rid']."',".$_POST['marks'].",'".$_POST['grade']."','".$_POST['aid']."')");

echo "Result Added";
?>