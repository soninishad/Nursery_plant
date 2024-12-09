<?php
include "../../connection.php";   


$id= $_POST['id'];
$file=$_FILES['file']['name'];
$file_loc=$_FILES['file']['tmp_name'];
$file_size=$_FILES['file']['size'];
$file_type=$_FILES['file']['type'];
$heading = $_POST['heading'];
// $folder="./upload/";
$folder="../../upload/";
move_uploaded_file($file_loc,$folder.$file);
$query = "UPDATE `media` SET`image`='$file',`heading`='$heading' WHERE id='$id' ";
$res=mysqli_query($conn,$query);


if($res){
     echo  "<script> alert('Your content successfully Inserted');
     window.location.href='media_show';
     </script>";
 
          }
          else
          {      
             echo  "<script> alert('Your content not Inserted ');
             window.location.href='media_edit';
             </script>";         
  }

?>