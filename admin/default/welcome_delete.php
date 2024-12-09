<?php
include "../../connection.php";   

$id = $_GET['id'];
$query = "delete from home_content where id='$id'  ";
$res = mysqli_query($conn,$query);

header("location:welcome_show");

?>