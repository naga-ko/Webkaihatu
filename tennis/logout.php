<?php
session_start();
if(isset($_SESSION['id'])){
    unset($_SESSION['id']);
}
header('Location: login.php');
?>

<!--
Q2
$_SESSION

Q3
session_destroy
-->