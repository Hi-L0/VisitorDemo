<!--partie visiteurs cote admin-->
<?php
    require_once("mysession.php");
    require_once("connectiondb.php");
    // $rq="select nom,prenom,cin,date,heure_entree, heure_sortie from visiteur,visite where visiteur.id_visiteur=visite.id_visiteur";
    // $result=$pdo->query($rq);

    $size=isset($_GET['size'])?$_GET['size']:6;
    $page=isset($_GET['page'])?$_GET['page']:1;
    $offset=($page-1)*$size;


    $searchnom= isset($_GET['searchnom'])?$_GET['searchnom']:"";
    // $service=isset($_GET['searchnom'])?$_GET['searchnom']:"all";
    
    if(empty($searchnom)){
        $rq="select distinct * from visiteur
        limit $size
        offset $offset";  
             //order by date*
       
        $reqcount="select COUNT(nom) visiteur from visiteur";
    }
    else{
        $rq="select * from visiteur 
        where nom like '%$searchnom%'
        or prenom like '%$searchnom%'";
        

        $reqcount="select COUNT(nom) visiteur from visiteur 
        where nom like'%$searchnom%' or prenom like '%$searchnom%'";
    }    
    $result=$pdo->query($rq);
    $resCount=$pdo->query($reqcount);
    $tabCount=$resCount->fetch();
    $nbrvisiteurs=$tabCount['visiteur'];
    $reste=$nbrvisiteurs % $size;
    if($reste==0){
        $nbrpage = $nbrvisiteurs / $size;
    }
    else{
        $nbrpage = floor($nbrvisiteurs / $size) + 1;
    }
    $service="select nomservice from service,visite
    where service.id_service=visite.id_service";
    $servicequery=$pdo->query($service);
    
    
?> 

<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
    <link rel="shortcut icon" sizes="114x114" type="image/x-icon" href="favicon.ico" >
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .margetop{
            margin-top: 76px;
            margin-left: 150px;
        }

        .margeCard{
            margin-left: 150px;
        }
        .searchCard{
            height: 110px ;
        }
    </style>

