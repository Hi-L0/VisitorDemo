<!--insertUser-->
<?php 
session_start();
if(isset($_SESSION['user'])){
require_once('connectiondb.php');
$login=isset($_POST['login'])?$_POST['login']:"";
$email=isset($_POST['email'])?$_POST['email']:"";
$pw=isset($_POST['pw'])?$_POST['pw']:"";
$role=isset($_POST['role'])?$_POST['role']:"";
$etat=isset($_POST['etat'])?$_POST['etat']:"";

$rq="insert into utilisateur(login,email,password,role,etat) values (?,?,md5(?),?,?)";
$params=array($login,$email,$pw,$role,$etat);
$result=$pdo->prepare($rq);
$result->execute($params);
header('location:admin-panel(users).php');
}
else{
    header('location:registration.php');
}
?>