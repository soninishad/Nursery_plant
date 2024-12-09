<?php

include "../../connection.php";   
$file=$_FILES['file']['name'];
$file_loc=$_FILES['file']['tmp_name'];
$file_size=$_FILES['file']['size'];
$file_type=$_FILES['file']['type'];
$client_name=$_POST['client_name'];
$description = $_POST['description'];
$address = $_POST['address'];
$area = $_POST['area'];
$date = date("d-M-Y");
$amount = $_POST['amount'];
$gardner = $_POST['gardner'];
$folder="../../upload/";
move_uploaded_file($file_loc,$folder.$file);
$query = "INSERT INTO `clients`(`image`, `client_name`, `description`,`address`, `area`, `date`, `amount`, `gardner`) 
VALUES ('$file','$client_name','$description','$address','$area', Now(),'$amount','$gardner') ";
$res=mysqli_query($conn,$query);



if($res){
   
     echo  "<script> alert('Your content successfully Inserted');
     window.location.href='show_clients';
     </script>";
 
          }
          else
          {      
             echo  "<script> alert('Your content not inserted');
             window.location.href='add_clients';
             </script>";         
  }

?>