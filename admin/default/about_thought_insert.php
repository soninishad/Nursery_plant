<?php
include "../../connection.php";   

$heading=$_POST['heading'];
$paragraph=$_POST['paragraph'];
$image=$_FILES['image']['name'];
$image_loc=$_FILES['image']['tmp_name'];
$image_size=$_FILES['image']['size'];
$image_type=$_FILES['image']['type'];
$folder="../../upload/";
move_uploaded_file($image_loc,$folder.$image);
// $con=mysqli_connect("localhost","root","","nurseray_plant");
$query="insert into about_thought (heading,paragraph,image) values('$heading','$paragraph','$image')";
$res=mysqli_query($conn,$query);


if($res){
   
    echo  "<script> alert('Your content successfully Inserted');
    window.location.href='about_thought_show';
    </script>";

         }
         else
         {      
            echo  "<script> alert('Your content not inserted');
            window.location.href='about_thought_edit';
            </script>";         
 }

// header("location:about_thought_show");

?>