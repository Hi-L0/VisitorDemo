<!--updateVisiteur-->
<?php
session_start();
if(isset($_SESSION['user'])){
     require_once('connectiondb.php');
     $idVisiteur=isset($_POST['idVisiteur'])?$_POST['idVisiteur']:0;
     $nom=isset($_POST['nom'])?$_POST['nom']:"";
     $prenom=isset($_POST['prenom'])?$_POST['prenom']:"";
     $cin=isset($_POST['cin'])?$_POST['cin']:"";
     $tel=isset($_POST['tel'])?$_POST['tel']:"";
     $adresse=isset($_POST['adresse'])?$_POST['adresse']:"";

     $rq="update service set nom=?, prenom=?, tel=?, adresse=?  where id_visiteur=?";
     $params=array($nom,$prenom,$tel,$adresse,$idVisiteur);
     $result=$pdo->prepare($rq);
     $result->execute($params);
     header('location:admin-panel(visiteur).php');
}
else{
     header('location:registration.php');
} 
    
?>