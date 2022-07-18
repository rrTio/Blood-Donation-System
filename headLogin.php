<?php include_once("./database/connection.php"); ?>

<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="UTF-8">
        <title>Head Login</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link rel="stylesheet" href="./assets/css/headLogin.css">
        <link rel="stylesheet" href="./assets/css/main.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
        <script src="./assets/js/loginPage.js" type="text/javascript"></script>
        <script src="./assets/js/registration.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="login">
            <h1>Head Login</h1>
            <form action="./database/login.php" method="post">
                <input type="text" name="username" placeholder="Username or Email" required="required" />
                <input type="password" name="password" placeholder="Password" required="required" />
                <button type="submit" onclick='window.open("https://accounts.google.com/signin/v2/identifier?service=mail&passive=1209600&osid=1&continue=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&followup=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&emr=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin#inbox","_blank")' name="btnLoginHead" class="btn btn-block btn-large">Enter</button>
                <center class="marginButton">
                    <a id="forgotPassword" onClick="return headForgotPassword()">Forgot password?</a>
                </center>
                <center class="createAccount">
                    <a id="registerHead" onClick="return headRegister()">Don't have an account?</a>
                </center>
            </form>
        </div>
    </body>
</html>