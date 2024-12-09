<?php
include "../../connection.php";   
session_start();

$image=$_FILES['image']['name'];
$image_loc=$_FILES['image']['tmp_name'];
$image_size=$_FILES['image']['size'];
$image_type=$_FILES['image']['type'];
$heading=$_POST['heading'];
$sub_heading=$_POST['sub_heading'];
$paragraph=$_POST['paragraph'];
$folder = "../../upload/";
move_uploaded_file($image_loc,$folder.$image);
$query = "insert into slider(image,heading,sub_heading,paragraph) values('$image','$heading', '$sub_heading' ,'$paragraph') ";
$res=mysqli_query($conn,$query);

if($res)
{
$_SESSION['status'] = "Slider added successfully";
echo  "<script> alert('Your content successfully Inserted');
window.location.href='show_slider';
</script>";
}
else
{
    $_SESSION['status'] = "slider faildes";
    echo  "<script> alert('Your content not inserted');
           window.location.href='add_slider';
           </script>"; 
}
?>