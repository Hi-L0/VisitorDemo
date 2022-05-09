<?php 
session_start();
if(isset($_SESSION['user'])){
    require_once('connectiondb.php');
    $nomservice=isset($_POST['nomservice'])?$_POST['nomservice']:"";
    $abv=isset($_POST['abv'])?$_POST['abv']:"";
    $etage=isset($_POST['etage'])?$_POST['etage']:"";

    $rq="insert into service(abvnomservice,nomservice,etage) values (?,?,?)";
    $params=array($abv,$nomservice,$etage);
    $result=$pdo->prepare($rq);
    $result->execute($params);
    header('location:admin-panel(services).php');
}
else{
    header('location:registration.php');
}
?>