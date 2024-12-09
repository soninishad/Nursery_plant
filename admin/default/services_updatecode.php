<?php
include "../../connection.php";   

$id=$_POST['id'];

$file=$_FILES['file']['name'];
$file_loc=$_FILES['file']['tmp_name'];
$file_size=$_FILES['file']['size'];
$file_type=$_FILES['file']['type'];
$title=$_POST['title'];
$paragraph=$_POST['paragraph'];
$description=$_POST['description'];
$url=$_POST['url'];
$updated_date = date("d-M-Y");
$folder="../../upload/";
move_uploaded_file($file_loc,$folder.$file);
$query = "UPDATE `services` SET`image`='$file',`title`='$title',`paragraph`='$paragraph',`description`='$description',`url`='$url',`updated_date`=Now() WHERE id='$id' ";
$res=mysqli_query($conn,$query);

if($res){
   
    echo  "<script>alert('Your Content Successfully Update');
    window.location.href='show_services';
    </script>";

         }
         else
         {      
            echo "<script>alert('Failed to Update');
            window.location.href='edit_services';
            </script>";         
 }
//  header("location:show_services");
?>