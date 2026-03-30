<?php
include 'db.php';

mysqli_query($conn, "INSERT INTO Attempt VALUES 
('".$_POST['aid']."',".$_POST['score'].",'".$_POST['sid']."','".$_POST['eid']."')");

echo "Attempt Added";
?>