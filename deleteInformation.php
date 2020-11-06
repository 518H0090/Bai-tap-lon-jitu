<?php
require('dbLogin.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM infor WHERE id=$id";
$result = mysqli_query($conn,$query) or die ( mysqli_error());
header("Location: viewInformation.php");
?>