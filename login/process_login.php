<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "final_login";

    $connection = new mysqli($servername, $username, $password, $dbname);

    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    $atlCode = $_POST["ATL_CODE"];
    $atlPswd = $_POST["ATL_PSWD"];

    if ($atlCode === "admin" && $atlPswd === "123456") {
        $_SESSION["admin_id"] = 1; // Set an admin session variable upon successful login
        header("Location: admin_profile.php"); // Redirect to admin profile page
        exit();
    } else {
        // Invalid credentials, display an error message or redirect back to admin_login.php
        echo "Invalid username or password.";
    }

    $sql = "SELECT * FROM users WHERE ATL_CODE = '$atlCode' AND ATL_PSWD = '$atlPswd'";
    $result = $connection->query($sql);

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        $_SESSION["user_id"] = $user["id"];
        $_SESSION["ATL_CODE"] = $user["atlCode"]; // Store user ID in session
        header("Location: profile.php"); // Redirect to user's profile page
        exit();
    } else {
        echo "Invalid ATL Code or password";
    }

    $connection->close();
}
?>
