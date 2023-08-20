<?php
session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
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

$user_id = $_SESSION["user_id"];
 // Assuming $user["ATL_CODE"] holds the ATL_CODE value


// Fetch user details
$sql_user = "SELECT * FROM users WHERE id = '$user_id'";
$result_user = $connection->query($sql_user);

if ($result_user->num_rows == 1) {
    $user = $result_user->fetch_assoc();
    $_SESSION["ATL_CODE"] = $user["ATL_CODE"]; 
} else {
    echo "User not found";
    exit();
}

// Fetch payment details based on ATL code
$atl_code = $user["ATL_CODE"];
$sql_payment = "SELECT * FROM payment_details WHERE ATL_CODE = '$atl_code'";
$result_payment = $connection->query($sql_payment);

$payment_details = [];
if ($result_payment->num_rows > 0) {
    while ($row = $result_payment->fetch_assoc()) {
        $payment_details[] = $row;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
    <style>
         * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body, html {
            height: 100%;
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            
        }

        .profile-card {
            max-width: 800px;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            font-size: 28px;
            color: #004080;
            margin-bottom: 20px;
        }

        .input-box {
            padding: 15px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        .input-box label {
            font-weight: bold;
        }

        .input-box p {
            margin-top: 5px;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            color: #004080;
            font-weight: bold;
        }

        a:hover {
            color: #002266;
        }
    </style>
</head>
<body>
    <div class="F1">
        <h2>Profile</h2>
        <div class="content">
            <div class="input-box">
                <label for="SCHOOL_NAME"><b>SCHOOL NAME</b></label>
                <p><?php echo $user["SCHOOL_NAME"]; ?></p>
            </div>
            <div class="input-box">
                <label for="Sanction_no"><b>Sanction No</b></label>
                <p><?php echo $user["Sanction_no"]; ?></p>
            </div>
            <div class="input-box">
                <label for="UDISE"><b>UDISE</b></label>
                <p><?php echo $user["UDISE"]; ?></p>
            </div>
            <div class="input-box">
                <label for="Fund_Date"><b>Fund Date</b></label>
                <p><?php echo $user["Fund_Date"]; ?></p>
            </div>
            <div class="input-box">
                <label for="Inaugeration_date"><b>Inauguration Date</b></label>
                <p><?php echo $user["Inaugeration_date"]; ?></p>
            </div>
            <div class="input-box">
                <label for="Principal_Name"><b>Principal Name</b></label>
                <p><?php echo $user["Principal_Name"]; ?></p>
            </div>
            <div class="input-box">
                <label for="Principal_Phone"><b>Principal Phone</b></label>
                <p><?php echo $user["Principal_Phone"]; ?></p>
            </div>
            <div class="input-box">
                <label for="ATL_CODE"><b>ATL Code</b></label>
                <p><?php echo $user["ATL_CODE"]; ?></p>
            </div>
            <div class="input-box">
                <label for="ATL_PSWD"><b>ATL Password</b></label>
                <p><?php echo $user["ATL_PSWD"]; ?></p>
            </div>
            <div class="input-box">
                <label for="GEM_CODE"><b>GEM Code</b></label>
                <p><?php echo $user["GEM_CODE"]; ?></p>
            </div>
            <div class="input-box">
                <label for="Govt_Email"><b>Government Email</b></label>
                <p><?php echo $user["Govt_Email"]; ?></p>
            </div>
            <div class="input-box">
                <label for="PFMS"><b>PFMS</b></label>
                <p><?php echo $user["PFMS"]; ?></p>
            </div>
            <div class="input-box">
                <label for="PFMS_OP"><b>PFMS OP</b></label>
                <p><?php echo $user["PFMS_OP"]; ?></p>
            </div>
            <div class="input-box">
                <label for="ATL_In"><b>ATL Incharge</b></label>
                <p><?php echo $user["ATL_In"]; ?></p>
            </div>
            <div class="input-box">
                <label for="ATL_Phone"><b>ATL Incharge Phone</b></label>
                <p><?php echo $user["ATL_Phone"]; ?></p>
            </div>
            <div class="input-box">
                <label for="PFMS_AP"><b>PFMS AP</b></label>
                <p><?php echo $user["PFMS_AP"]; ?></p>
            </div>
            <div class="input-box">
                <label for="DASHBRD_PSWRD"><b>Dashboard Password</b></label>
                <p><?php echo $user["DASHBRD_PSWRD"]; ?></p>
            </div>
            <div class="input-box">
                <label for="GEM_PSWD"><b>GEM Password</b></label>
                <p><?php echo $user["GEM_PSWD"]; ?></p>
            </div>
            <div class="input-box">
                <label for="Govt_Mail_PSWD"><b>Government Mail Password</b></label>
                <p><?php echo $user["Govt_Mail_PSWD"]; ?></p>
            </div>
            <div class="input-box">
                <label for="PFMS_PSWD"><b>PFMS Password</b></label>
                <p><?php echo $user["PFMS_PSWD"]; ?></p>
            </div>
            <div class="input-box">
                <label for="OP_PSWD"><b>OP Password</b></label>
                <p><?php echo $user["OP_PSWD"]; ?></p>
            </div>
            <div class="input-box">
                <label for="AP_PSWD"><b>AP Password</b></label>
                <p><?php echo $user["AP_PSWD"]; ?></p>
            </div>
            <div class="input-box">
                <label for="Reg_Email"><b>Registration Email</b></label>
                <p><?php echo $user["Reg_Email"]; ?></p>
            </div>
            <div class="input-box">
                <label for="Reg_PhOne"><b>Registration Phone</b></label>
                <p><?php echo $user["Reg_PhOne"]; ?></p>
            </div>
            <div class="input-box">
                <label for="Bharathkosh"><b>Bharathkosh</b></label>
                <p><?php echo $user["Bharathkosh"]; ?></p>
            </div>
            <div class="input-box">
                <label for="BkoshPSWD"><b>Bharathkosh Password</b></label>
                <p><?php echo $user["BkoshPSWD"]; ?></p>
            </div>
        </div>
    

    </div>
    <?php
    if (!empty($payment_details)) {
        foreach ($payment_details as $payment) {
            echo "<div class='input-box'>";
            echo "<label for='Pay_catg'><b>Payment Category</b></label>";
            echo "<p>" . $payment["pay_catg"] . "</p>";
    
            echo "<label for='Pay_slab'><b>Payment Slab</b></label>";
            echo "<p>" . $payment["pay_slab"] . "</p>";
    
            echo "<label for='Date'><b>Date</b></label>";
            echo "<p>" . $payment["date"] . "</p>";
    
            echo "<label for='Amount'><b>Amount</b></label>";
            echo "<p>" . $payment["amount"] . "</p>";
    
            echo "<label for='Comment'><b>Comment</b></label>";
            echo "<p>" . $payment["comment"] . "</p>";

            echo "<label for='File'><b>File</b></label>";
            echo "<p>" . $payment["file"] . "</p>";
    
            
            echo "<label for='Vendor'><b>Vendor</b></label>";
            echo "<p>" . $payment["vendor"] . "</p>";
    
            echo "<label for='Pay_type'><b>Payment Type</b></label>";
            echo "<p>" . $payment["pay_type"] . "</p>";
    
            echo "<label for='Ref_no'><b>Reference No.</b></label>";
            echo "<p>" . $payment["ref_no"] . "</p>";
    
            echo "<label for='PFMS'><b>PFMS</b></label>";
            echo "<p>" . $payment["pfms"] . "</p>";
    
            
            echo "</div>";
        }
    }
    ?>
            <a href="edit_profile.php">Edit Profile</a>
        <a href="logout.php">Logout</a>
        <a href="previous_payment.php">Previous Payment</a>

    
</body>
</html>

