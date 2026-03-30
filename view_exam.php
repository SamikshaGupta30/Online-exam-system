<?php
include 'db.php';
$result = mysqli_query($conn, "SELECT * FROM Exam");
?>

<h2>Exam List</h2>
<table border="1">
<tr>
<th>ID</th><th>Title</th><th>Duration</th><th>Marks</th><th>Course</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<td><?php echo $row['Exam_ID']; ?></td>
<td><?php echo $row['Title']; ?></td>
<td><?php echo $row['Duration']; ?></td>
<td><?php echo $row['Total_Marks']; ?></td>
<td><?php echo $row['Course_ID']; ?></td>
</tr>
<?php } ?>
</table>