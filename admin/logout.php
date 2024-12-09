<?php
session_start();
$_SESSION = [];
session_unset();
session_destroy();

echo  "<script> alert('logout successful');
window.location.href='index';
</script>";
?>



