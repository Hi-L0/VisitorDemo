<!--connection2-->


<?php

// session_start();
// if(!empty($_SESSION['visiteur'])){
 require_once('connectiondb.php');
$con=mysqli_connect("localhost", "root" ,"","gestion_visiteur");
if($con==false){
die("could not connect".mysqli_connect_error()); 		//connexion cote serveur*/
 }
$rq="select max(id_visiteur) last_id from visiteur";
$residVisiteur=$pdo->query($rq);
$tab=$residVisiteur->fetch();
$idVisiteur=$tab['last_id'];						
// mysqli_select_db("formdatabase") or die("cannot connect to database"); //connexion de la base de données
$abv=isset($_POST['abv'])?$_POST['abv']:'';
$result=$pdo->query("select id_service idservice from service where abvnomservice='$abv'");
$tabS=$result->fetch();
$idservice=$tabS['idservice'];

//echo $idService;
$objetVisite=isset($_POST['objetVisite'])?$_POST['objetVisite']:"";
$date=isset($_POST['date'])?$_POST['date']:"";
$heurEntree=isset($_POST['time'])?$_POST['time']:"";
$currentdate=getdate();
// echo ($idservice." ");
// echo ($idVisiteur." ");
// echo ($heurEntree." ") ;
// echo ($date." ");
// echo ($objetVisite." ");
// echo($currentdate);
// echo $heure;

// if (isset($_POST['envoyer'])) {
 # code...

 
$sql="insert into visite(id_service,id_visiteur,objet,date,heure_entree) values (?,?,?,?,?)";
$params=array($idservice,$idVisiteur,$objetVisite,$date,$heurEntree);
$resVisite=$pdo->prepare($sql);
$resVisite->execute($params);



    // if(mysqli_query($con,$sql))
    // {
header("location:impression.php");
        // echo "<span style='color: green;'>new record created successfully!<span>";
    //} 

//}




// // session_destroy();

// // $_SESSION=

// // if($_SERVER["REQUEST_METHOD"]=="POST"){
// // 	$usernom=mysql_reql_escape_string($_POST['nom']);
// // 	$userprenom=mysql_reql_escape_string($_POST['prenom']);
// // 	$usercin=mysql_reql_escape_string($_POST['cin']);
// // 	$usertel=mysql_reql_escape_string($_POST['Tel']);
// // 	$useradresse=mysql_reql_escape_string($_POST['adresse']);
// // 	$bool = true;
// // 	$con=mysqli_connect("localhost", "root" ,"","formdatabase") 
// // 	if($con===false){
// // 	die("could not connect".mysqli_connect_error()); 		//connexion cote serveur*/
// // 	}							
// // mysqli_select_db("formdatabase") or die("cannot connect to database"); //connexion de la base de données


// // $query=mysqli_query("select * from visiteur"); //selection de tous les visiteur
// //  while ($row = mysqli_fetch_array($query)
// //  {
// //  	# code...
// //  	$table_visitCin = $row['CIN'];
// //	}
// //}



?>