<?php
include "../../connection.php";   

$id = $_GET['id'];
$query = "delete from logo where id='$id'  ";
$res = mysqli_query($conn,$query);
header("location:logo_show");
?>