<?php
include "../../connection.php";   

$id=$_POST['id'];
$icons = $_POST['icons'];
$url = $_POST['url'];
$query = "UPDATE `social_media` SET`icons`='$icons',`url`='$url' WHERE id='$id' ";
$res=mysqli_query($conn,$query);


if($res){
   
     echo  "<script> alert('Your content successfully Updated');
     window.location.href='social_media_show';
     </script>";
 
          }
          else
          {      
             echo  "<script> alert('Your content not Updated ');
             window.location.href='social_media_edit';
             </script>";         
  }


?>