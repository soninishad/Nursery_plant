<?php
include "../../connection.php";   

$id=$_POST['id'];
$file=$_FILES['file']['name'];
$file_loc=$_FILES['file']['tmp_name'];
$file_size=$_FILES['file']['size'];
$file_type=$_FILES['file']['type'];
$heading=$_POST['heading'];
$title=$_POST['title'];
$description=$_POST['description'];
$url = $_POST['url'];
$updated_date = date("d-M-Y");
$folder="../../upload/";
move_uploaded_file($file_loc,$folder.$file);
$query = "UPDATE `project`SET`image`='$file',`heading`='$heading',`title`='$title',`description`='$description',`url`='$url',`updated_date`= Now() WHERE id='$id' ";
$res=mysqli_query($conn,$query);


if($res){
   
    echo  "<script> alert('Your content successfully Update');
    window.location.href='show_project';
    </script>";

         }
         else
         {      
            echo  "<script> alert('Your content failed to Update');
            window.location.href='edit_project';
            </script>";         
 }

?>