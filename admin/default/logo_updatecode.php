<?php
include "../../connection.php";   
$id= $_POST['id'];
$file=$_FILES['file']['name'];
$file_loc=$_FILES['file']['tmp_name'];
$file_size=$_FILES['file']['size'];
$file_type=$_FILES['file']['type'];
$folder="../../upload/";
move_uploaded_file($file_loc,$folder.$file);
$query = "UPDATE `logo` SET`image`='$file' WHERE id='$id' ";
$res=mysqli_query($conn,$query);


if($res){
   
     echo  "<script> alert('Your content successfully Updated');
     window.location.href='logo_show';
     </script>";
 
          }
          else
          {      
             echo  "<script> alert('Your content not Updated ');
             window.location.href='logo_edit';
             </script>";         
  }

//  header("location:logo_show");
?>