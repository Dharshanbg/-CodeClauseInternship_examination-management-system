<?php
session_start();
if ($_SESSION['role'] != 'admin') {
    header('Location: login.html');
    exit();
}
include('db.php');

// Fetch all exams
$query = "SELECT * FROM exams";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Admin Dashboard</h1>
    <h2>Create New Exam</h2>
    <form action="admin.php" method="POST">
        <input type="text" name="exam_name" placeholder="Exam Name" required>
        <input type="date" name="exam_date" required>
        <button type="submit">Create Exam</button>
    </form>

    <h2>Exams List</h2>
    <ul>
        <?php while ($exam = mysqli_fetch_assoc($result)) { ?>
            <li><?php echo $exam['exam_name'] . " - " . $exam['exam_date']; ?></li>
        <?php } ?>
    </ul>
</body>
</html>
