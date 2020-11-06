<?php
require "dbLogin.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>View Information</title>
</head>
<style>
    .copyright{
        display: none;
    }
</style>
<body>
<div  style="background: #e3eaf4;  border: dashed 1px #97b8ef; text-align: left">
    <center>
        <p><a href="indexadmin.php">Admin Page</a>
            | <a href="UpdateAdmin.php">Update New Manga</a>
            | <a href="logout.php">Logout</a></p>
        <h2 style="background: white; color: #31708f; padding: 15px 15px;">View Information</h2>
        <table width="100%" border="1" style="border-collapse:collapse;">
            <thead>
            <tr>
                <th><strong>S.No</strong></th>
                <th><strong>Story Name</strong></th>
                <th><strong>Category</strong></th>
                <th><strong>Artist</strong></th>
                <th><strong>Link</strong></th>
                <th colspan="2"><strong>Action</strong></th>
            </tr>
            </thead>
            <tbody>
            <?php
            echo "
            <center>
                <h4 style='background: #d9edf7; color: #31708f;'><a href='view.php'>Back to View!</a></h4>             
            </center>            
            ";
            ?>
            <?php
            $count=1;
            $sel_query="Select * from infor ORDER BY Id desc;";
            $result = mysqli_query($conn,$sel_query);
            //Id Name Hobbies Address Country
            while($row = mysqli_fetch_array($result)) { ?>
                <tr><td align="center"><?php echo $count; ?></td>
                    <td align="center"><?php echo $row["Storyname"]; ?></td>
                    <td align="center"><?php echo $row["Category"]; ?></td>
                    <td align="center"><?php echo $row["Artist"]; ?></td>
                    <td align="center"><?php echo $row["Link"]; ?></td>
                    <td align="center">
                        <a href="editInformation.php?id=<?php echo $row["Id"];  ?>">Edit</a>
                    </td>
                    <td align="center">
                        <a href="deleteInformation.php?id=<?php echo $row["Id"]; ?>">Delete Information</a>
                    </td>
                </tr>
                <?php $_SESSION['ID']=($count++)-1; } ?>
            </tbody>
        </table>
    </center>
</div>
</body>
</html>