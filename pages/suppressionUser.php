<!--suppressionUser-->
<?php
session_start();
if(isset($_SESSION['user'])){
require_once('connectiondb.php');
$idUser=isset($_GET['idUser'])?$_GET['idUser']:0;
//s'il y a des visites effectuées à ce service on ne peut pas le supprimer 
// $rqvisite="select count(*) visite from visite where id_service=$id_service";
// $resultCount=$pdo->query($rqvisite);
// $tabVisite=$resultCount->fetch();
// $nbrVisite=$tabVisite['visite'];
$rq="delete from utilisateur where ID_user=?";
$params=array($idUser);
$result=$pdo->prepare($rq);
$result->execute($params);
header('location:admin-panel(users).php');
}
else{
    header('location:registration.php');
}
?>