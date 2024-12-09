<?php
include "../../connection.php";   

$file=$_FILES['file']['name'];
$file_loc=$_FILES['file']['tmp_name'];
$file_size=$_FILES['file']['size'];
$file_type=$_FILES['file']['type'];
$folder="../../upload/";
move_uploaded_file($file_loc,$folder.$file);
$query = "INSERT INTO `testimonial_bg`(`image`) VALUES ('$file') ";
$res=mysqli_query($conn,$query);


if($res){
   
     echo "<script>alert('Your content successfully Inserted');
     window.location.href='testimonial_bg_show';
     </script>";
 
          }
          else
          {      
             echo  "<script>alert('Your content not Inserted ');
             window.location.href='testimonial_bg_add';
             </script>";         
  }


//  header("location:testimonial_bg_show");
?>