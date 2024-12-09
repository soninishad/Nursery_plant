<?php
include "../../connection.php";   

$id = $_GET['id'];
$query = "delete from background where id='$id'  ";
$res = mysqli_query($conn,$query);

header("location:other_bg_show");

?>