<?php
include "../../connection.php";   

$id = $_GET['id'];
$query = "delete from team where id='$id'  ";
$res = mysqli_query($conn,$query);

if($res){
   
    echo  "<script> alert('Your content deleted successfully ');
    window.location.href='show_team';
    </script>";

         }
         else
         {      
            echo  "<script> alert('Your content not deleted');
            window.location.href='show_team';
            </script>";         
 }

?>