<?php
include "../../connection.php";   

$id=$_POST['id'];
$heading=$_POST['heading'];
$paragraph=$_POST['paragraph'];
$image=$_FILES['image']['name'];
$image_loc=$_FILES['image']['tmp_name'];
$image_size=$_FILES['image']['size'];
$image_type=$_FILES['image']['type'];
$folder="../../upload/";
move_uploaded_file($image_loc,$folder.$image);
// $con=mysqli_connect("localhost","root","","nurseray_plant");
$query="UPDATE `about` SET `heading`='$heading',`paragraph`='$paragraph',`image`='$image' WHERE id='$id'  ";
$res=mysqli_query($conn,$query);


if($res){
   
    echo  "<script> alert('Your content successfully Update');
    window.location.href='show_about';
    </script>";

         }
         else
         {      
            echo  "<script> alert('Failed  to Update');
            window.location.href='edit_about';
            </script>";         
 }
// header("location:show_about");

?>