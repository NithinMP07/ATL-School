<?php
session_start();

if (!isset($_SESSION["admin_id"])) {
    header("Location: admin_login.php"); // Redirect admin to login page if not logged in
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_form";

$connection = new mysqli($servername, $username, $password, $dbname);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Retrieve user details and payment details for all users
$sql = "SELECT users.*, payment_details.*
        FROM users
        LEFT JOIN payment_details ON users.ATL_CODE = payment_details.atl_code";

$result = $connection->query($sql);

$all_user_details = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $all_user_details[] = $row;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Profile</title>
    <style>
        /* Your CSS styling here */
        /* Add styling for the table */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 8px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>
    <?php
    if (!empty($all_user_details)) {
        echo "<table>";
        echo "<tr>";
        echo "<th>SCHOOL NAME</th>";
        // ... Add headers for other user fields
        echo "<th>Payment Category</th>";
        // ... Add headers for other payment fields
        echo "<th>Payment Slab</th>";
        echo "<th>Date</th>";
        echo "<th>Amount</th>";
        echo "<th>Comment</th>";
        // ... Add headers for other payment fields
        echo "</tr>";

        foreach ($all_user_details as $user) {
            echo "<tr>";
            echo "<td>" . $user["SCHOOL_NAME"] . "</td>";
            // ... Display other user fields
            echo "<td>" . $user["pay_catg"] . "</td>";
            // ... Display other payment fields
            echo "<td>" . $user["pay_slab"] . "</td>";
            echo "<td>" . $user["date"] . "</td>";
            echo "<td>" . $user["amount"] . "</td>";
            echo "<td>" . $user["comment"] . "</td>";
            // ... Display other payment fields
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No data available.";
    }
    ?>

    <!-- Add the link for admin logout -->
</body>
</html>
