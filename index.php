<!DOCTYPE html>
<html lang="en">
<head>
    <title>Index Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<?php
require("dbLogin.php");
session_start();
?>
<body>
<div class="jumbotron text-center p-3 my-3 bg-dark text-white">
    <h1>User Index Page</h1>
    <p style="background: #d9edf7; color: #31708f; padding: 15px 15px;">Welcome <?php echo $_SESSION['username']  ?></p>
    <p>Please Choose your option!</p>
</div>
<ul class="nav nav-pills" style="margin-bottom: 25px;">
    <li class="nav-item" >
        <a class="nav-link active" href="index.php">Index</a>
    </li>
    <li class="nav-item">
        <a class="nav-link " href="Update.php">Update Manga</a>
    </li>
    <li class="nav-item">
        <a class="nav-link " href="Donate.php">Donate</a>
    </li>
</ul>
<center>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h3>Show Image</h3>
                <p>You can find some Image we use for Web</p>
                <a href="ListImage.php">Click Here!</a>
            </div>
            <div class="col-sm-4">
                <h3>Show Donate</h3>
                <p>View Your Donate and PeoPle Donate</p>
                <a href='ShowDonate.php'>Click Here!</a>
            </div>
            <div class="col-sm-4">
                <h3>Log Out</h3>
                <p>If you don't want stay here</p>
                <a href="logout.php">Click Here!</a>
            </div>

        </div>
    </div>
</center>
</body>
</html>
