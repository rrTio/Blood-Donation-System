<?php include_once("./database/connection.php"); ?>

<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="UTF-8">
        <title>Donor Login</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link rel="stylesheet" href="./assets/css/donorLogin.css">
        <link rel="stylesheet" href="./assets/css/main.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
        <script src="./assets/js/loginPage.js" type="text/javascript"></script>
        <script src="./assets/js/registration.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="login">
            <h1>Donor Login</h1>
            <form action="./database/login.php" method="post">
                <input type="text" name="username" placeholder="Username or Email" required="required" />
                <input type="password" name="password" placeholder="Password" required="required" />
                <button type="submit" name="btnLoginDonor" class="btn btn-block btn-large">Enter</button>
                <center class="marginButton">
                    <a id="forgotPassword" onClick="return donorForgotPassword()">Forgot password?</a>
                </center>
                <center class="createAccount">
                    <a id="registerDonor" onClick="return donorRegister()">Don't have an account?</a>
                </center>
            </form>
        </div>
    </body>
</html>