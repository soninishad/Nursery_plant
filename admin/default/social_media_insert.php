<?php
include "../../connection.php";   

$icons = $_POST['icons'];
$url = $_POST['url'];
$query = "INSERT INTO `social_media`(`icons`, `url`) VALUES ('$icons','$url') ";
$res=mysqli_query($conn,$query);


if($res){
   
     echo  "<script> alert('Your content successfully Inserted');
     window.location.href='social_media_show';
     </script>";
 
          }
          else
          {      
             echo  "<script> alert('Your content not Inserted ');
             window.location.href='social_media_add';
             </script>";         
  }

//  header("location:social_media_show");
?>