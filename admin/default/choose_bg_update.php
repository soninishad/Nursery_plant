<?php
include "../../connection.php";   

$id=$_POST['id'];
$file=$_FILES['file']['name'];
$file_loc=$_FILES['file']['tmp_name'];
$file_size=$_FILES['file']['size'];
$file_type=$_FILES['file']['type'];
$folder="../../upload/";
move_uploaded_file($file_loc,$folder.$file);
// $con=mysqli_connect("localhost","root","","nurseray_plant");
$query = "UPDATE `choose_bg` SET`image`='$file' WHERE id='$id' ";
$res=mysqli_query($conn,$query);


if($res){
   
     echo  "<script> alert('Your content successfully Updated');
     window.location.href='choose_bg_show';
     </script>";
 
          }
          else
          {      
             echo  "<script> alert('Your content not updated');
             window.location.href='choose_bg_show';
             </script>";         
  }

//  header("location:choose_bg_show");
?>