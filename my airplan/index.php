<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign in</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;400&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/signin.css" type="text/css">
    </head>
    <body>
        <div class="background">
            <div class="content">
                <h1>My Airplan <img src="assets/images/airplan_logo.png" alt="logo" class="logo"></h1>                
                <div class="signin">
                    <h2>Sign in</h2>
                    <input type="email" id="input-email" placeholder="E-mail" required>
                    <br> <br>
                    <input type="password" id="input-pass" placeholder="Password" required>
                    <div class="error"></div>
                    <a href="#" class="forgot_pass">Forgot password?</a>
                    <br>
                    <br>
                    <a class="link_button">
                        <button class="button-signin">Sign in</button> <br>
                    </a>
                    <p>No account yet? <a href="\database\databases.php" class="register">Register</a></p>
                </div>
            </div>
        </div>
        <script src="assets/js/signin.js"></script>
    </body>
</html>