<html>
<head>
    <title>Kết Nối Database</title>
    <meta charset="utf-8">
</head>
<style>
    .pdbLogin{
        display: none;
    }
</style>
<body>
<h2 class="pdbLogin">Kết Nối Database</h2>
<?php
$conn = mysqli_connect('localhost', 'root', '', 'mangadb');

if(mysqli_connect_errno()){
    die('can not connect database: ' . $mysqli_connect_errno($conn));
} else {
    echo "<p class='pdbLogin'>Kết nối thành công</p>";
}
?>
<center>
    <div class="copyright" style="background: #d9edf7; color: #31708f; padding: 15px 15px;">&copy; My Manga Edit by 518H0090 - 2020</div>
</center>
</body>
</html>