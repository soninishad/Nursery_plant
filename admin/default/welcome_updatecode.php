<?php
include "../../connection.php";   

$id=$_POST['id'];
$heading=$_POST['heading'];
$paragraph=$_POST['paragraph'];
$query = "UPDATE `home_content`SET`heading`='$heading',`paragraph`='$paragraph' WHERE `id`='$id' ";
$result= mysqli_query($conn,$query);


if($result){
   
    echo  "<script> alert('Your content Successfully Update');
    window.location.href='welcome_show';
    </script>";

         }
         else
         {      
            echo  "<script> alert('Failed to Update');
            window.location.href='welcome_edit';
            </script>";         
 }

?>