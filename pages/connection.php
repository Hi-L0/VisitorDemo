<?php
	session_start();
	require_once('connectiondb.php');
	$nom=isset($_POST['nom'])?$_POST['nom']:"";
	$prenom=isset($_POST['prenom'])?$_POST['prenom']:"";
	$cin=isset($_POST['cin'])?$_POST['CIN']:"";
	$tel=isset($_POST['Tel'])?$_POST['Tel']:"";
	$adresse=isset($_POST['adresse'])?$_POST['adresse']:""; //still not finished
	// if(session_id()=='')
	// {	session_start();}
	$bool = true;
	$con=mysqli_connect("localhost", "root" ,"","gestion_visiteur");
	if($con==false){
	die("could not connect".mysqli_connect_error()); 		//connexion cote serveur*/
	}							
	// mysqli_select_db("formdatabase") or die("cannot connect to database"); //connexion de la base de données
	$usernom=mysqli_real_escape_string($con, $_POST['nom']);
	$userprenom=mysqli_real_escape_string($con, $_POST['prenom']);
	$usercin=mysqli_real_escape_string($con, $_POST['CIN']);
	$usertel=mysqli_real_escape_string($con, $_POST['Tel']);
	$useradresse=mysqli_real_escape_string($con, $_POST['adresse']);
	// $_SESSION['nom']=$usernom;
	// $_SESSION['prenom']=$userprenom;
	// $_SESSION['CIN']=$usercin;
	// $_SESSION['Tel']=$usertel;
	// $_SESSION['adresse']=$useradresse;
	
	$idVisiteur=isset($_POST['id_visiteur'])?$_POST['id_visiteur']:0;
	
	if(strlen($usertel)!=10){
		//echo "format telephone incorrect"
		include("FormVisite.php"); 
		
	}
	// if (isset($_POST['envoyer'])) {
 	# code...
 	else{ 
		$sql="INSERT INTO visiteur (nom,prenom,cin,tel,adresse) VALUES ('$usernom','$userprenom','$usercin','$usertel','$useradresse')";
			if(mysqli_query($con,$sql))
			{
				header("location:FormVisite2.php");
				// echo "<span style='color: green;'>new record created successfully!<span>";
			} 
			else
			{
				include("FormVisite.php");
				echo "<span style='color:red'> ERROR: ". $sql . " ".mysqli_error($con)."</span>";
			}
	//}
	}
	mysqli_close($con);

	// session_destroy();

// $_SESSION=

	// if($_SERVER["REQUEST_METHOD"]=="POST"){
// 	$usernom=mysql_reql_escape_string($_POST['nom']);
// 	$userprenom=mysql_reql_escape_string($_POST['prenom']);
// 	$usercin=mysql_reql_escape_string($_POST['cin']);
// 	$usertel=mysql_reql_escape_string($_POST['Tel']);
// 	$useradresse=mysql_reql_escape_string($_POST['adresse']);
// 	$bool = true;
// 	$con=mysqli_connect("localhost", "root" ,"","formdatabase") 
// 	if($con===false){
// 	die("could not connect".mysqli_connect_error()); 		//connexion cote serveur*/
// 	}							
	// mysqli_select_db("formdatabase") or die("cannot connect to database"); //connexion de la base de données

	
	// $query=mysqli_query("select * from visiteur"); //selection de tous les visiteur
	//  while ($row = mysqli_fetch_array($query)
	//  {
	//  	# code...
	//  	$table_visitCin = $row['CIN'];
	//	}
//}

?>