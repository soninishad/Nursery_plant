<?php
include "../../connection.php";   

$id = $_GET['id'];
$query = "delete from services where id='$id'  ";
$res = mysqli_query($conn,$query);


if($res){
   
    echo  "<script> alert('Your content deleted successfully ');
    window.location.href='show_services';
    </script>";

         }
         else
         {      
            echo  "<script> alert('Your content not deleted');
            window.location.href='show_services';
            </script>";         
 }
?>