<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register Page!</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<?php
require_once("dbLogin.php");
if (isset($_POST["SUBMIT"])) {
    //lấy thông tin từ các form bằng phương thức POST
    $username = $_POST["username"];
    $password = md5($_POST["password"]);
    $name = $_POST["name"];
    $address = $_POST["address"];
    //Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
    if ($username == "" || $password == "" || $name == "" || $address == "") {
        echo "bạn vui lòng nhập đầy đủ thông tin";
    }else{
        $sql = "insert into users(
										username,
										password,
										name,
										address,
										decen
									) VALUES (
										'$username',
										'$password',
										'$name',
										'$address',
										'0'
									)";
        // thực thi câu $sql với biến conn lấy từ file connection.php
        mysqli_query($conn,$sql);
        echo "<div class='container mt-3'>
            <table class='table table-bordered '>
            <tr>
                    <td colspan='4'><h4><center>Congratulations on your successful registration!</center></h4></td>
                </tr>
            </div>";
    }
}

?>
<body>
<center>
    <div class="jumbotron text-center p-3 my-3 bg-dark text-white">
        <h2>Register Page</h2>
</center>
<form action="" method="post">
    <div class="form-group">
        <label for="username" style="margin-left: 25px;">User Name:</label>
        <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" style="width: 75%; margin-left: 25px;" required>
    </div>
    <div class="form-group">
        <label for="pwd" style="margin-left: 25px;">Password:</label>
        <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" style="width: 75%; margin-left: 25px;" required>
    </div>
    <div class="form-group">
        <label for="name" style="margin-left: 25px;">Full Name:</label>
        <input type="text" class="form-control" id="name" placeholder="Enter Full Name" name="name" style="width: 75%; margin-left: 25px;" required>
    </div>
    <div class="form-group">
        <label for="address" style="margin-left: 25px;">Address:</label>
        <input type="text" class="form-control" id="address" placeholder="Enter address" name="address" style="width: 75%; margin-left: 25px;" required>
    </div>
    <center>
        <input type="submit" name="SUBMIT" value="Submit" class="btn btn-primary">
        <button type="reset" class="btn btn-primary">Reset</button>
        <td colspan="2"><center><p><a href='Login.php'>Turn Back!</a></p></center></td>
    </center>
</form>

</div>

</body>
</html>