<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Check if the last activity timestamp is set
if (isset($_SESSION['last_activity'])) {
    // Check if more than 10 seconds have passed since the last activity
    if (time() - $_SESSION['last_activity'] > 3600) {
        // If more than 10 seconds have passed, destroy the session and redirect to login
        session_unset();    // Unset all session variables
        session_destroy();  // Destroy the session
        header("Location: login.php");
        exit();
    }
}

// Update the last activity timestamp
$_SESSION['last_activity'] = time();
?>