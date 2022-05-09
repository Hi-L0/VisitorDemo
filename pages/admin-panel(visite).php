<!-- visite -->

<?php
    require_once("mysession.php");
    require_once('connectiondb.php');
    $size=isset($_GET['size'])?$_GET['size']:6;
    $page=isset($_GET['page'])?$_GET['page']:1;
    $offset=($page-1)*$size;

    $currentDate= date('Y/m/d', time());

    
    $searchnom=isset($_GET['searchnom'])?$_GET['searchnom']:"";
    $date=isset($_GET['date'])?$_GET['date']:"";
    if((empty($date))){
        $rq="select * from visite,visiteur,service
        where visite.id_visiteur=visiteur.id_visiteur
        and visite.id_service=service.id_service
        order by date
        limit $size
        offset $offset";
    
        $rqCount="select count(*) visites from visite,visiteur,service
        where visite.id_visiteur=visiteur.id_visiteur
        and visite.id_service=service.id_service
        order by date";
    }else{
        $rq="select * from visite,visiteur,service
        where  date like'%$date%'
        and visite.id_visiteur=visiteur.id_visiteur
        and visite.id_service=service.id_service";
       
        $rqCount="select count(*) visites from visite,visiteur,service
        where visite.id_visiteur=visiteur.id_visiteur
        and visite.id_service=service.id_service
        and date like '%$date%'";
    }
    $visiteQuery=$pdo->query($rq);
    $visiteCount=$pdo->query($rqCount);
    $tab=$visiteCount->fetch();
    $nbrvisite=$tab['visites'];
    $reste=$nbrvisite % $size;
    if($reste==0){
        $nbrpage = $nbrvisite / $size;
    }
    else{
        $nbrpage = floor($nbrvisite / $size) + 1;
    }





    $service="select nomservice from service,visite
    where service.id_service=visite.id_service";
    $servicequery=$pdo->query($service);

?>

<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" sizes="114x114" type="image/x-icon" href="favicon.ico" >
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
            //echo $currentDate;
        ?>
	</header>

    
	
    <div class="container">
        <div class="card  margetop">
            <h6 class="card-header" style="color: green;">Search bar</h6>
            <div class="card-body ">
                <form method="get" action="admin-panel(visite).php" class="form-inline">
                    <div class="form-group">
                        <input type="text" name="searchnom" class="form-control"  placeholder="chercher visiteur" value="<?php echo $searchnom?>">
                    </div> &nbsp;
                    <label>Service visité :</label>&nbsp;
                    <div class="form-group">
                        <select class="form-control" name="service">
                            <option value="all" <?php if($service=="all") echo "selected" ?>>Tous les services</option>
                            <?php while($row=$servicequery->fetch()){?>
                                <option>
                                    <?php echo $row['nomservice'] ?>
                                </option>
                                <?php }?>
                        </select>&nbsp;
                        <input type="date" placeholder="date" name="date" class="form-control" value="<?php echo $date?>">
                        <button class="btn btn-success" type="submit"><i class="bi bi-search"></i>&nbsp; search.. </button>
                    </div>
                </form>
            </div>
        </div>
       <br>
        <div class="card margeCard"> 
            <h5 class="card-header bg-primary text-white "> Les Visites (<?php echo $nbrvisite ?> visite<?php if($nbrvisite>1){echo "s";}?>)</h5>
            <div class="card-body">
                <table class="table table-striped table-hover">
                    <thead>
                    <!-- <th align="left"> id visite </th> -->
                        
                        <th align="left" width="150px"> Date de visite </th>
                        <th align="left"> Heure visite </th>
                        <th align="left"> Nom </th>
                        <th align="left">Prenom</th>
                        <th align="left">Service visité</th>
                        <?php if($_SESSION['user']['ROLE']=='admin'){?> 
                        <th align="left">Action</th><?php }?>
                        
                    </thead>
                    <tbody>
                        <?php
                            while($row=$visiteQuery->fetch()){ ?>
                            <tr>                                <!-- attention au majuscules nom-->
                                 <!-- <td><?php echo $row['ID_VISITE']?></td>  -->
                                <!-- <td></?php echo $row['objet']?></td> -->
                                <td><?php echo $row['DATE']?></td>
                                <td><?php echo $row['HEURE_ENTREE']?>
                                </?php echo $row['HEURE_SORTIE']?></td>

                                <td><?php echo strtoupper($row['NOM']) ?></td>
                                <td><?php echo ucwords($row['PRENOM'])?></td>
                                <td><?php echo $row['NOMSERVICE'] ?></td>


                                <!-- <td><//?php echo $row['HEURE_SORTIE']?></td> -->
                                <?php if($_SESSION['user']['ROLE']=='admin'){?> <td>
                                    <!-- <a href="modifierVisite.php?idVisite=</?php echo $row['ID_VISITE']; ?>" class="bi bi-pencil-square"></a> &nbsp; -->
                                    <a href="supprimerVisite.php?idVisite=<?php echo $row['ID_VISITE']; ?>&idVisiteur=<?php echo $row['ID_VISITEUR']; ?>" class="bi bi-trash" onclick="javascript: return confirm('etes vous sur de vouloir supprimer');"></a> </td>
                                
                                <?php } ?>

                            </tr>
                        <?php }?>
                    </tbody>
                </table>
                <div>
                    <ul class="pagination">
                        <?php for($i=1;$i<=$nbrpage;$i++){?> 
                        <li class="page-item <?php if($i==$page) echo 'active';?>">
                            <a href="admin-panel(visite).php?page=<?php echo $i ?>" class="page-link"> <?php echo $i; ?></a>
                        </li>
                        <?php } ?>
                    </ul> 
                </div>
            </div>
        </div>
    </div>
</body>
</html>