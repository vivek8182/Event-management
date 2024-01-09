<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userType = $_POST['userType'];

    // Simulate user authentication
    if ($userType === 'user') {
        $_SESSION['user'] = true;
        header("Location: user.php");
        exit();
    } elseif ($userType === 'vendor') {
        // Handle vendor login
        // Redirect to vendor page
    } elseif ($userType === 'admin') {
        // Handle admin login
        // Redirect to admin page
    }
}
?>

