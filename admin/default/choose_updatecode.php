<?php
include "../../connection.php";   

$id=$_POST['id'];



$image=$_FILES['image']['name'];
$image_loc=$_FILES['image']['tmp_name'];
$image_size=$_FILES['image']['size'];
$image_type=$_FILES['image']['type'];
$heading=$_POST['heading'];
$title=$_POST['title'];
$folder="../../upload/";
move_uploaded_file($image_loc,$folder.$image);
$query = "UPDATE `choose` SET`image`='$image',`heading`='$heading',`title`='$title' WHERE id='$id'  ";

$res=mysqli_query($conn,$query);



if($res){
   
    echo  "<script> alert('Your content successfully updated');
    window.location.href='choose_show';
    </script>";

         }
         else
         {      
            echo  "<script> alert('Your content not updated');
            window.location.href='choose_edit';
            </script>";         
 }


// header("location:choose_show");

?>