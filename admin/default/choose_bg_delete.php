<?php
include "../../connection.php";   

$id = $_GET['id'];
// $con = mysqli_connect("localhost","root","","nurseray_plant");
$query = "delete from choose_bg where id='$id'  ";
$res = mysqli_query($conn,$query);
header("location:choose_bg_show");
?>