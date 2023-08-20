<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "login_form";

    $connection = new mysqli($servername, $username, $password, $dbname);

    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    $task_number = $_POST["task_number"];
    $Employee = $_POST["employee_id"];
    $Tasks = $_POST["task_description"];
    $DUE_DATE = $_POST["due_date"];
    $Statuss = $_POST["Statuss"];
    $PRIORITY = $_POST["priority"];
   
    $sql = "INSERT INTO `tasks` (
       task_number, employee_id, task_description, due_date, Statuss, priority) VALUES (
        '$task_number', '$Employee', '$Tasks', '$DUE_DATE', '$Statuss', '$PRIORITY')";

    if ($connection->query($sql) === TRUE) {
       // echo "<script>alert('Redirect to admin page->')</script>";
        ?>
        <META HTTP-EQUIV="Refresh" CONTENT ="0; URL=http://localhost/sparsha/login/admin_profile.php">
        <?php
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }

    $connection->close();
    // header("Location: payment.php");
    exit();
}
?>
