<!DOCTYPE html>
<html lang="en">
<head>
    <title>Index Admin Page</title>
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
    <h1>Admin Index Page</h1>
    <p style="background: #d9edf7; color: #31708f; padding: 15px 15px;">Welcome admin <?php echo $_SESSION['username']  ?></p>
</div>
<ul class="nav nav-pills" style="margin-bottom: 25px;">
    <li class="nav-item" >
        <a class="nav-link active" href="indexadmin.php">Option</a>
    </li>
    <li class="nav-item">
        <a class="nav-link " href="UpdateAdmin.php">Update Manga</a>
    </li>
    <li class="nav-item">
        <a class="nav-link " href="view.php">Manage Manga</a>
    </li>
    <li class="nav-item">
        <a class="nav-link " href="viewAccount.php">Managa Account</a>
    </li>
</ul>
<center>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h3>Show Image</h3>
                <p>You can find some Image we use for Web</p>
                <a href="ListImageAdmin.php">Click Here!</a>
            </div>
            <div class="col-sm-4">
                <h3>Show Donate</h3>
                <p>View Your Donate and PeoPle Donate</p>
                <a href='ShowDonateAdmin.php'>Click Here!</a>
            </div>
            <div class="col-sm-4">
                <h3>Log out</h3>
                <p>You cant logout here</p>
                <a href="logout.php">Click Here!</a>
            </div>
        </div>
    </div>
</center>
</body>
</html>
