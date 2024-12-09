<?php
include "../../connection.php";   

$id=$_POST['id'];
$about = $_POST['about'];
$query = "UPDATE `footer` SET`about`='$about' WHERE id='$id' ";
$res=mysqli_query($conn,$query);


if($res){
     echo  "<script>alert('Your Content Successfully Update');
     window.location.href='footer_show';
     </script>";
 
          }
          else
          {      
             echo "<script>alert('Failed to Update');
             window.location.href='footer_edit';
             </script>";         
  }

?>