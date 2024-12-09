<?php
include "../../connection.php";   

$id = $_GET['id'];
$query = "delete from testimonial where id='$id'  ";
$res = mysqli_query($conn,$query);

header("location:testimonial_show");

?>