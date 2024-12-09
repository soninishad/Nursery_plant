<?php
include "../../connection.php";   

$id=$_POST['id'];
$address = $_POST['address'];
$email = $_POST['email'];
$contactno = $_POST['contactno'];
$contactinfo = $_POST['contactinfo'];
$query = "UPDATE `header`SET`address`='$address',`email`='$email',`contactno`='$contactno',`contactinfo`='$contactinfo'  WHERE id='$id' ";
$res=mysqli_query($conn,$query);


if($res){
     echo  "<script>alert('Your Content Successfully Update');
     window.location.href='front_show';
     </script>";
 
          }
          else
          {      
             echo "<script>alert('Failed to Update');
             window.location.href='front_edit';
             </script>";         
  }

?>