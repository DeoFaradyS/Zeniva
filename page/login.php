<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/pages/login.css">
    <title>Zeniva.</title>
</head>

<body>
    <section class="login">
        <a href="index.php" id="logo">Zeniva.</a>
        <div class="img">
            <img src="../asset/image/image-2.jpg" alt="image">
        </div>
        <div class="container">
            <div class="text">
                <h1>Login</h1>
                <p>Welcome back! Please login into your account</p>
            </div>

            <form action="../controller/loginController.php" method="post" id="form">
                <div class="form-control">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" placeholder="Enter your username">
                    <span id="error-username"></span>
                </div>
                <div class="form-control">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter your password">
                    <span id="error-password"></span>
                </div>
                <button type="submit" id="btn-login" name="btn-login" value="login">Login</button>
                <div class="sign-up">
                    <p>Don't have an account?</p>
                    <a href="register.php">Sign Up</a>
                </div>
            </form>
        </div>
    </section>
    <script src="../js/login.js"></script>
</body>

</html>