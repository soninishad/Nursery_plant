<?php
include "../../connection.php";   

$file=$_FILES['file']['name'];
$file_loc=$_FILES['file']['tmp_name'];
$file_size=$_FILES['file']['size'];
$file_type=$_FILES['file']['type'];
$heading=$_POST['heading'];
$title=$_POST['title'];
$folder="../../upload/";
move_uploaded_file($file_loc,$folder.$file);
$query = "INSERT INTO `welcome_content`(`image`, `heading`, `title`) VALUES ('$file','$heading','$title') ";
$res=mysqli_query($conn,$query);

if($res){
   
     echo  "<script> alert('Your content successfully Inserted');
     window.location.href='welcome_content_show';
     </script>";
 
          }
          else
          {      
             echo  "<script> alert('Your content not Inserted ');
             window.location.href='welcome_content_add';
             </script>";         
  }

//  header("location:welcome_content_show");
?>