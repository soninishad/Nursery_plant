<?php

include "../../connection.php";   
$file=$_FILES['file']['name'];
$file_loc=$_FILES['file']['tmp_name'];
$file_size=$_FILES['file']['size'];
$file_type=$_FILES['file']['type'];
$heading=$_POST['heading'];
$title=$_POST['title'];
$description=$_POST['description'];
$url=$_POST['url'];
$date = date("d-M-Y");
$folder="../../upload/";
move_uploaded_file($file_loc,$folder.$file);
$query="insert into project(image,heading,title,description,url,created_date) values('$file','$heading','$title','$description','$url',Now())";
$res=mysqli_query($conn,$query);

if($res){
   
     echo  "<script> alert('Your content successfully Inserted');
     window.location.href='show_project';
     </script>";
 
          }
          else
          {      
             echo  "<script> alert('Your content not inserted');
             window.location.href='add_project';
             </script>";         
  }

?>