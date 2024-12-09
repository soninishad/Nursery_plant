<?php
include "../../connection.php";   

$map=$_POST['map'];
$query ="INSERT INTO `map`(`map`) VALUES ('$map')";
$res=mysqli_query($conn,$query);


if($res){
   
    echo  "<script> alert('Your content successfully Inserted');
    window.location.href='map_show';
    </script>";

         }
         else
         {      
            echo  "<script> alert('Your content not Inserted ');
            window.location.href='map';
            </script>";         
 }


?>