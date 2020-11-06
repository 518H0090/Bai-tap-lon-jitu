<?php
require "dbLogin.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>View Image and Description</title>
</head>
<style>
    .copyright{
        display: none;
    }
</style>
<body>
<div  style="background: #e3eaf4;  border: dashed 1px #97b8ef; text-align: left">
    <center>
        <h2 style="background: white; color: #31708f; padding: 15px 15px;">View Image and Description</h2>
        <p style="background: white; color: #31708f; padding: 15px 15px;">Sorry Now,We just have Edit Description!</p>
        <?php
        echo "
        <center>
            <h4 style='background: #d9edf7; color: #31708f;'><a href='view.php'>Back to View!</a></h4>             
        </center>            
                    ";
        ?>
        <table width="100%" border="1" style="border-collapse:collapse;">
            <thead>
            <tr>
                <th><strong>S.No</strong></th>
                <th><strong>Image Name</strong></th>
                <th><strong>Description</strong></th>
                <th><strong>View</strong></th>
                <th colspan="2"><strong>Action</strong></th>
            </tr>
            </thead>
            <tbody>

            <?php
            $count=1;
            $sel_query="Select * from images ORDER BY Id desc;";
            $result = mysqli_query($conn,$sel_query);
            //Id Name Hobbies Address Country
            while($row = mysqli_fetch_array($result)) { ?>
                <tr><td align="center"><?php echo $count; ?></td>
                    <td align="center"><?php echo $row["image"]; ?></td>
                    <td align="center"><?php echo $row["description"]; ?></td>
                    <td><?php echo "<img src='images/".$row['image']."' >"; ?></>
                    <td align="center">
                        <a href="editImage.php?id=<?php echo $row["Id"];  ?>">Edit</a>
                    </td>
                    <td align="center">
                        <a href="deleteImage.php?id=<?php echo $row["Id"]; ?>">Delete Image</a>
                    </td>
                </tr>
                <?php $_SESSION['ID']=($count++)-1; } ?>
            </tbody>
        </table>
    </center>
</div>
</body>
</html>