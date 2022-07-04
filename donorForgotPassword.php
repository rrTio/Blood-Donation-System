<?php include_once("./database/connection.php"); ?>

<!DOCTYPE html>
<html lang="en" >

  <head>
  <meta charset="UTF-8">
  <meta charset="UTF-8">
    <title>Donor Forgot Password</title>  
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.1-beta1/dist/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://unicons.iconscout.com/release/v3.0.6/css/line.css'>
    <link rel="stylesheet" href="./assets/css/forgotPassword.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <script type="text/javascript" src="./assets/js/donorForgotPassword.js"></script>
  </head>

  <body>
    <button onclick="returnPage()" id="return" class="btn">&#8592</button>
    <div class="login">
      <h1>Donor Forgot Password</h1>
      <form action="./database/database.php" method="post" name="forgotten">
        <input type="text" name="username" placeholder="Username or Email" required="required" />
        <input type="password" name="password" placeholder="Password" required="required" />
        <input type="password" name="confirmPassword" placeholder="Confirm Password" required="required" />
        <button type="submit" name="btnChangePasswordDonor" onclick="checkValidation()" class="btn btn-block btn-large">Enter</button>
      </form>
    </div>
  </body>

</html>