<?php
include "../../connection.php";   

$id = $_GET['id'];
$query = "delete from welcome_content where id='$id'  ";
$res = mysqli_query($conn,$query);

header("location:welcome_content_show");

?>