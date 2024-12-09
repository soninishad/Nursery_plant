<?php

include "../../connection.php";   

$file=$_FILES['file']['name'];
$file_loc=$_FILES['file']['tmp_name'];
$file_size=$_FILES['file']['size'];
$file_type=$_FILES['file']['type'];
$folder="../../upload/";
move_uploaded_file($file_loc,$folder.$file);
$query="insert into logo(image) values('$file')";
$res=mysqli_query($conn,$query);


if($res){
   
     echo  "<script> alert('Your content successfully Inserted');
     window.location.href='logo_show';
     </script>";
 
          }
          else
          {      
             echo  "<script> alert('Your content not Inserted ');
             window.location.href='logo_add';
             </script>";         
  }


?>