</head>
<body>
	<header>
		<!-- header -->
        <?php 
            include("dashboard-admin.php");    //menu2==> càd menu withot connection link + items +admin icon prolly
        ?>
	</header>

    
	
    <div class="container">
        <div class="card  margetop">
            <h6 class="card-header" style="color: green;">Search bar</h6>
            <div class="card-body ">
                <form method="get" action="admin-panel(visiteur).php" class="form-inline">
                    <div class="form-group">
                        <input type="text" name="searchnom" class="form-control" value="<?php echo $searchnom?>" placeholder="chercher visiteur">
                    </div> &nbsp;&nbsp;&nbsp;
                    <!-- <label>Service visité :</label>&nbsp; -->
                    <!-- <div class="form-group">
                        <select class="form-control" name="service">
                            <option value="all" <?php if($service=="all") echo "selected" ?>>Tous les services</option>
                            <?php while($row=$servicequery->fetch()){?>
                                <option>
                                    <?php echo $row['nomservice'] ?>
                                </option>
                                <?php }?> -->
                            <!-- </?php while ()?> -->
                            <!-- <option value="sg" <?php if($service=="sg") echo "selected" ?>>Secrétaire Génerale FP</option>
                            <optgroup label="Direction affaires administratives et ressouce humaines">Direction affaires administratives et ressouce humaines  
                                <optgroup label="Division Ressources Humaines">
                                    <option value="sgap" <?php if($service=="sgap") echo "selected" ?>>service gestion affaires du personnel</option>
                                    <option value="sgcp" <?php if($service=="sgcp") echo "selected" ?>>service gestion carriere du personnel</option>
                                </optgroup>
                                <optgroup label="Division Ressources Humaines">
                                    <option value="spb" <?php if($service=="spb") echo "selected" ?>>Service Programmation et Budget</option>
                                    <option value="sagp" <?php if($service=="sagp") echo "selected" ?>>Service affaires génerale et parq </option>
                                    <option value="scm" <?php if($service=="scm") echo "selected" ?>>Service comptabilité et marchés</option>
                                    <option value="si" <?php if($service=="si") echo "selected" ?>>Service informatique</option>
                                </optgroup>
                                <optgroup label="Division affaires Juridique et relation avec le citoyen">    
                                    <option value="saf" <?php if($service=="saf") echo "selected" ?>>Service affaires Juridique</option>
                                    <option value="src" <?php if($service=="src") echo "selected" ?>>Service relation avec le citoyen </option>
                                </optgroup>
                            </optgroup>

                            <optgroup label="Direction Planification et Evaluation">
                                    
                                    <option value="ssps" <?php if($service=="ssps") echo "selected" ?>>Service secteur primaire et secondaire</option>
                                    <option value="sst" <?php if($service=="sst") echo "selected" ?>>Service secteur tertiaire</option>
                                    <option value="sc" <?php if($service=="sc") echo "selected" ?>>Service Carte</option>
                                    <option value="sio" <?php if($service=="sio") echo "selected" ?>>Service information et orientation</option>
                                    <option value="ssil" <?php if($service=="ssil") echo "selected" ?>>Service suivi insertion des lauréats</option>
                                    <option value="se" <?php if($service=="se") echo "selected" ?>>Service Evaluation</option>
                                    <option value="scomm" <?php if($service=="scomm") echo "selected" ?>>Service Communication</option>
                            </optgroup>
                            <optgroup label="Direction Coordination Pédagogique et Secteur Privé">
                                <option value="saps" <?php if($service=="saps") echo "selected" ?>>Service autorisations et promotion du secteur</option>
                                <option value="sqa" <?php if($service=="sqa") echo "selected" ?>>Service Qualification et Accreditation</option>
                                <option value="sctrl" <?php if($service=="sctrl") echo "selected" ?>>Service Controle</option>
                                <option value="spsps" <?php if($service=="spsps") echo "selected" ?>>Service Programmes Secteur Primaire et Secondaire</option>
                                <option value="spst" <?php if($service=="spst") echo "selected" ?>>Service Progrmmes Secteur tertiaire</option>
                                <option value="spfe" <?php if($service=="spfe") echo "selected" ?>>Service Personnel Formateur et d'Encadrement</option>
                                <option value="secg" <?php if($service=="secg") echo "selected" ?>>Service Examens et Concours Général</option>
                                <option value="sn" <?php if($service=="sn") echo "selected" ?>>Service Normalisation</option>
                            </optgroup>
                            <optgroup label="Direction Formation en Millieu Professionnel">
                                <option value="sgp" <?php if($service=="sqp") echo "selected" ?>>Service Gestion et Promotion de FCE</option>
                                <option value="scf" <?php if($service=="scf") echo "selected" ?>>Service Controle De la FCE</option>
                                <option value="seif" <?php if($service=="seif") echo "selected" ?>>Service Etude d'Impact de la FCE</option>
                                 <option value="saap" </?php if($service=="saap") echo "selected" ?>>Service Apprentissage Agriculture et Peche</option>
                                <option value="saa" </?php if($service=="saa") echo "selected" ?>>Service Apprentissage Artisanat</option> 
                                <option value="satc" </?php if($service=="satc") echo "selected" ?>>Service Apprentissage Textile et Cuire</option>
                                <option value="sat" </?php if($service=="sat") echo "selected" ?>>Service Apprentissage Tourisme</option>
                                <option value="sabi" </?php if($service=="sabi") echo "selected" ?>>Service Apprentissage BTP et IMMEE</option>
                                
                                <option value="sfpa" <?php if($service=="sfpa") echo "selected" ?>>Service Formation Professionnelle Altérnée</option>
                            </optgroup>
                            <optgroup label="Direction Formation des Détenus">
                                <option value="sfp" <?php if($service=="sfp") echo "selected" ?>>Service formation pensionnaire des CRE</option>
                                <option value="sfda" <?php if($service=="sfda") echo "selected" ?>>Service Formation des détenus adultes</option>
                            </optgroup>
                            <optgroup label="Direction Coopération et Partenariat">
                                <option value="som" <?php if($service=="som") echo "selected" ?>>Service Coopération Multilatérale </option>
                                <option value="scb" <?php if($service=="scb") echo "selected" ?>>Service Coopération Bilatérale</option>
                                <option value="sp" <?php if($service=="sp") echo "selected" ?>>Service Partenariat</option>
                            </optgroup>                           
                        </select> 
                    </div-->&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                    <button class="btn btn-success" type="submit"><i class="bi bi-search"></i>&nbsp; search.. </button>
                </form>
            </div>
        </div>
       <br>
        <div class="card margeCard"> 
            <h5 class="card-header bg-primary text-white "> Les Visiteurs (<?php echo $nbrvisiteurs ?> visiteur<?php if($nbrvisiteurs>1){echo "s";}?>)</h5>
            <div class="card-body">
                <table class="table table-striped table-hover">
                    <thead>

                        <th align="left"> Nom </th>
                        <th align="left">Prenom</th>
                        <th align="left"> Cin/Carte de séjour  </th>
                        <th align="left">Tel</th>
                        <th align="left">Adresse</th>
                        <!-- <th align="left">service visité</th>
                        <th align="left">objet</th>
                        <th align="left" width="150px"> date visite </th>
                        <th align="left"> heure visite </th> -->
                        <?php if($_SESSION['user']['ROLE']=='admin'){?><th align="left">Action</th><?php } ?>
                        
                    </thead>
                    <tbody>
                        <?php
                            while($row=$result->fetch()){ ?>
                            <tr>                                <!-- attention au majuscules nom-->
                                <td><?php echo strtoupper($row['NOM'])?></td>
                                <td><?php echo ucwords($row['PRENOM'])?></td>
                                <td><?php echo strtoupper($row['CIN'])?></td>
                                <td><?php echo $row['TEL']?></td>
                                <td><?php echo strtoupper($row['ADRESSE']) ?></td>
                                <!-- <td><?php echo $row['nomservice'] ?></td>
                                <td><?php echo $row['objet']?></td>
                                <td><?php echo $row['date']?></td>
                                <td><?php echo $row['heure_entree']?></td> -->
                                <!-- <td><//?php echo $row['HEURE_SORTIE']?></td> -->
                                <?php if($_SESSION['user']['ROLE']=='admin'){?>        <td>
                                    <a href="modifierVisiteur.php?idVisiteur=<?php echo $row['ID_VISITEUR'] ?>" class="bi bi-pencil-square"></a> &nbsp;
                                    <a href="supprimerVisiteur.php?idVisiteur=<?php echo $row['ID_VISITEUR'] ?>" class="bi bi-trash" onclick="javascript: return confirm('etes vous sur de vouloir supprimer');"></a> 
                                </td><?php }?>
                            </tr>
                        <?php }?>
                    </tbody>
                </table>
                <div>
                    <ul class="pagination">
                        <?php for($i=1;$i<=$nbrpage;$i++){?> 
                        <li class="page-item <?php if($i==$page) echo 'active';?>">
                            <a href="admin-panel(visiteur).php?page=<?php echo $i ?>" class="page-link"> <?php echo $i; ?></a>
                        </li>
                        <?php } ?>
                    </ul> 
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->


</body>
</html>
