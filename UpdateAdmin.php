<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<?php
require("dbLogin.php");
$haha ="";
// Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
if (isset($_POST["btn_submit"])) {
    // lấy thông tin người dùng
    $Storyname = $_POST["Storyname"];
    $Category = $_POST["Category"];
    $Artist = $_POST["Artist"];
    $Link = $_POST["Link"];
    //làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt
    //mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
    $Storyname = strip_tags($Storyname);
    $Storyname = addslashes($Storyname);
    $Category = strip_tags($Category);
    $Category = addslashes($Category);
    $Artist = strip_tags($Artist);
    $Artist = addslashes($Artist);

    if ($Storyname == "" || $Category =="" || $Artist =="" || $Link =="") {
        echo "Failed to upload Information";
    }else{
        $sql = "insert into infor(
										Storyname,
										Category,
										Artist,
										Link
									) VALUES (
										'$Storyname',
										'$Category',
										'$Artist',
										'$Link'
									)";
        // thực thi câu $sql với biến conn lấy từ file connection.php
        mysqli_query($conn,$sql);
        $haha = "Information uploaded successfully";
    }
}
?>
<?php
session_start();
// Initialize message variable
$msg = "";

// If upload button is clicked ...
if (isset($_POST['btn_submit'])) {
    // Get image name
    $image = $_FILES['image']['name'];
    // Get text
    $image_text = mysqli_real_escape_string($conn, $_POST['image_text']);

    // image file directory
    $target = "images/".basename($image);

    $sqlT = "INSERT INTO images (image, description) VALUES ('$image', '$image_text')";
    // execute query
    mysqli_query($conn, $sqlT);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
    }else{
        $msg = "Failed to upload image";
    }

}
?>
<?php
echo "<div class='container mt-3'>
    <table class='table table-bordered '>
    <tr>
           <td colspan='4'><h4><center>$haha</center></h4></td>
            <td colspan='4'><h4><center>$msg</center></h4></td>
        </tr>
    </div>";
?>
<body>
<center>
    <div class="jumbotron text-center p-3 my-3 bg-dark text-white">
        <h2>Update Page</h2>
</center>
<ul class="nav nav-pills">
    <li class="nav-item">
        <a class="nav-link" href="indexadmin.php">Option</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="UpdateAdmin.php">Update Manga</a>
    </li>
    <li class="nav-item">
        <a class="nav-link " href="view.php">Manage Manga</a>
    </li>
    <li class="nav-item">
        <a class="nav-link " href="viewAccount.php">Manage Account</a>
    </li>
</ul>
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="Storyname" style="margin-left: 25px;">Story Name:</label>
        <input type="text" class="form-control" id="Storyname" placeholder="Enter Story Name" name="Storyname" style="width: 75%; margin-left: 25px;" required>
    </div>
    <div class="form-group">
        <label for="Category" style="margin-left: 25px;">Category:</label>
        <input type="text" class="form-control" id="Category" placeholder="Enter Category" name="Category" style="width: 75%; margin-left: 25px;" required>
    </div>
    <div class="form-group">
        <label for="Artist" style="margin-left: 25px;">Artist:</label>
        <input type="text" class="form-control" id="Artist" placeholder="Enter Artist" name="Artist" style="width: 75%; margin-left: 25px;" required>
    </div>
    <div class="form-group">
        <label for="Link" style="margin-left: 25px;">Link:</label>
        <input type="text" class="form-control" id="Link" placeholder="Enter Link" name="Link" style="width: 75%; margin-left: 25px;" required>
    </div>
    <div class="form-group" style="width: 75%; margin-left: 25px;">
        <input type="hidden" name="size" value="1000000">
        <input type="file" name="image">
    </div>
    <div "form-group">
    <textarea class="form-control"
              id="text"
              cols="40"
              rows="4"
              name="image_text"
              style="width: 75%; margin-left: 25px;"
              placeholder="Please Enter your Description"></textarea>
    </div>
    <center>
        <button type="submit" name="btn_submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-primary">Reset</button>
        <div><a href="indexadmin.php">Back To Index Admin Page!</a></div>
    </center>
</form>

</div>
</body>
</html>