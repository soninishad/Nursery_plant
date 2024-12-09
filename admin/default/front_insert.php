<?php
include "../../connection.php";   

$id=$_POST['id'];
$address = $_POST['address'];
$email = $_POST['email'];
$contact = $_POST['contactno'];
$contactinfo=$_POST['contactinfo'];
$query="insert into header(address,email,contactno,contactinfo) values('$address','$email','$contactno','$contactinfo')";
$res=mysqli_query($conn,$query);


if($res){
   
     echo  "<script> alert('Your content successfully Inserted');
     window.location.href='front_show';
     </script>";
 
          }
          else
          {      
             echo  "<script> alert('Your content not inserted');
             window.location.href='front_header_add';
             </script>";         
  }
?>