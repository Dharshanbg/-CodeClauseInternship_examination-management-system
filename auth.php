<?php
session_start();
include('db.php');

// Get username and password from POST request
$username = $_POST['username'];
$password = $_POST['password'];

// Fetch user from database
$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 1) {
    $user = mysqli_fetch_assoc($result);
    $_SESSION['username'] = $user['username'];
    $_SESSION['role'] = $user['role'];

    if ($user['role'] == 'admin') {
        header('Location: admin-dashboard.php');
    } else {
        header('Location: student-dashboard.php');
    }
} else {
    echo "Invalid login credentials.";
}
?>
