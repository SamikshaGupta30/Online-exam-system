<?php
include 'db.php';

$name = $_POST['name'];

$result = mysqli_query($conn, "SELECT * FROM Student WHERE Name LIKE '%$name%'");

echo "<h2>Search Result</h2>";

while($row = mysqli_fetch_assoc($result)) {
    echo $row['Student_ID'] . " - " . $row['Name'] . "<br>";
}
?>