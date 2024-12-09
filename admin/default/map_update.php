<?php
include "../../connection.php";   

$id=$_POST['id'];
$map=$_POST['map'];
$query = "UPDATE `map` SET`map`='$map' WHERE id='$id'  ";
$result= mysqli_query($conn,$query);


if($result){
   
    echo  "<script> alert('Your content Successfully Update');
    window.location.href='map_show';
    </script>";

         }
         else
         {      
            echo  "<script> alert('Failed to Update');
            window.location.href='map_edit';
            </script>";         
 }


?>