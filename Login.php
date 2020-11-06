<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<?php
//Gọi file connection.php ở bài trước
require_once("dbLogin.php");
session_start();
// Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
if (isset($_POST["btn_submit"])) {
    // lấy thông tin người dùng
    $username = $_POST["username"];
    $password = md5($_POST["password"]);
    //làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt
    //mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
    $username = strip_tags($username);
    $username = addslashes($username);
    $password = strip_tags($password);
    $password = addslashes($password);
    if ($username == "" || $password =="") {
        echo "username hoặc password bạn không được để trống!";
    }else{
        $sql = "select * from users where username = '$username' and password = '$password' ";
        $query = mysqli_query($conn,$sql);
        $num_rows = mysqli_num_rows($query);
        if ($num_rows==0) {
            echo "tên đăng nhập hoặc mật khẩu không đúng !";
        }else{
            while($data = mysqli_fetch_array($query)){
            //tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
            $_SESSION['username'] = $data['username'];
            $_SESSION['decen'] = $data['decen'];
            $permission = $_SESSION['decen'];
            if($permission == '0'){
                header('Location: index.php');
            }
            else if($permission == '1'){
                header('Location: indexadmin.php');
            }
        }

        }
    }
}
?>
<body>
<center>
<div class="jumbotron text-center p-3 my-3 bg-dark text-white">
  <h2>Login Page</h2>
</center>
<ul class="nav nav-pills">
<li class="nav-item">
    <a class="nav-link" href="Home.php">Home</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="Search.php">Find Manga</a>
</li>
<li class="nav-item">
    <a class="nav-link active" href="Login.php">Login</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="ProInfo.php">About Me</a>
</li>
</ul>
<form action="" method="post">
    <div class="form-group">
      <label for="username" style="margin-left: 25px;">User Name:</label>
      <input type="text" class="form-control" id="username" placeholder="Enter User" name="username" style="width: 75%; margin-left: 25px;" required>
    </div>
    <div class="form-group">
      <label for="pwd" style="margin-left: 25px;">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" style="width: 75%; margin-left: 25px;" required>
    </div>
    <center>
        <button type="submit" name="btn_submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-primary">Reset</button>
        <td colspan="2"><p>Not registered yet? <a href='register.php'>Register Here</a></p></td>
		<td><a href="Home.php">Back To Form!</a></td>
    </center>
  </form>
 
</div>
</body>
</html>