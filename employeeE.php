<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Sign up</title>
  <style>
    



  .body{
      background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("bgbi.jpg");
  }
  .main {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 10px 10px 10px 10px;
    background-color: rgba(255, 255, 255, 0.0);
    color: #fff;
  }

  .input-box {
    margin-bottom: 15px;
  }
  .F1{
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 50px auto;
  }

  label {
    display: inline-block;
    /* display: flex;
    align-items: center; */
    width: 150px;
    font-weight: bold;
  }

  input[type="text"],
  input[type="number"],
  input[type="date"] {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 3px;
    box-sizing: border-box;
    transition: border-color 0.3s;
  }

  input[type="text"]:focus,
  input[type="number"]:focus,
  input[type="date"]:focus {
    border-color: #007bff;
  }

  .button {
    text-align: right;
  }

  input[type="submit"] {
    padding: 8px 16px;
    background-color: #007bff;
    border: none;
    color: white;
    border-radius: 3px;
    cursor: pointer;
    transition: background-color 0.3s;
  }

  input[type="submit"]:hover {
    background-color: #0056b3;
  }
  .input-box1{
    font-size: 1em;
    margin-bottom: 12px;
    box-sizing:10px ;
    width: 400px;
    height: 32px;
  }
  .input-box1 select{
    border: 1px solid #ccc;
  }




  </style>
  
</head>
<body>
  <div class="body">
<div class="main">

  <div class="F1">
    <!-- <h2>TASK</h2>  -->
    <form action="regemployee.php" method="POST">

      <div class="content">
        <h3 style="text-align:center;font-weight:bold;font-size:35px;">TASK</h3>
        <br>
        <div class="input-box">
          <label for="Tasknumber"><b>TASK NUMBER:</b></label>
          <input type="text" id="Tasknumber" name="task_number" required>
        </div>
        <div class="input-box">
          <label for="Employee"><b>EMPLOYEE:</b></label>
          <input type="number" id="Employee" name="employee_id" required>
        </div>
        <div class="input-box">
          <label for="Tasks"><b>TASK:</b></label>
          <input type="text" id="Tasks" name="task_description" required>
        </div>
        <div class="input-box">
          <label for="DUE_DATE"><b>DUE DATE:</b></label>
          <input type="date" id="DUE_DATE" name="due_date" required>
        </div>
        <div class="input-box1">
          <label for="Tasks"><b>STATUS:</b></label><br>
          <select name="Statuss" class="input-box1" id="Statuss" onchange="alertMsg();">
            <option></option>
            <option value="open">Open</option>
            <option value="close">Close</option>
          </select>
          
        </div>
        <br>
        <div class="input-box1">
          <label for="PRIORITY"><b>PRIORITY:</b></label>
          <select name="priority" class="input-box1" id="Statuss">
            <option></option>
            <option value="low">Low</option>
            <option value="medium">Medium</option>
            <option value="high">High</option>

          </select>
        </div>
        <br><br>
        <br><br>
       
        </div>
        <footer>
          <div class="button">
            <input type="submit" value="save" name="submit">
            
          </div>
</div>
</div>
</footer>


    </form>

    <script>
       
        var text1 = "Status: Closed!\n Complete your task";
        var text2 = "Status: Open!\n Complete your task";
        function alertMsg()
        {
            if(document.getElementById('Statuss').value !== 'open') {
                alert(text1);
            }
            else {
                alert(text2);
            }
        }// Call the function to trigger alerts
        </script>

















    <!-- <?php
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
   
    $sql = "INSERT INTO `task` (
       task_number, employee_id, task_description, due_date, Statuss, priority) VALUES (
        '$task_number', '$Employee', '$Tasks', '$DUE_DATE', '$Statuss', '$PRIORITY')";

    if ($connection->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }

    $connection->close();
    // header("Location: payment.php");
    exit();
}
?> 
 -->

</div>
</div>
</body>
</html>
