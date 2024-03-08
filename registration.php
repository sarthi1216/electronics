<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Ubuntu', sans-serif;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
        }

        .login-container {
            margin-top: 50px;
        }

        .login-box {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        }

        .login-box h2 {
            margin-bottom: 30px;
        }

        .login-row {
            margin-bottom: 20px;
        }

        .login-row label {
            font-weight: 500;
        }

        .login-row input[type="text"],
        .login-row input[type="password"],
        .login-row input[type="email"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .btnroo button {
            margin-right: 10px;
        }

        .donroo p {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="col-xl-10 col-lg-11 mx-auto login-container">
            <div class="row">
                <div class="col-lg-5 col-md-6 no-padding">
                    <div class="login-box">
                        <h2>User Registration</h2>
                        <form action="process_registration.php" method="post">
                            <div class="login-row">
                                <label for="username"><i class="fas fa-user"></i> Username:</label>
                                <input type="text" id="username" name="username" required>
                            </div>
                            <div class="login-row">
                                <label for="password"><i class="fas fa-lock"></i> Password:</label>
                                <input type="password" id="password" name="password" required>
                            </div>
                            <div class="login-row">
                                <label for="confirm_password"><i class="fas fa-lock"></i> Confirm Password:</label>
                                <input type="password" id="confirm_password" name="confirm_password" required>
                            </div>
                            <div class="login-row">
                                <label for="email"><i class="fas fa-envelope"></i> Email:</label>
                                <input type="email" id="email" name="email" required>
                            </div>
                            <div class="login-row">
                                <input type="submit" class="btn btn-primary" value="Register">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 img-box">
                <img src="assets/images/sideimg.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
</body>
</html>
