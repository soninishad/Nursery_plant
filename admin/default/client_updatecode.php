<?php
include "../../connection.php";   

$id=$_POST['id'];
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
// $query = " UPDATE `clients` SET`image`='$file' WHERE id='$id'  ";
$query = " UPDATE `clients` SET `image`='$file',`client_name`='$client_name',`description`='$description',`address`='$address',
`area`='$area',`date`=Now(), `amount`='$amount',`gardner`='$gardner' WHERE id='$id'  ";
$res=mysqli_query($conn,$query);

if($res){
   
     echo  "<script> alert('Your content successfully updated');
     window.location.href='show_clients';
     </script>";
 
          }
          else
          {      
             echo  "<script> alert('Your content not updated');
             window.location.href='edit_clients';
             </script>";         
  }

//  header("location:show_clients");
?>