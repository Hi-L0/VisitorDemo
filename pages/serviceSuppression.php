<?php
session_start();
if(isset($_SESSION['user'])){
 require_once('connectiondb.php');
 $id_service=isset($_GET['id_service'])?$_GET['id_service']:0;
//s'il y a des visites effectuées à ce service on ne peut pas le supprimer 
 $rqvisite="select count(*) visite from visite where id_service=$id_service";
 $resultCount=$pdo->query($rqvisite);
 $tabVisite=$resultCount->fetch();
 $nbrVisite=$tabVisite['visite'];


if($nbrVisite==0)
 {
    $rq="delete from service where ID_SERVICE=?";
    $params=array($id_service);
    $result=$pdo->prepare($rq);
    $result->execute($params);
    header('location:admin-panel(services).php');
 }
 else{
    $msg="suppression impossible des visites sont efféctuées";
    header("location:alert.php?message=$msg");
 }
}
else{
   header("location:registration.php");
}

 

?>