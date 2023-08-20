
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registration detail</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .table-container {
            width: 90%;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border: 2px solid black;
        }

        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid black;
        }

        th {
            background-color: black;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
    </style>
</head>

<body>
<div class="table-container">
    <table align="center" border="3" cellspacing="7" style="width:100%; float:center;">
        <tr style="background-color:black; color:white;">
            <th>ID</th>
            <th>SCHOOL_NAME</th>
            <th>ATL_CODE</th>
            <th>ATL_PSWD</th>
            <th>DASHBRD_PSWD</th>
            <th>GEM_CODE</th>
            <th>GEM_PSWD</th>
            <th>Reg_Email</th>
            <th>Reg_Phone</th>
            <th>Bharathkosh</th>
            <th>BkoshPswd</th>
            <th>Sanction_no</th>
            <th>Govt_Email</th>
            <th>Govt_Mail_PSWD</th>
            <th>UDISE</th>
            <th>Fund_date</th>
            <th>Inaugeration_date</th>
            <th>PFMS</th>
            <th>PFMS_AP</th>
            <th>PFMS_PSWD</th>
            <th>PFMS_OP</th>
            <th>OP_PSWD</th>
            <th>AP_PSWD</th>
            <th>Principle_Name</th>
            <th>Principal_Phone</th>
            <th>ATL_In</th>
            <th>ATL_Phone</th>
            <th>Payment</th>
            

        </tr>
</div>

        <?php
        
        
       
        session_start();

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "final_login";

        $connection = new mysqli($servername, $username, $password, $dbname);

        if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
        }

        $query = "SELECT * FROM users";
        $data = $connection->query($query);

        if ($data->num_rows > 0) {
            while ($result = $data->fetch_assoc()) {
                echo "
                <tr>
                    <td>" . $result['id'] . "</td>
                    <td>" . $result['SCHOOL_NAME'] . "</td>
                    <td>" . $result['ATL_CODE'] . "</td>
                    <td>" . $result['ATL_PSWD'] . "</td>
                    <td>" . (isset($result['DASHBRD_PSWRD']) ? $result['DASHBRD_PSWRD'] : "") . "</td>
                    <td>" . (isset($result['GEM_CODE']) ? $result['GEM_CODE'] : "") . "</td>
                    <td>" . (isset($result['GEM_PSWD']) ? $result['GEM_PSWD'] : "") . "</td>
                    <td>" . (isset($result['Reg_Email']) ? $result['Reg_Email'] : "") . "</td>
                    <td>" . (isset($result['Reg_PhOne']) ? $result['Reg_PhOne'] : "") . "</td>
                    <td>" . (isset($result['Bharathkosh']) ? $result['Bharathkosh'] : "") . "</td>
                    <td>" . (isset($result['BkoshPSWD']) ? $result['BkoshPSWD'] : "") . "</td>
                    <td>" . (isset($result['Sanction_no']) ? $result['Sanction_no'] : "") . "</td>
                    <td>" . (isset($result['Govt_Email']) ? $result['Govt_Email'] : "") . "</td>
                    <td>" . (isset($result['Govt_Mail_PSWD']) ? $result['Govt_Mail_PSWD'] : "") . "</td>
                    <td>" . (isset($result['UDISE']) ? $result['UDISE'] : "") . "</td>
                    <td>" . (isset($result['Fund_Date']) ? $result['Fund_Date'] : "") . "</td>
                    <td>" . (isset($result['Inaugeration_date']) ? $result['Inaugeration_date'] : "") . "</td>
                    <td>" . (isset($result['PFMS']) ? $result['PFMS'] : "") . "</td>
                    <td>" . (isset($result['PFMS_AP']) ? $result['PFMS_AP'] : "") . "</td>
                    <td>" . (isset($result['PFMS_PSWD']) ? $result['PFMS_PSWD'] : "") . "</td>
                    <td>" . (isset($result['PFMS_OP']) ? $result['PFMS_OP'] : "") . "</td>
                    <td>" . (isset($result['OP_PSWD']) ? $result['OP_PSWD'] : "") . "</td>
                    <td>" . (isset($result['AP_PSWD']) ? $result['AP_PSWD'] : "") . "</td>
                    <td>" . (isset($result['Principal_Name']) ? $result['Principal_Name'] : "") . "</td>
                    <td>" . (isset($result['Principal_Phone']) ? $result['Principal_Phone'] : "") . "</td>
                    <td>" . (isset($result['ATL_In']) ? $result['ATL_In'] : "") . "</td>
                    <td>" . (isset($result['ATL_Phone']) ? $result['ATL_Phone'] : "") . "</td>
                    <td><button>Payment Details</button></td>

                </tr>";
            }
        } else {
            echo "<tr><td colspan='28' style='text-align: center;'>No records found</td></tr>";
        }

        $connection->close();
        ?>
    </table>
</body>

</html>
