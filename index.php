<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login Page</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <h2 class="text-center mb-4">Login</h2>
                <form id="loginForm" action="login.php" method="POST">
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="text" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                </form>
                <a  href="#" class="forgot-password text-right d-block mt-3">Forgot Password?</a>
                <p class="text-muted text-center mt-5">Don't have an account? <a href="registration.php">Sign up</a></p>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS -->
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
