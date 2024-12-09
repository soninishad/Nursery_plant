<?php
include "../../connection.php";   

$id = $_GET['id'];
$query = "delete from login_background where id='$id'  ";
$res = mysqli_query($conn,$query);
header("location:loginbackground_show");
?>