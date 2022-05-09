<!--supprimervisite-->
<?php
session_start();
if(isset($_SESSION['user'])){
require_once('connectiondb.php');
$idVisite=isset($_GET['idVisite'])?$_GET['idVisite']:0;
$idVisiteur=isset($_GET['idVisiteur'])?$_GET['idVisiteur']:0;
//s'il y a des visites effectuées à ce service on ne peut pas le supprimer 
// $rqvisite="select count(*) visite from visite where id_service=$id_service";
// $resultCount=$pdo->query($rqvisite);
// $tabVisite=$resultCount->fetch();
// $nbrVisite=$tabVisite['visite'];
$rqsupressionFiche="delete from fiche where ID_VISITE=?";
$params=array($idVisite);
$result=$pdo->prepare($rqsupressionFiche);
$result->execute($params);

$rqvisite="select count(*) visite from visite where id_visiteur=$idVisiteur";
 $resultCount=$pdo->query($rqvisite);
 $tabVisite=$resultCount->fetch();
 $nbrVisite=$tabVisite['visite'];
if($nbrVisite<=1){
    
    // delete visite 
    $rq="delete from visite where ID_visite=?";
    $params=array($idVisite);
    $result=$pdo->prepare($rq);
    $result->execute($params);
    //then delete visiteur
    $rq="delete from visiteur where id_visiteur=?";
    $params=array($idVisiteur);
    $result=$pdo->prepare($rq);
    $result->execute($params);

    header('location:admin-panel(visite).php');
}else{
$rq="delete from visite where ID_visite=?";
$params=array($idVisite);
$result=$pdo->prepare($rq);
$result->execute($params);
// echo $idVisite;
header('location:admin-panel(visite).php');}
}else{
    header('location:registration.php');
}
?>