<!DOCTYPE html>
<html lang="en">
<head>
    <title>Donate Page</title>
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
    $name = $_POST["name"];
    $money = $_POST["money"];
    //Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
    if ($name == "" || $money == "") {
        echo "bạn vui lòng nhập đầy đủ thông tin hoặc đưa ra số tiền donate";
    }else{
        $sql = "insert into donate(
										fullname,
										money
									) VALUES (
										'$name',
										'$money'
									)";
        // thực thi câu $sql với biến conn lấy từ file connection.php
        mysqli_query($conn,$sql);
        echo "<div class='container mt-3'>
            <table class='table table-bordered '>
            <tr>
                    <td colspan='4'><h4><center>Thank you for Donate!</center></h4></td>
                </tr>
            </div>";
    }
}

?>
<body>
<center>
    <div class="jumbotron text-center p-3 my-3 bg-dark text-white">
        <h2>Donate Page</h2>
</center>
<ul class="nav nav-pills" style="margin-bottom: 25px;">
    <li class="nav-item" >
        <a class="nav-link " href="index.php">Index</a>
    </li>
    <li class="nav-item">
        <a class="nav-link " href="Update.php">Update Manga</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="Donate.php">Donate</a>
    </li>
</ul>
<form action="" method="post">
    <div class="form-group">
        <label for="name" style="margin-left: 25px;">Full Name:</label>
        <input type="text" class="form-control" id="name" placeholder="Enter Full Name" name="name" style="width: 75%; margin-left: 25px;" required>
    </div>
    <div class="form-group">
        <label for="Money" style="margin-left: 25px;">Donate Money:</label>
        <select class="form-control" id="Money" name="money" style="margin-left: 25px; width: 75%;">
            <option>5$</option>
            <option>10$</option>
            <option>25$</option>
            <option>50$</option>
            <option>100$</option>
        </select>
    </div>
    <center>
        <input type="submit" name="SUBMIT" value="Submit" class="btn btn-primary">
        <button type="reset" class="btn btn-primary">Reset</button>
        <td colspan="2" style="text-align: center;"><p><a href='index.php'>Turn Back!</a></p></td>
        <td colspan="2" style="text-align: center;"><p><a href='ShowDonate.php'>View Your Donate</a></p>
    </center>
</form>

</div>

</body>
</html>