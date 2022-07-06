<?php include_once("./database/connection.php");?>
<!DOCTYPE html>
<html lang="en>
    <head>
        <meta charset="UTF-8">
        <title>Blood Donation System</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link rel="stylesheet" href="./assets/css/index.css">
        <link rel="stylesheet" href="./assets/css/main.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
        <script type="text/javascript" src="./assets/js/index.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm donor">
                    <button type="submit" onclick="openDonorLogin()" name="btnLogin" class="btn btn-block btn-large">Login as Donor</button>
                </div>
                <div class="col-sm admin">
                    <button type="submit" onclick="openHeadLogin()" name="btnLogin" class="btn btn-block btn-large">Login as Head</button>
                </div>
            </div>
        </div>
    </body>