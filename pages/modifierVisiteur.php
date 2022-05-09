<!--modifiervisiteur.php-->
<?php
require_once("mysession.php");
    require_once('connectiondb.php');
    $idVisiteur=isset($_GET['idVisiteur'])?$_GET['idVisiteur']:0;
    // $abv=isset($_POST['abv'])?$_POST['abv']:"";
    $rq="select nom,prenom,cin,tel,adresse from visiteur where id_visiteur= '$idVisiteur'";
    $result=$pdo->query($rq);
    $visiteur=$result->fetch();
    $nom=$visiteur['nom'];
    $prenom=$visiteur['prenom'];
    $cin=$visiteur['cin'];
    $tel=$visiteur['tel'];
    $adresse=$visiteur['adresse'];
?> 

<!DOCTYPE html>
<html>
<head>
	<title>edition visiteur</title>
    <link rel="shortcut icon" sizes="114x114" type="image/x-icon" href="favicon.ico" >
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="formJs.js"></script>
    <style>
        .margetop{
            margin-top: 76px;
            margin-left: 150px;
            
        }
        .margeCard{
            margin-left: 150px;
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
        <div class="card margetop">
            <h6 class="card-header" style="color:green;">Modification visiteur</h6>
            <div class="card-body">
                <form method="POST" action="updateVisiteur.php" class="form">
                    <label>id visiteur : <?php echo $idVisiteur ?> </label>
                    <div class="form-group">
                        <input type="text" name="idVisiteur" id="idVisiteur" class="form-control" value="<?php echo $idVisiteur ?>" hidden>
                    </div>
                    <label>nom visiteur</label>
                    <div class="form-group">
                        <input type="text" name="nom" id="nom" class="form-control" value="<?php echo $nom ?>">
                    </div>
                    <label>prenom</label>
                    <div class="form-group">
                        <input type="text" name="prenom" id="prenom" class="form-control" value="<?php echo $prenom ?>">
                    </div>
                    <label>CIN</label>
                    <div class="form-group">
                        <input type="text" name="cin" id="cin" class="form-control" value="<?php echo $cin ?>" disabled>
                    </div>
                    <label>tel</label>
                    <div class="form-group">
                        <input type="text" name='tel' class="form-control" onkeypress="javascript:IntOnlyBis(this.value);" value="<?php echo $tel ?>">
                    </div>
                    <!-- <select class="form-control" name="abvservice">
                         <option value="all" </?php if($service=="all") echo "selected" ?>>Tous les services</option>
                        <option value="sg" <?php if($abv=="sg") echo "selected" ?>>Secrétaire Génerale FP</option>
                        <optgroup label="Direction affaires administratives et ressouce humaines">Direction affaires administratives et ressouce humaines  
                            <optgroup label="Division Ressources Humaines">
                                <option value="sgap" <?php if($abv=="sgap") echo "selected" ?>>service gestion affaires du personnel</option>
                                <option value="sgcp" <?php if($abv=="sgcp") echo "selected" ?>>service gestion carriere du personnel</option>
                            </optgroup>
                            <optgroup label="Division Ressources Humaines">
                                <option value="spb" <?php if($abv=="spb") echo "selected" ?>>Service Programmation et Budget</option>
                                <option value="sagp" <?php if($abv=="sagp") echo "selected" ?>>Service affaires génerale et parq </option>
                                <option value="scm" <?php if($abv=="scm") echo "selected" ?>>Service comptabilité et marchés</option>
                                <option value="si" <?php if($abv=="si") echo "selected" ?>>Service informatique</option>
                            </optgroup>
                            <optgroup label="Division affaires Juridique et relation avec le citoyen">    
                                <option value="saf" <?php if($abv=="saf") echo "selected" ?>>Service affaires Juridique</option>
                                <option value="src" <?php if($abv=="src") echo "selected" ?>>Service relation avec le citoyen </option>
                            </optgroup>
                        </optgroup>

                        <optgroup label="Direction Planification et Evaluation">
                                
                                <option value="ssps" <?php if($abv=="ssps") echo "selected" ?>>Service secteur primaire et secondaire</option>
                                <option value="sst" <?php if($abv=="sst") echo "selected" ?>>Service secteur tertiaire</option>
                                <option value="sc" <?php if($abv=="sc") echo "selected" ?>>Service Carte</option>
                                <option value="sio" <?php if($abv=="sio") echo "selected" ?>>Service information et orientation</option>
                                <option value="ssil" <?php if($abv=="ssil") echo "selected" ?>>Service suivi insertion des lauréats</option>
                                <option value="se" <?php if($abv=="se") echo "selected" ?>>Service Evaluation</option>
                                <option value="scomm" <?php if($abv=="scomm") echo "selected" ?>>Service Communication</option>
                        </optgroup>
                        <optgroup label="Direction Coordination Pédagogique et Secteur Privé">
                            <option value="saps" <?php if($abv=="saps") echo "selected" ?>>Service autorisations et promotion du secteur</option>
                            <option value="sqa" <?php if($abv=="sqa") echo "selected" ?>>Service Qualification et Accreditation</option>
                            <option value="sctrl" <?php if($abv=="sctrl") echo "selected" ?>>Service Controle</option>
                            <option value="spsps" <?php if($abv=="spsps") echo "selected" ?>>Service Programmes Secteur Primaire et Secondaire</option>
                            <option value="spst" <?php if($abv=="spst") echo "selected" ?>>Service Progrmmes Secteur tertiaire</option>
                            <option value="spfe" <?php if($abv=="spfe") echo "selected" ?>>Service Personnel Formateur et d'Encadrement</option>
                            <option value="secg" <?php if($abv=="secg") echo "selected" ?>>Service Examens et Concours Général</option>
                            <option value="sn" <?php if($abv=="sn") echo "selected" ?>>Service Normalisation</option>
                        </optgroup>
                        <optgroup label="Direction Formation en Millieu Professionnel">
                            <option value="sgp" <?php if($abv=="sqp") echo "selected" ?>>Service Gestion et Promotion de FCE</option>
                            <option value="scf" <?php if($abv=="scf") echo "selected" ?>>Service Controle De la FCE</option>
                            <option value="seif" <?php if($abv=="seif") echo "selected" ?>>Service Etude d'Impact de la FCE</option>
                            <!--<option value="saap" </?php if($service=="saap") echo "selected" ?>>Service Apprentissage Agriculture et Peche</option>
                            <option value="saa" </?php if($service=="saa") echo "selected" ?>>Service Apprentissage Artisanat</option> 
                            <option value="satc" </?php if($service=="satc") echo "selected" ?>>Service Apprentissage Textile et Cuire</option>
                            <option value="sat" </?php if($service=="sat") echo "selected" ?>>Service Apprentissage Tourisme</option>
                            <option value="sabi" </?php if($service=="sabi") echo "selected" ?>>Service Apprentissage BTP et IMMEE</option>
                            
                            <option value="sfpa" <?php if($abv=="sfpa") echo "selected" ?>>Service Formation Professionnelle Altérnée</option>
                        </optgroup>
                        <optgroup label="Direction Formation des Détenus">
                            <option value="sfp" <?php if($abv=="sfp") echo "selected" ?>>Service formation pensionnaire des CRE</option>
                            <option value="sfda" <?php if($abv=="sfda") echo "selected" ?>>Service Formation des détenus adultes</option>
                        </optgroup>
                        <optgroup label="Direction Coopération et Partenariat">
                            <option value="som" <?php if($abv=="som") echo "selected" ?>>Service Coopération Multilatérale </option>
                            <option value="scb" <?php if($abv=="scb") echo "selected" ?>>Service Coopération Bilatérale</option>
                            <option value="sp" <?php if($abv=="sp") echo "selected" ?>>Service Partenariat</option>
                        </optgroup>                                
                        </select>
                    </div> -->
                    <label>Adresse</label>
                    <div class="form-group">
                        <input type="text" name="adresse" id="adresse" value="<?php echo $adresse?>" class="form-control">
                        <!-- <select name="etage" id="etage" class="form-control">
                            <option value="0" <?php if($etage==0) echo 'selected' ?>>0</option>
                            <option value="1" <?php if($etage==1) echo 'selected' ?>>1</option>
                            <option value="2" <?php if($etage==2) echo 'selected' ?>>2</option>
                            <option value="3" <?php if($etage==3) echo 'selected' ?>>3</option>
                        </select> -->
                    </div>
                    <button class="btn btn-success" type="submit"><i class="bi bi-save"></i>&nbsp; Enregistrer </button>&nbsp;&nbsp;&nbsp;&nbsp;
                    <!-- <a href="addService.php"><i class="bi bi-plus"></i> Nouveau service</a> -->

                </form>
            </div>
        </div>
        <br>
        <!-- <div class="card margeCard"> 
            <h5 class="card-header bg-primary text-white ">Services (</?php echo $nbrservice ?> services) </h5>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <th> id structure </th>
                        <th>Service</th>
                        <th> etage </th>
                        <th>action</th>
                    </thead>
                    <tbody>
                        </?php
                            while($row=$result->fetch()){ ?>
                            <tr>
                                <td></?php echo $row['ID_SERVICE']?></td>
                                <td></?php echo $row['NOMSERVICE']?></td>
                                <td></?php echo $row['ETAGE']?></td>
                                <td>
                                    <a href="modifierService.php" class="bi bi-pencil-square"></a> &nbsp;
                                    <a href="servicesuppression.php" class="bi bi-trash" onclick="javascript: return confirm('etes vous sur de vouloir supprimer');"></a> 
                                </td>
                            </tr>
                        </?php }?>
                    </tbody>
                </table> 
                
                <ul class="pagination">
                    </?php for($i=1;$i<=$nbrpage;$i++){?> 
                        <li class="page-item </?php if($i==$page) echo 'active';?>">
                            <a href="admin-panel(services).php?page=</?php echo $i ?>" class="page-link"> </?php echo $i; ?></a>
                        </li>
                    </?php } ?>
                 </ul> 
               
            </div>
        </div> -->
    </div>

    <!-- footer -->


</body>
</html>
