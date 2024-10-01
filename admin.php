<?php
session_start();
if ($_SESSION['role'] != 'admin') {
    header('Location: login.html');
    exit();
}

include('db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $exam_name = $_POST['exam_name'];
    $exam_date = $_POST['exam_date'];

    $query = "INSERT INTO exams (exam_name, exam_date) VALUES ('$exam_name', '$exam_date')";
    if (mysqli_query($conn, $query)) {
        echo "Exam created successfully!";
        header('Location: admin-dashboard.php');
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
