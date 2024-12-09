<?php
include "../../connection.php";   

$id=$_POST['id'];

$image=$_FILES['image']['name'];
$image_loc=$_FILES['image']['tmp_name'];
$image_size=$_FILES['image']['size'];
$image_type=$_FILES['image']['type'];
$heading=$_POST['heading'];
$sub_heading=$_POST['sub_heading'];
$paragraph=$_POST['paragraph'];
$folder = "../../upload/";
move_uploaded_file($image_loc,$folder.$image);
$query = "UPDATE `slider` SET`image`='$image',`heading`='$heading',`sub_heading`='$sub_heading',`paragraph`='$paragraph' WHERE id='$id'  ";
$res=mysqli_query($conn,$query);

if($res){
   
    echo  "<script>alert('Your Content Successfully Update');
    window.location.href='show_slider';
    </script>";

         }
         else
         {      
            echo "<script>alert('Failed to Update');
            window.location.href='edit_slider';
            </script>";         
 }
//  header("location:show_slider");
?>