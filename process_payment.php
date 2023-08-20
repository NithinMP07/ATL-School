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
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    // Get the payment details from the form
    $atlCode = $_POST["ATL_CODE"];
    $payCatg = $_POST["pay_catg"];
    $paySlab = $_POST["pay_slab"];
    $date = $_POST["date"];
    $amount = $_POST["amount"];
    $comment = $_POST["comment"];

    $filename = $_FILES["file"]["name"];
    $folder = "images/".$filename;
    $tempname = $_FILES["file"]["tmp_name"];

    move_uploaded_file($tempname, $folder);
    $vendor = $_POST["vendor"];
    $payType = $_POST["pay_type"];
    $refNo = $_POST["ref_no"];
    $pfms = $_POST["pfms"];
    

    
    // Insert the payment details into the database
    $sql = "INSERT INTO payment_details ( ATL_CODE, pay_catg, pay_slab, date, amount, comment, file, vendor, pay_type, ref_no, pfms)
            VALUES ('$atlCode', '$payCatg', '$paySlab', '$date', '$amount', '$comment', '$folder', '$vendor', '$payType', '$refNo', '$pfms')";

    if ($connection->query($sql) === TRUE) {
        echo "Payment details submitted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }
    
    $connection->close();
    header("Location: thanks.html");
    exit();
}
?>
