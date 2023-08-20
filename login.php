
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./css/bootstrap-icons.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f7f7f7;
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("bgbi.jpg");
            background-size: cover;
            background-position: center;
        }

        .login-form {
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .login-title {
            font-size: 24px;
            text-align: center;
            color: white;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .input-group {
            margin-bottom: 15px;
        }

        .login-button {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            border: none;
            color: #ffffff;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .login-button:hover {
            background-color: #0056b3;
        }

        .signup-link {
            text-align: center;
            margin-top: 10px;
            color:white
        }
    </style>
</head>
<body>
    <div class="login-form col-md-4">
        <div class="login-title">Login</div>
        <form action="process_login.php" method="POST">
            <div class="input-group">
                <input type="text" class="form-control"  placeholder="ATL_CODE" name="ATL_CODE" required>
            </div>

            <div class="input-group">
                <input type="password" class="form-control" placeholder="ATL Password" name="ATL_PSWD" required>
            </div>

            <button class="login-button">Login</button>

            <div class="signup-link">
                Don't have an account? <a href="http://localhost/login/register.php">Sign up here!</a>
            </div>
        </form>
    </div>
</body>
</html>
