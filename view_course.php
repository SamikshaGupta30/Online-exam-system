<?php
include 'db.php';
$result = mysqli_query($conn, "SELECT * FROM Course");
?>

<h2>Course List</h2>
<table border="1">
<tr>
<th>ID</th><th>Name</th><th>Credits</th><th>Semester</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<td><?php echo $row['Course_ID']; ?></td>
<td><?php echo $row['Course_Name']; ?></td>
<td><?php echo $row['Credits']; ?></td>
<td><?php echo $row['Semester']; ?></td>
</tr>
<?php } ?>
</table>