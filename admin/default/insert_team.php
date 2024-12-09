<?php
include "../../connection.php";   

$file=$_FILES['file']['name'];
$file_loc=$_FILES['file']['tmp_name'];
$file_size=$_FILES['file']['size'];
$file_type=$_FILES['file']['type'];
$name=$_POST['name'];
$designation=$_POST['designation'];
$folder="../../upload/";
move_uploaded_file($file_loc,$folder.$file);
// $con=mysqli_connect("localhost","root","","nurseray_plant");
$query="insert into team(image,name,designation) values('$file','$name','$designation')";
$res=mysqli_query($conn,$query);


if($res){
   
     echo  "<script> alert('Your content successfully Inserted');
     window.location.href='show_team';
     </script>";
 
          }
          else
          {      
             echo  "<script> alert('Your content not Inserted ');
             window.location.href='add_team';
             </script>";         
  }
 
//  header("location:show_team");
?>