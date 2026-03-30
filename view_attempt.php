<?php
include 'db.php';
$result = mysqli_query($conn, "SELECT * FROM Attempt");
?>

<h2>Attempt List</h2>
<table border="1">
<tr>
<th>ID</th><th>Score</th><th>Student</th><th>Exam</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<td><?php echo $row['Attempt_ID']; ?></td>
<td><?php echo $row['Score']; ?></td>
<td><?php echo $row['Student_ID']; ?></td>
<td><?php echo $row['Exam_ID']; ?></td>
</tr>
<?php } ?>
</table>