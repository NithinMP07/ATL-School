<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "login_form";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Process the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {

    $employee_id = $_POST["employee_id"];
    $college = $_POST["college"];
    $internship_start_date = $_POST["internship_start_date"];
    $internship_end_date = $_POST["internship_end_date"];
    $domain = $_POST["domain"];
    $trainer_name = $_POST["trainer_name"];
    $expense = $_POST["expense"];
    $expense_details = $_POST["expense_details"];
    $comments = $_POST["comments"];
    $requirement_component = $_POST["requirement_component"];
    $filename = $_FILES["requirement_image"]["name"];
    $folder = "uploads/" .$filename;
    $tempname = $_FILES["requirement_image"]["tmp_name"];
    move_uploaded_file($tempname,$folder);
}

// Insert data into the database
$sql = "INSERT INTO `employees`( `employee_id`, `college`, `internship_start_date`, `internship_end_date`, `domain`, `trainer_name`, `expense`, `expense_details`, `comments`, `requirement_component`, `requirement_image`) 
VALUES ( '$employee_id', '$college', '$internship_start_date', '$internship_end_date', '$domain', '$trainer_name', '$expense', ' $expense_details','$comments', '$requirement_component', '$folder')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


// Close the database connection
$conn->close();
}


?>
 <a href="logout.php">Logout</a>