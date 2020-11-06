<?php
require('dbLogin.php');
session_start();
$id=$_REQUEST['id'];
$query = "DELETE FROM images WHERE id=$id";
$result = mysqli_query($conn,$query) or die ( mysqli_error());
header("Location: viewImage.php");
?>