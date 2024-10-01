<?php
session_start();
if ($_SESSION['role'] != 'student') {
    header('Location: login.html');
    exit();
}

include('db.php');

// Fetch student exams
$query = "SELECT * FROM exams";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Student Dashboard</h1>
    <h2>Available Exams</h2>
    <ul>
        <?php while ($exam = mysqli_fetch_assoc($result)) { ?>
            <li><?php echo $exam['exam_name'] . " - " . $exam['exam_date']; ?></li>
        <?php } ?>
    </ul>

    <h2>Download Hall Ticket</h2>
    <a href="hallticket.php" download>Download PDF</a>
</body>
</html>
