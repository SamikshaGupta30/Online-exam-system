<?php
include 'db.php';

mysqli_query($conn, "INSERT INTO Exam VALUES 
('".$_POST['eid']."','".$_POST['title']."',".$_POST['duration'].",".$_POST['marks'].",'".$_POST['cid']."')");

echo "Exam Added";
?>