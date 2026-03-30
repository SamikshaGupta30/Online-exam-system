<?php
include 'db.php';
$result = mysqli_query($conn, "SELECT * FROM Result");
?>

<h2>Result List</h2>
<table border="1">
<tr>
<th>ID</th><th>Marks</th><th>Grade</th><th>Attempt</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<td><?php echo $row['Result_ID']; ?></td>
<td><?php echo $row['Marks']; ?></td>
<td><?php echo $row['Grade']; ?></td>
<td><?php echo $row['Attempt_ID']; ?></td>
</tr>
<?php } ?>
</table>