<html>
<head>
    <title>Gallery</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<style>
    table{
        text-align: center;
        margin-top: 25px;
    }
</style>
<body>

</body>
</html>
<?php
require("dbLogin.php");
session_start();
echo "
<center>
<div class='container mt-3'>
    <table class='table table-bordered'>
        <tr>
            <td colspan='4'><h4>List of Story</h4></td>
        </tr>
        <tr style='background: #d9edf7; color: #31708f; padding: 15px 15px;'>
            <th>Image:</th>
            <th>Description:</th>
            <th>Link:</th>
        </tr>
</div>
</center>
";
$result = mysqli_query($conn, "SELECT image,description,Link FROM images,infor where images.Id = infor.Id");
while ($row = mysqli_fetch_array($result)  ){
    $imageURL = 'images/'.$row["image"];
    echo "<tr>";
    echo "<td><img src='images/".$row['image']."' ></td>";
    echo "<td><p>".$row['description']."</p></td>";
    echo "<td><a href=". $row['Link'] . ">View!</a></td>";
    echo "</tr>";
}
    echo"
        <tr>
            <td colspan='4'><h4 style='background: #d9edf7; color: #31708f; padding: 15px 15px;'>© 2020 My Manga - Design by 518H0090</h4></td>
        </tr>
    "
?>

