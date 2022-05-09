<!-- admin-panel(services) -->

<?php
    require_once("mysession.php");
    require_once("connectiondb.php");
    
    $size=isset($_GET['size'])?$_GET['size']:6;
    $page=isset($_GET['page'])?$_GET['page']:1;
    $offset=($page-1)*$size;
    
    $search_service= isset($_GET['seach_service'])?$_GET['search_service']:"";
    $abv=isset($_GET['abv'])?$_GET['abv']:"all";
    
    if($abv=="all")
    {   
        $rq="select * from service

        limit $size
        offset $offset";

        $rqCount="select count(*) service from service";
    }
    else{
        $rq="select * from service
        where  abvnomservice = '$abv'
        limit $size
        offset $offset";

        $rqCount="select count(*) service from service
        where abvnomservice like '%$abv%'
        and abvnomservice = '$abv'
        ";
    }
    
    $result=$pdo->query($rq);
    $resCount=$pdo->query($rqCount);
    $tab=$resCount->fetch();

    $nbrservice=$tab['service'];
    $reste=$nbrservice % $size;
    if($reste==0){
        $nbrpage = $nbrservice/ $size;
    }
    else{
        $nbrpage = floor($nbrservice / $size) + 1;
    }



?> 

<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" sizes="114x114" type="image/x-icon" href="favicon.ico" >
    <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
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
            <h6 class="card-header" style="color:green;"> Search bar</h6>
            <div class="card-body">
                <form method="get" action="admin-panel(services).php" class="form-inline">
                    <!-- <div class="form-group">
                        <input type="text" class="form-control" placeholder="chercher service" name="search_service">
                    </div>&nbsp;&nbsp; -->
                    <label>select service: &nbsp;</label>
                    <div class="form-group">
                    <select class="form-control" name="abv" onchange="this.form.submit()">
                        <option value="all" <?php if($abv=="all") echo 'selected'?>>Tous les services</option>
                        <option value="sg" <?php if($abv=="sg") echo 'selected'?>>Secrétaire Génerale FP</option>
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
                            <!-- <option value="saap" </?php if($service=="saap") echo "selected" ?>>Service Apprentissage Agriculture et Peche</option>
                            <option value="saa" </?php if($service=="saa") echo "selected" ?>>Service Apprentissage Artisanat</option> 
                            <option value="satc" </?php if($service=="satc") echo "selected" ?>>Service Apprentissage Textile et Cuire</option>
                            <option value="sat" </?php if($service=="sat") echo "selected" ?>>Service Apprentissage Tourisme</option>
                            <option value="sabi" </?php if($service=="sabi") echo "selected" ?>>Service Apprentissage BTP et IMMEE</option>
                            -->
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
                        <!-- <option value="</?php echo $abv ?>"></option>                                 -->
                        </select>
                    </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                    <button class="btn btn-success" type="submit"><i class="bi bi-search"></i>&nbsp; chercher... </button>&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php if($_SESSION['user']['ROLE']=='admin'){?><a href="addService.php"><i class="bi bi-plus"></i> Nouveau service</a><?php }?>
                </form>
            </div>
        </div>
        <br>
        <div class="card margeCard"> 
            <h5 class="card-header bg-primary text-white ">Services (<?php echo $nbrservice ?> service<?php if($nbrservice>1){echo "s";}?>) </h5>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <!-- <th> id service </th> -->
                        <th>Service</th>
                        <th> Etage </th>
                        <?php if($_SESSION['user']['ROLE']=='admin'){?><th>Action</th><?php }?>
                    </thead>
                    <tbody>
                        <?php
                            while($row=$result->fetch()){ ?>
                            <tr>
                                <!-- <td><?php echo $row['ID_SERVICE']?></td> -->
                                <td><?php echo $row['NOMSERVICE']?></td>
                                <td><?php echo $row['ETAGE']?></td>
                                <?php if($_SESSION['user']['ROLE']=='admin'){?><td>
                                    <a href="modifierService.php?id_service=<?php echo $row['ID_SERVICE']?>" class="bi bi-pencil-square"></a> &nbsp;
                                    <a href="serviceSuppression.php?id_service=<?php echo $row['ID_SERVICE']?>" class="bi bi-trash" onclick="javascript: return confirm('etes vous sur de vouloir supprimer');"></a> 
                                </td><?php }?>
                            </tr>
                        <?php }?>
                    </tbody>
                </table> 
                
                <ul class="pagination">
                    <?php for($i=1;$i<=$nbrpage;$i++){?> 
                        <li class="page-item <?php if($i==$page) echo 'active';?>">
                            <a href="admin-panel(services).php?page=<?php echo $i ?>&abv=<?php echo $abv?>" class="page-link"> <?php echo $i; ?></a>
                        </li>
                    <?php } ?>
                 </ul> 
               
            </div>
        </div>
    </div>

    <!-- footer -->


</body>
</html>
