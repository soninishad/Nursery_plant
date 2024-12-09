<?php
include "../../connection.php";   

$id=$_POST['id'];
$file=$_FILES['file']['name'];
$file_loc=$_FILES['file']['tmp_name'];
$file_size=$_FILES['file']['size'];
$file_type=$_FILES['file']['type'];
$heading=$_POST['heading'];
$title=$_POST['title'];
$folder="../../upload/";
move_uploaded_file($file_loc,$folder.$file);
$query = "UPDATE `welcome_content` SET`image`='$file',`heading`='$heading',`title`='$title' WHERE id='$id' ";
$res=mysqli_query($conn,$query);


if($res){
   
    echo  "<script>alert('Your Content Successfully Update');
    window.location.href='welcome_content_show';
    </script>";

         }
         else
         {      
            echo "<script>alert('Failed to Update');
            window.location.href='welcome_content_edit';
            </script>";         
 }

//  header("location:show_project.php");
?>