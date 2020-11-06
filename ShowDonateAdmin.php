<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>View Donate</title>
</head>
<style>
    th,td{
        height: 50px;
        vertical-align: bottom;
    }
</style>
<body>
<center>
    <div class="copyright" style="background: #d9edf7; color: #31708f; padding: 15px 15px;">&copy; Donate Table</div>
</center>
<?php
$con=mysqli_connect("localhost","root","","mangadb");
// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM donate");

echo "
<div class='container mt-3'>
    <table class='table table-bordered'>
        <tr>
            <th>Full name:</th>
            <th>Money:</th>
        </tr>
</div>
";

while($row = mysqli_fetch_array($result))
{
    echo "<tr>";
    echo "<td>" . $row['fullname'] . "</td>";
    echo "<td>" . $row['money'] . "</td>";
    echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
<center>
    <a href='indexadmin.php'>Turn Back Index Admin Page!</a>
</center>
</body>
</html

