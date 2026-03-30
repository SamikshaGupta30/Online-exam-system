<?php
include 'db.php';

$query = "
SELECT s.Student_ID, s.Name, e.Title, a.Score, r.Grade
FROM Student s
JOIN Attempt a ON s.Student_ID = a.Student_ID
JOIN Exam e ON a.Exam_ID = e.Exam_ID
JOIN Result r ON a.Attempt_ID = r.Attempt_ID
";

$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
<title>Student Report</title>
<style>
body {
    font-family: Arial;
    background: linear-gradient(to right, #667eea, #764ba2);
    color: white;
    text-align: center;
}
table {
    margin: 40px auto;
    border-collapse: collapse;
    width: 80%;
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

<h1>📊 Student Exam Report</h1>

<table>
<tr>
<th>ID</th>
<th>Name</th>
<th>Exam</th>
<th>Score</th>
<th>Grade</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<td><?php echo $row['Student_ID']; ?></td>
<td><?php echo $row['Name']; ?></td>
<td><?php echo $row['Title']; ?></td>
<td><?php echo $row['Score']; ?></td>
<td><?php echo $row['Grade']; ?></td>
</tr>
<?php } ?>

</table>

<br>
<a href="index.php">⬅ Back to Home</a>

</body>
</html>