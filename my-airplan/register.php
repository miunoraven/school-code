<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register</title>
        <?php include "components/fonts.php"; ?>
        <!-- <link rel="stylesheet" href="assets/css/register.css" type="text/css"> -->
    </head>
    <body>
        <div class="background">
            <div class="content">
                <!-- <h1>My Airplan <img src="assets/images/airplan_logo.png" alt="logo" class="logo"></h1> -->
                
                <div class="register">
                    <h2>Make a new account</h2>
                    <form action="add_acc.php" method="post">
                        <input type="text" name="firstname" id="firstname" placeholder="Firstname" required>
                        <br> <br>
                        <input type="text" name="lastname" id="lastname" placeholder="Lastname" required>
                        <br> <br>
                        <input type="email" id="input-email" name="email" placeholder="E-mail" required>
                        <br> <br>
                        <input type="email" id="input-conf-email" name="conf_email" placeholder="Confirm e-mail" required>
                        <div class="error_mail"></div>
                        <br>                  
                        <input type="password" id="input-pass" name="pass" placeholder="Password" required>
                        <br> <br>
                        <input type="password" id="input-conf-pass" name="conf_pass" placeholder="Confirm password" required>
                        <div class="error_pass"></div>
                        <br>
                        <input type="submit" value="signin" class="button-register">
                    </form>
                    <p>Already have an account? <a href="index.php" class="signin">Sign in</a></p>
                </div>
            </div>
        </div>
        <!-- <script src="assets/js/register.js"></script> -->
    </body>
</html>