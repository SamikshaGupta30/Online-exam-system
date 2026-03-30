<?php
include 'db.php';

mysqli_query($conn, "INSERT INTO Course VALUES 
('".$_POST['cid']."','".$_POST['cname']."',".$_POST['credits'].",".$_POST['semester'].")");

echo "Course Added";
?>