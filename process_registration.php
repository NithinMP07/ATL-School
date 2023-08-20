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

    $schoolName = $_POST["SCHOOL_NAME"];
    $sanctionNo = $_POST["Sanction_no"];
    $udise = $_POST["UDISE"];
    $fundDate = $_POST["Fund_Date"];
    $inaugrationDate = $_POST["Inaugeration_date"];
    $principalName = $_POST["Principal_Name"];
    $principalPhone = $_POST["Principal_Phone"];
    $atlCode = $_POST["ATL_CODE"];
    $atlPswd = $_POST["ATL_PSWD"];
    $gemCode = $_POST["GEM_CODE"];
    $govtEmail = $_POST["Govt_Email"];
    $pfms = $_POST["PFMS"];
    $pfmsOp = $_POST["PFMS_OP"];
    $atlIncharge = $_POST["ATL_In"];
    $atlInchargePhone = $_POST["ATL_Phone"];
    $pfmsAp = $_POST["PFMS_AP"];
    $dashbrdPswd = $_POST["DASHBRD_PSWRD"];
    $gemPswd = $_POST["GEM_PSWD"];
    $govtMailPswd = $_POST["Govt_Mail_PSWD"];
    $pfmsPswd = $_POST["PFMS_PSWD"];
    $opPswd = $_POST["OP_PSWD"];
    $apPswd = $_POST["AP_PSWD"];
    $regEmail = $_POST["Reg_Email"];
    $regPhone = $_POST["Reg_PhOne"];
    $bharathkosh = $_POST["Bharathkosh"];
    $bkoshPswd = $_POST["BkoshPSWD"];

    $sql = "INSERT INTO users (
        SCHOOL_NAME, Sanction_no, UDISE, Fund_Date, Inaugeration_date, Principal_Name, Principal_Phone,
        ATL_CODE, ATL_PSWD, GEM_CODE, Govt_Email, PFMS, PFMS_OP, ATL_In, ATL_Phone, PFMS_AP, DASHBRD_PSWRD,
        GEM_PSWD, Govt_Mail_PSWD, PFMS_PSWD, OP_PSWD, AP_PSWD, Reg_Email, Reg_PhOne, Bharathkosh, BkoshPSWD
    ) VALUES (
        '$schoolName', '$sanctionNo', '$udise', '$fundDate', '$inaugrationDate', '$principalName', '$principalPhone',
        '$atlCode', '$atlPswd', '$gemCode', '$govtEmail', '$pfms', '$pfmsOp', '$atlIncharge', '$atlInchargePhone',
        '$pfmsAp', '$dashbrdPswd', '$gemPswd', '$govtMailPswd', '$pfmsPswd', '$opPswd', '$apPswd', '$regEmail',
        '$regPhone', '$bharathkosh', '$bkoshPswd'
    )";

    if ($connection->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }

    $connection->close();
    header("Location: payment.php");
    exit();
}
?>
