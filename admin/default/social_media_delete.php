<?php

include "../../connection.php";   

$id = $_GET['id'];
$query = "delete from social_media where id='$id'  ";
$res = mysqli_query($conn,$query);

header("location:social_media_show");

?>