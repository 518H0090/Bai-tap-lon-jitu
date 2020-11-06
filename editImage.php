<?php
require('dbLogin.php');
$id=$_REQUEST['id'];
echo "S.No: "./*$_SESSION['ID'];*/$id;
$query = "SELECT * from images where Id='".$id."'";
$result = mysqli_query($conn,$query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Update Description</title>
</head>
<body>
<center>
    <div class="form">
        <p><a href="indexadmin.php">Admin Page</a>
            | <a href="UpdateAdmin.php">Insert New Manga</a>
            | <a href="logout.php">Logout</a></p>
        <br>

        <?php
        $status = "";

        if(isset($_POST['new']) && $_POST['new']==1)
        {
            $id=$_REQUEST['Id'];
            $description =$_REQUEST['description'];
            $update="update images set description='".$description."' where Id='".$id."'";
            mysqli_query($conn,$update);
            $status = "Record Updated Successfully. </br></br>
    <a href='view.php'>View Updated Record</a>";
            echo '<p style="color:#ff0000;">' .$status.'</p>';
        }
        else {
        ?>
        <div>
            <form method="post" action="" style="background: #e3eaf4; width: 350px; height: 270px; border: dashed 1px #97b8ef; text-align: left" enctype="multipart/form-data">
                <center>
                    <table cellspacing=10 border=0>
                        <tr>
                            <td colspan="2" style="text-align: center"><h2>Edit Record</h2><hr style="border: 1px dashed #97b8ef"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="hidden" name="new" value="1" />
                                <input type="hidden" name="Id" value="<?php echo $row['Id'];?>" /></td>
                        </tr>
                        <tr>
                            <td>Description:</td>
                            <td>
                                <textarea name="description" value="value="<?php echo $row['Id'];?>">

                                </textarea>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2"><center><input name="submit" type="submit" value="Update" /></center></td>
                        </tr>
                    </table>
                </center>
            </form>
        </div>
    </div>
</center>
</body>
<?php }?>
</html>