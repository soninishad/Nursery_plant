<?php
include "../../connection.php";   

$heading=$_POST['heading'];
$paragraph=$_POST['paragraph'];
$query="insert into home_content(heading,paragraph) values('$heading','$paragraph')";
$res=mysqli_query($conn,$query);

if($res){
   
    echo  "<script> alert('Your content successfully Inserted');
    window.location.href='welcome_show';
    </script>";

         }
         else
         {      
            echo  "<script> alert('Your content not Inserted ');
            window.location.href='welcome_add';
            </script>";         
 }
// header("location:welcome_show");

?>