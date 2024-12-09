<?php
include "../../connection.php";   

$id = $_GET['id'];
$query = "delete from header where id='$id'  ";
$res = mysqli_query($conn,$query);
header("location:front_show");
?>