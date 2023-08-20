<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign up</title>
<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body, html {
  height: 100%;
  background-color: #f7f7f7;
  font-family: Arial, sans-serif;
}

.F1 {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  height: 100%;
}

h2 {
  margin-top: 20px;
  text-align: center;
  font-size: 28px;
  color: #004080; 
}

.content {
  display: grid;
  grid-template-columns: repeat(2, 1fr); 
  gap: 20px;
  max-width: 800px; 
  padding: 30px;
  background-color: #ffffff;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
}


.input-box {
  padding: 20px;
  font-size: 18px;
  border: 1px solid #ccc;
  border-radius: 4px;
}


input[type=submit] {
  width: 100%;
  padding: 12px;
  background-color: #004080;
  border: none;
  color: #ffffff; 
  font-size: 16px;
  font-weight: bold;
  cursor: pointer;
  transition: background-color 0.3s ease;
  border-radius: 4px;
}

input[type=submit]:hover {
  background-color: #003366; 
  /* Darker blue on hover */
}
.button{
  width:205%;
}

/* Adjust the margin for text content */
#text {
  margin: 15px 0;
  text-align: center;
  color: #666666; 
  font-weight:bold;/* Gray text color */
}
</style>
</head>
<body>
<div class="main">

  <div class="F1">
    <h2>Registration</h2> 
    <form action="process_registration.php" method="POST">

      <div class="content">
        <div class="input-box">
          <label for="School_name"><b>SCHOOL NAME</b></label>
          <input type="text" id="School name" name="SCHOOL_NAME" required>
        </div>
        <div class="input-box">
          <label for="Sanction_no"><b>Sanction no</b></label>
          <input type="number" id="Sanction no" name="Sanction_no" required>
        </div>
        <div class="input-box">
          <label for="UDISE"><b>UDISE</b></label>
          <input type="text" id="UDISE" name="UDISE" required>
        </div>
        <div class="input-box">
          <label for="Fund_Date"><b>Fund Date</b></label>
          <input type="date" id="Fund Date" name="Fund_Date" required>
        </div>
        <div class="input-box">
          <label for="Inaugration_date"><b>Inaugration Date</b></label>
          <input type="date" id="Inaugration date" name="Inaugeration_date" required>
        </div>
        <div class="input-box">
          <label for="Principal Name & Phone"><b>Principal Name & Phone</b></label>
          <input type="text" id="Principal Name & Phone" name="Principal_Name" placeholder="Name"required><br>
          <input type="num" id="Principal Name & Phone" name="Principal_Phone" placeholder="Number"required>

        </div>
        <div class="input-box">
          <label for="ATL_CODE"><b>ATL CODE</b></label>
          <input type="text" id="ATL code" name="ATL_CODE" required>
        </div>
        <div class="input-box">
          <label for="ATL_PSWD"><b>ATL PSWD</b></label>
          <input type="password" id="ATL PSWD" name="ATL_PSWD" required>
        </div>
        <div class="input-box">
          <label for="GEM code"><b>GEM CODE</b></label>
          <input type="text" id="GEM code" name="GEM_CODE" required>
        </div>
        <div class="input-box">
          <label for="Govt_Email"><b>Govt Email</b></label>
          <input type="email" id="Govt Email" name="Govt_Email" required>
        </div>
        <div class="input-box">
          <label for="PFMS"><b>PFMS</b></label>
          <input type="text" id="PFMS" name="PFMS" required>
        </div>
        <div class="input-box">
          <label for="PFMS OP"><b>PFMS OP</b></label>
          <input type="text" id="PFMS OP" name="PFMS_OP" required>
        </div>

        <div class="input-box">
          <label for="ATL Incharge & Phone"><b>ATL Incharge & Phone</b></label>
          <input type="text" id="ATL Incharge & Phone" name="ATL_In"placeholder="Name" required><br>
          <input type="text" id="ATL Incharge & Phone" name="ATL_Phone" placeholder="Number" required>
        </div>
        <div class="input-box">
          <label for="PFMS_AP"><b>PFMS AP</b></label>
          <input type="text" id="PFMS AP" name="PFMS_AP" required>
        </div>
        <div class="input-box" id="text">
          <label for="DASHBRD PSWRD"><strong><B>Dashbrd PSWRD</B></strong></label>
          <input type="text" id="DASHBRD PSWRD" name="DASHBRD_PSWRD" required>
        </div>
        <div class="input-box">
          <label for="GEM PSWD"><b>GEM PSWD</b></label>
          <input type="password" id="GEM PSWD" name="GEM_PSWD" required>
        </div>
        <div class="input-box">
          <label for="Govt Mail PSWD"><b>Govt Mail PSWD</b></label>
          <input type="text" id="Govt Mail PSWD" name="Govt_Mail_PSWD" required>
        </div>
        <div class="input-box">
          <label for="PFMS PSWD"><b>PFMS PSWD</b></label>
          <input type="text" id="PFMS PSWD" name="PFMS_PSWD" required>
        </div>
        <div class="input-box">
          <label for="OP PSWD"><b>OP PSWD</b></label>
          <input type="text" id="OP PSWD" name="OP_PSWD" required>
        </div>
        <div class="input-box">
          <label for="AP PSWD"><b>AP PSWD</b></label>
          <input type="text" id="AP PSWD" name="AP_PSWD" required>
        </div>
        <div class="input-box">
          <label for="Reg Email"><b>Reg Email</b></label>
          <input type="email" id="Reg Email" name="Reg_Email" required>
        </div>
        <div class="input-box">
          <label for="Reg Phn"><b>Reg Phn</b></label>
          <input type="num" id="Reg Phn" name="Reg_PhOne" required>
        </div>
        <div class="input-box">
          <label for="Bharathkosh"><b>Bharathkosh</b></label>
          <input type="text" id="Bharathkosh" name="Bharathkosh" required>
        </div>
        <div class="input-box">
          <label for="BkoshPSWD"><b>BkoshPSWD</b></label>
          <input type="password" id="BkoshPSWD" name="BkoshPSWD" required>
         
        </div>
        <footer>
          <div class="button">
            <input type="submit" value="save" name="submit">
            <a href="http://localhost/login/payment.php"></a>
          </div>
</footer>

    </form>

</div>
</div>
</body>
</html>
