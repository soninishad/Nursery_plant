<?php
include "../../connection.php";   

$id=$_POST['id'];
$file=$_FILES['file']['name'];
$file_loc=$_FILES['file']['tmp_name'];
$file_size=$_FILES['file']['size'];
$file_type=$_FILES['file']['type'];
$name=$_POST['name'];
$designation=$_POST['designation'];
$folder="../../upload/";
move_uploaded_file($file_loc,$folder.$file);
$query = " UPDATE `team` SET`image`='$file',`name`='$name',`designation`='$designation' WHERE id='$id' ";
$res=mysqli_query($conn,$query);


if($res){
    echo  "<script> alert('Your content successfully Update');
                window.location.href='show_team';
                </script>";
         }
         else
         {       
            echo  "<script> alert('Your content Failed to Update');
                        window.location.href='edit_team';
                        </script>";
        }
//  header("location:show_team");
?>