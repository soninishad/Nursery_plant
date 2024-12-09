<?php

include "../../connection.php";   
$file=$_FILES['file']['name'];
$file_loc=$_FILES['file']['tmp_name'];
$title=$_POST['title'];
$file_size=$_FILES['file']['size'];
$file_type=$_FILES['file']['type'];
$paragraph=$_POST['paragraph'];
$description=$_POST['description'];
$url=$_POST['url'];
$date = date("d-M-Y");
$folder="../../upload/";
move_uploaded_file($file_loc,$folder.$file);
$query = "INSERT INTO `services`( `image`, `title`, `paragraph`, `description`,`url`,`created_date`) 
VALUES ('$file','$title','$paragraph','$description','$url', Now())";
$res=mysqli_query($conn,$query);


if($res){
   
     echo  "<script> alert('Your content successfully Inserted');
     window.location.href='show_services';
     </script>";
 
          }
          else
          {      
             echo  "<script> alert('Your content not Inserted ');
             window.location.href='add_services';
             </script>";         
  }
 
?>