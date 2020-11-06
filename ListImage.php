<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Gallery</title>
</head>
<style>
</style>
<body>
</body>
</html>
<?php
// Include the database configuration file
include 'dbLogin.php';

// Get images from the database
$query = $conn->query("SELECT * FROM images");

if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $imageURL = 'images/'.$row["image"];
        ?>
        <img src="<?php echo $imageURL; ?>" alt="" />
    <?php }
}else{ ?>
    <p>No image(s) found...</p>
<?php }
echo "
<center>
    <div class='container mt-3'>
    <table class='table table-bordered'>
        <tr style='background: #d9edf7; color: #31708f; padding: 15px 15px; text-align: center;'>
            <th><a href='index.php' style='font-size: larger;'>Turn Back Index!</a></th>
        </tr>
</div>
    
</center>
";
?>