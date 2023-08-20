<!DOCTYPE html>
<html>
<head>
    <title>Employee Registration Form</title>
    <style>
         body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            /* background-color: #f4f4f4; */
            color: #fff;
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("bgbi.jpg") ;
        }

        .container {
            width: 80%;
            margin: auto;
            padding: 20px;
        }

        .registration-form {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: rgba(255, 255, 255, 0.0);
        }

        .form-title {
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center;
            color: #007bff;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-size: 18px;
            margin-bottom: 8px;
            font-weight: bold;
        }

        .form-group input[type="text"],
        .form-group input[type="date"],
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .form-group input[type="file"] {
            margin-top: 5px;
        }

        .form-group textarea {
            resize: vertical;
        }

        .btn-submit {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
            width:100%; 
        }

        .btn-submit:hover {
            background-color: #0056b3;
            width:100%;
        }

    </style>
</head>
<body>

<div class="container">
    <div class="registration-form">
        <h2 class="form-title">Employee Registration Form</h2>

        <form action="store.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="employee_id">Employee ID:</label>
                <input type="text" id="employee_id" name="employee_id" required>
            </div>

            <div class="form-group">
                <label for="college">College:</label>
                <input type="text" id="college" name="college" required>
            </div>

            <div class="form-group">
                <label for="internship_start_date">Internship Start Date:</label>
                <input type="date" id="internship_start_date" name="internship_start_date" required>
            </div>

            <div class="form-group">
                <label for="internship_end_date">Internship End Date:</label>
                <input type="date" id="internship_end_date" name="internship_end_date" required>
            </div>

            <div class="form-group">
                <label for="domain">Domain:</label>
                <input type="text" id="domain" name="domain" required>
            </div>

            <div class="form-group">
                <label for="trainer_name">Trainer Name:</label>
                <input type="text" id="trainer_name" name="trainer_name" required>
            </div>

            <div class="form-group">
                <label for="expense">Expense:</label>
                <input type="text" id="expense" name="expense" required>
            </div>

            <div class="form-group">
                <label for="expense_details">Expense Details:</label>
                <textarea id="expense_details" name="expense_details" rows="4" required></textarea>
            </div>

            <div class="form-group">
                <label for="comments">Comments:</label>
                <textarea id="comments" name="comments" rows="4"></textarea>
            </div>

            <div class="form-group">
                <label for="requirement_component">Requirement Component:</label>
                <input type="text" id="requirement_component" name="requirement_component" required>
            </div>

            <div class="form-group">
                <label for="requirement_image">Requirement Image:</label>
                <input type="file" id="requirement_image" name="requirement_image">
            </div>

            <div class="clearfix"></div>

            <input type="submit" class="btn-submit" name="submit"  value="Register">
        </form>
    </div>
</div>

</body>
</html>
