<?php
session_start();
if(isset($_SESSION['user'])){
     require_once('connectiondb.php');
     $id_service=isset($_POST['id_service'])?$_POST['id_service']:0;
     $nomservice=isset($_POST['nomservice'])?$_POST['nomservice']:"";
     $abv=isset($_POST['abv'])?$_POST['abv']:"";
     $etage=isset($_POST['etage'])?$_POST['etage']:"";

     $rq="update service set ABVNOMSERVICE=?, NOMSERVICE=?, ETAGE=?  where ID_SERVICE=?";
     $params=array($abv,$nomservice,$etage,$id_service);
     $result=$pdo->prepare($rq);
     $result->execute($params);
     header('location:admin-panel(services).php');
}
else{
     header("location:registration.php");
}    
    
?>