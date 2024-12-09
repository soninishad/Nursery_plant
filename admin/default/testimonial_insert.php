<?php
include "../../connection.php";   
session_start();

$image=$_FILES['image']['name'];
$image_loc=$_FILES['image']['tmp_name'];
$image_size=$_FILES['image']['size'];
$image_type=$_FILES['image']['type'];
$heading=$_POST['heading'];
$title=$_POST['title'];
$folder="../../upload/";
move_uploaded_file($image_loc,$folder.$image);
$query="insert into testimonial (image,heading,title) values('$image','$heading','$title')";
$res=mysqli_query($conn,$query);

if($res){
   
    echo  "<script> alert('Your content successfully Inserted');
    window.location.href='testimonial_show';
    </script>";

         }
         else
         {      
            echo  "<script> alert('Your content not Inserted ');
            window.location.href='testimonial__add';
            </script>";         
 }

?>