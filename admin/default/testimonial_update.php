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

$query = "UPDATE `testimonial`SET`image`='$image',`heading`='$heading',`title`='$title' WHERE id='$id' ";

$res=mysqli_query($conn,$query);


if($res){
   
    echo  "<script>alert('Your Content Successfully Update');
    window.location.href='testimonial_show';
    </script>";

         }
         else
         {      
            echo "<script>alert('Failed to Update');
            window.location.href='testimonial_edit';
            </script>";         
 }
// header("location:testimonial_show");

?>