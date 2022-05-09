<!--Masession-->
<?php
session_start();
if(!isset($_SESSION['user'])){
    header('location:registration.php');
} 

?>