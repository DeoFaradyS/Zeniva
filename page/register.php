
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/pages/register.css">
    <title>Zeniva.</title>
</head>
<body>
    <section class="register">
        <a href="index.php" id="logo">Zeniva.</a>
        <div class="img">
            <img src="../asset/image/image-2.jpg" alt="image">
        </div>
        <div class="container">
            <div class="text">
                <h1>Sign-Up</h1>
                <p>To get started, please register your account.</p>
            </div>

            <form action="../controller/registerController.php" method="post" id="form">
                <div class="form-control">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" placeholder="Enter your username">
                    <span id="error-username"></span>
                </div>
                <div class="form-control">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Enter your email">
                    <span id="error-email"></span>
                </div>
                <div class="form-control">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter your password">
                    <span id="error-password"></span>
                </div>
                <button type="submit" id="btn-register" name="btn-register" value="register">Sign Up</button>
                <div class="login">
                    <p>Have an account? </p>
                    <a href="login.php">Login Here</a>
                </div>
            </form>
        </div>
    </section>
</body>
</html>
