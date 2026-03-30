<?php
include 'db.php';
$result = mysqli_query($conn, "SELECT * FROM Student");
?>

<!DOCTYPE html>
<html>
<head>
<style>
body {
    font-family: Arial;
    background: linear-gradient(to right, #667eea, #764ba2);
    text-align: center;
    color: white;
}
table {
    margin: 40px auto;
    border-collapse: collapse;
    width: 70%;
    background: white;
    color: black;
    border-radius: 10px;
    overflow: hidden;
}
th, td {
    padding: 12px;
    border: 1px solid #ddd;
}
th {
    background: #667eea;
    color: white;
}
h1 {
    margin-top: 30px;
}
a {
    color: white;
    text-decoration: none;
    font-weight: bold;
}
</style>
</head>

<body>

<h1>📋 Student List</h1>

<table>
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Dept</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<td><?php echo $row['Student_ID']; ?></td>
<td><?php echo $row['Name']; ?></td>
<td><?php echo $row['Email']; ?></td>
<td><?php echo $row['Dept']; ?></td>
</tr>
<?php } ?>

</table>

<br>
<a href="index.php">⬅ Back to Home</a>

</body>
</html>