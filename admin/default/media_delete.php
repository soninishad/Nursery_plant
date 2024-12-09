<?php
include "../../connection.php";   

$id = $_GET['id'];
$query = "delete from media where id='$id'  ";
$res = mysqli_query($conn,$query);

header("location:media_show");

?>