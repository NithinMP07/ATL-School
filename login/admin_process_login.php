<?php
session_start();

$admin_username = $_POST["admin_username"];
$admin_password = $_POST["admin_password"];

// Validate admin credentials here (e.g., compare against a stored admin username and password)

if ($admin_username === "admin" && $admin_password === "123456") {
    $_SESSION["admin_id"] = 1; // Set an admin session variable upon successful login
    header("Location: admin_profile.php"); // Redirect to admin profile page
    exit();
} else {
    // Invalid credentials, display an error message or redirect back to admin_login.php
    echo "Invalid username or password.";
}
?>
