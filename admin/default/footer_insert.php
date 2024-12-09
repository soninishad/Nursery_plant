<?php
include "../../connection.php";   

$id=$_POST['id'];
$about = $_POST['about'];
$query="INSERT INTO`footer`(`about`) VALUES ('about')";
$res=mysqli_query($conn,$query);


if($res){
   
     echo  "<script> alert('Your content successfully Inserted');
     window.location.href='footer_show';
     </script>";
          }
          else
          {      
             echo  "<script> alert('Your content not inserted');
             window.location.href='footer_show';
             </script>";         
  }

?>