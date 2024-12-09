<?php

include "../../connection.php";   

$id = $_GET['id'];
$query = "delete from map where id='$id'  ";
$res = mysqli_query($conn,$query);
header("location:map_show");
?>