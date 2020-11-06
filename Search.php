<!DOCTYPE html>
<html lang="en">
<head>
  <title>Search Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="SearchThongtin.js"></script>
</head>
<style>
    table{
        text-align: center;
    }
</style>
<body>
<div class="jumbotron text-center p-3 my-3 bg-dark text-white">
  <h1>Search</h1>
</div>
<ul class="nav nav-pills ">
  <li class="nav-item">
    <a class="nav-link" href="Home.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="Search.php">Find Manga</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="Login.php">Login</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="ProInfo.php">About Me</a>
  </li>
</ul>
<center>
    <div class="copyright" style="background: #d9edf7; color: #31708f; padding: 15px 15px;">&copy; Search Table</div>
</center>
<form method="GET" action="">
    <div class="form-group">
        <center>
        <table>
            <tr>
             <td>
                <input type="text" class="form-control" style="width: 700px;" name="search" placeholder="Search by name,category or artist"/>
             </td>
             <td>
                <input type="submit" class="btn btn-primary" value="search">
             </td>
            </tr>
        </table>
    </div>
    </right>
</form>
<?php
if(isset($_GET['search']))
{
    $key=$_GET["search"];  //key=pattern to be searched
    $con=mysqli_connect("localhost","root","","mangadb");

// Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $result=mysqli_query($con,"select * from infor where `Storyname` like '%$key%' or `Category` like '%$key%' or `Artist` like '%$key%'");
    echo "
<div class='container mt-3'>
    <table class='table table-bordered '>
        <tr>
            <td colspan='4'><h4>Search of Story</h4></td>
        </tr>
        <tr style='background: #d9edf7; color: #31708f; padding: 15px 15px;'>
            <th>Story name:</th>
            <th>Category:</th>
            <th>Artist:</th>
            <th>Link:</th>
        </tr>
</div>
";
    while($row=mysqli_fetch_assoc($result))
    {
// Print your search variables
        echo "<tr>";
        echo "<td>" . $row['Storyname'] . "</td>";
        echo "<td>" . $row['Category'] . "</td>";
        echo "<td>" . $row['Artist'] . "</td>";
        echo "<td><a href=". $row['Link'] . ">View!</a></td>";
        echo "</tr>";
    }

}
?>
<?php
$con=mysqli_connect("localhost","root","","mangadb");
// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT Storyname,Category,Artist,Link FROM infor");
echo "
<div class='container mt-3'>
    <table class='table table-bordered'>
        <tr>
            <tr>
                <td colspan='4'><h4>List of Story</h4></td>
            </tr>
        </tr>
        <tr>
            <th>Story name:</th>
            <th>Category:</th>
            <th>Artist:</th>
            <th>Link:</th>
        </tr>
</div>
";

while($row = mysqli_fetch_array($result))
{
    echo "<tr>";
    echo "<td>" . $row['Storyname'] . "</td>";
    echo "<td>" . $row['Category'] . "</td>";
    echo "<td>" . $row['Artist'] . "</td>";
    echo "<td><a href=". $row['Link'] . ">View!</a></td>";
    echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
  <a href="Home.php">Back To Form!</a>
</div>
</body>
</html>