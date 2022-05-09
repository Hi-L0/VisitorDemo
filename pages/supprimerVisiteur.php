<!-- supprimerVisiteur -->
<?php
session_start();
if(isset($_SESSION['user'])){
require_once('connectiondb.php');
$idVisiteur=isset($_GET['idVisiteur'])?$_GET['idVisiteur']:0;
//s'il y a des visites effectuées à ce service on ne peut pas le supprimer 
// $rqvisite="select count(*) visite from visite where id_service=$id_service";
// $resultCount=$pdo->query($rqvisite);
// $tabVisite=$resultCount->fetch();
// $nbrVisite=$tabVisite['visite'];
// $deleteVisite="delete from visite where ID_visiteur=?";
// $params=array($idVisiteur);
// $resultVisite=$pdo->prepare($deleteVisite);
// $resultVisite->execute($params);


$rqvisite="select count(*) visite from visite where id_visiteur=$idVisiteur";
 $resultCount=$pdo->query($rqvisite);
 $tabVisite=$resultCount->fetch();
 $nbrVisite=$tabVisite['visite'];


if($nbrVisite==0)
 {
    $rq="delete from visiteur where id_visiteur=?";
    $params=array($idVisiteur);
    $result=$pdo->prepare($rq);
    $result->execute($params);
    header('location:admin-panel(visiteur).php');
 }
 else{
    $msg="suppression impossible des visites sont efféctuées";
    header("location:alert.php?message=$msg");
 }
}
else{
   header('location:registration.php');
}

?>