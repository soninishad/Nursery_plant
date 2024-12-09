<?php
include "../../connection.php";   

$id = $_GET['id'];
// $con = mysqli_connect("localhost","root","","nurseray_plant");
$query = "delete from choose where id='$id'  ";
$res = mysqli_query($conn,$query);


if($res){
    echo  "<script> alert('Your content successfully deleted');
    window.location.href='choose_show';
    </script>";
         }
         else
         {      
            echo  "<script> alert('Your content not deleted');
            window.location.href='choose_show';
            </script>";         
         }

// header("location:choose_show");
?>