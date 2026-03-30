<!DOCTYPE html>
<html>
<head>
    <title>Online Exam System</title>
    

    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #667eea, #764ba2);
            margin: 0;
            padding: 0;
            color: #333;
        }

        .container {
            width: 400px;
            margin: 60px auto;
            background: #fff;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }

        h1 {
            text-align: center;
            color: white;
            margin-top: 30px;
        }

        h2 {
            margin-bottom: 10px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border-radius: 8px;
            border: 1px solid #ccc;
        }

        button {
            width: 100%;
            padding: 10px;
            background: #667eea;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-weight: bold;
        }

        button:hover {
            background: #5a67d8;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 15px;
            text-decoration: none;
            color: #667eea;
            font-weight: bold;
        }

        .section {
            margin-top: 20px;
        }
    </style>
</head>

<body>

<h1>Online Exam System Portal</h1>

<div class="container">

    <div class="section">
        <h2>Add Student</h2>
        <form action="insert.php" method="post">
            <input type="text" name="id" placeholder="Student ID" required>
            <input type="text" name="name" placeholder="Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="text" name="dept" placeholder="Department" required>
            <button type="submit">Add Student</button>
        </form>
    </div>

    <div class="section">
        <h2>Search Student</h2>
        <form action="search.php" method="post">
            <input type="text" name="name" placeholder="Enter name">
            <button type="submit">Search</button>
        </form>
    </div>

    <a href="view.php">📋 View All Students</a>
    <h2>Add Course</h2>
<form action="insert_course.php" method="post">
    <input type="text" name="cid" placeholder="Course ID" required>
    <input type="text" name="cname" placeholder="Course Name" required>
    <input type="number" name="credits" placeholder="Credits" required>
    <input type="number" name="semester" placeholder="Semester" required>
    <button type="submit">Add Course</button>
</form>

<h2>Add Exam</h2>
<form action="insert_exam.php" method="post">
    <input type="text" name="eid" placeholder="Exam ID" required>
    <input type="text" name="title" placeholder="Title" required>
    <input type="number" name="duration" placeholder="Duration" required>
    <input type="number" name="marks" placeholder="Total Marks" required>
    <input type="text" name="cid" placeholder="Course ID" required>
    <button type="submit">Add Exam</button>
</form>

<h2>Add Attempt</h2>
<form action="insert_attempt.php" method="post">
    <input type="text" name="aid" placeholder="Attempt ID" required>
    <input type="number" name="score" placeholder="Score" required>
    <input type="text" name="sid" placeholder="Student ID" required>
    <input type="text" name="eid" placeholder="Exam ID" required>
    <button type="submit">Add Attempt</button>
</form>

<h2>Add Result</h2>
<form action="insert_result.php" method="post">
    <input type="text" name="rid" placeholder="Result ID" required>
    <input type="number" name="marks" placeholder="Marks" required>
    <input type="text" name="grade" placeholder="Grade" required>
    <input type="text" name="aid" placeholder="Attempt ID" required>
    <button type="submit">Add Result</button>
</form>
<br><br>
<a href="view_course.php">View Courses</a><br>
<a href="view_exam.php">View Exams</a><br>
<a href="view_attempt.php">View Attempts</a><br>
<a href="view_result.php">View Results</a>
<br><br>
<a href="report.php">📊 View Full Report</a>
</div>

</body>
</html>