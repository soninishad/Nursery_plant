<?php
include "../../connection.php";   

$id = $_GET['id'];
// $con = mysqli_connect("localhost","root","","nurseray_plant");
$query = "delete from about_thought where id='$id'  ";
$res = mysqli_query($conn,$query);


if($res){
    echo  "<script> alert('Your content successfully deleted');
    window.location.href='about_thought_show';
    </script>";
         }
         else
         {      
            echo  "<script> alert('Your content not deleted');
            window.location.href='about_thought_show';
            </script>";         
         }

// header("location:about_thought_show");
?>