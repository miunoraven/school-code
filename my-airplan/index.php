<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign in</title>
        <?php include "fonts.php"; ?>
        <link rel="stylesheet" href="assets/css/signin.css" type="text/css">
    </head>
    <body>
        <div class="background">
            <div class="content">
                <h1>My Airplan <img src="assets/images/airplan_logo.png" alt="logo" class="logo"></h1>                
                <div class="signin">
                    <h2>Sign in</h2>
                    <form method="get" action="authentication.php">
                        <input type="email" id="input-email" name="input-email" placeholder="E-mail" required>
                        <br> <br>
                        <input type="password" id="input-pass" name="input-pass" placeholder="Password" required>
                        <div class="error"></div>
                        <a href="#" class="forgot_pass">Forgot password?</a>
                        <br>
                        <br>

                        <input type="submit" class="button-signin" value="Sign in"/> <br>

                    </form>
                    <p>No account yet? <a href="/database/databases.php" class="register">Register</a></p>
                </div>
            </div>
        </div>
        <script src="assets/js/signin.js"></script>
    </body>
</html>