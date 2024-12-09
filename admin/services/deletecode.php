<?php

$id = $_GET['id'];
$con = mysqli_connect("localhost","root","","nurseray_plant");
$query = "delete from services where id='$id'  ";
$res = mysqli_query($con,$query);
header("location:showallproduct.php");
?>