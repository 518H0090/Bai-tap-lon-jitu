<?php
require('dbLogin.php');
$id=$_REQUEST['id'];
echo "S.No: "./*$_SESSION['ID'];*/$id;
$query = "SELECT * from infor where Id='".$id."'";
$result = mysqli_query($conn,$query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Update Manga</title>
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
                //Id Name Hobbies Address Country
                $id=$_REQUEST['Id'];
                $name = $_REQUEST['Storyname'];
                $category =$_REQUEST['Category'];
                $artist =$_REQUEST['Artist'];
                $link = $_REQUEST['Link'];
                $update="update infor set Storyname='".$name."',
    Category='".$category."', Artist='".$artist."',
    Link='".$link."' where Id='".$id."'";
                $result=mysqli_query($conn, $update);// or die(mysqli_error());
                $status = "Manga Updated Successfully. </br></br>
    <a href='view.php'>View Updated Record</a>";
                echo '<p style="color:#ff0000;">' .$status.'</p>';
            }else {
            ?>
            <div>
                <form name="form" method="post" action="" style="background: #e3eaf4; width: 350px; height: 270px; border: dashed 1px #97b8ef; text-align: left">
                    <center>
                        <table cellspacing=10 border=0>
                            <tr>
                                <td colspan="2" style="text-align: center"><h2>Update Manga</h2><hr style="border: 1px dashed #97b8ef"></td>
                            </tr>
                            <tr>
                                <td colspan="2"><input type="hidden" name="new" value="1" />
                                    <input type="hidden" name="Id" value="<?php echo $row['Id'];?>" /></td>
                            </tr>
                            <tr>
                                <td>Story Name:</td>
                                <td><input type="text" name="Storyname" placeholder="Enter Story Name" required value="<?php echo $row['Storyname'];?>" /></td>
                            </tr>
                            <tr>
                                <td>Category:</td>
                                <td><input type="text" name="Category" placeholder="Enter Category" required value="<?php echo $row['Category'];?>" /></td>
                            </tr>
                            <tr>
                                <td>Artist:</td>
                                <td><input type="text" name="Artist" placeholder="Enter Artist" required value="<?php echo $row['Artist'];?>" /></td>
                            </tr>
                            <tr>
                                <td>Link:</td>
                                <td><input type="text" name="Link" placeholder="Enter Link" required value="<?php echo $row['Link'];?>" /></td>
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