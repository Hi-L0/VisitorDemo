<!-- admin-panel(users) -->

<?php
    
    require_once("mysession.php");
    require_once("connectiondb.php");
    $size=isset($_GET['size'])?$_GET['size']:6;
    $page=isset($_GET['page'])?$_GET['page']:1;
    $offset=($page-1)*$size;

    $searchuser= isset($_GET['searchuser'])?$_GET['searchuser']:""; //for search if nothing is writen
    $rq="select * from utilisateur 
        where LOGIN like '%$searchuser%'
        limit $size 
        offset $offset";

    $rqCount="select count(*) users from utilisateur 
        where login like '%$searchuser%'";

    $resultat=$pdo->query($rq);
    $resultCount=$pdo->query($rqCount);
    $tab=$resultCount->fetch();
    $nbruser=$tab['users'];
    $reste=$nbruser % $size;
    if($reste==0){
        $nbrpage = $nbruser/ $size;
    }
    else{
        $nbrpage = floor($nbruser / $size) + 1;
    }


?> 

<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
    <link rel="shortcut icon" sizes="114x114" type="image/x-icon" href="favicon.ico" >
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
        .widthbtn{
            width:80px;
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
            <h6 class="card-header" style="color: green;">Search bar</h6>
            <div class="card-body">
                <form method="get" action="admin-panel(users).php" class="form-inline">
                    <div class="form-group">
                        <input type="text" class="form-control" name="searchuser" value="<?php echo $searchuser ?>" placeholder="chercher utilisateur">
                    </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <button class="btn btn-success" type="submit"><i class="bi bi-search"></i>&nbsp; chercher </button> &nbsp;&nbsp;&nbsp;&nbsp;
                   <?php if($_SESSION['user']['ROLE']=='admin') {?><a href="addUser.php"><i class="bi bi-person-plus"></i> Nouveau utilisateur</a> <?php }?>

                </form>
            </div>
        </div>
        <br>
        <div class="card margeCard"> 
            <h5 class="card-header bg-primary text-white "> Les Utilisateurs (<?php echo $nbruser ?> user<?php if($nbruser>1){echo "s";}?>)   </h5>
            <div class="card-body fluid">
                <table class="table">
                    <thead>
                        <!-- <th> id utilisateur </th> -->
                        <th>Login</th>
                        <th> Email </th>
                        <th> Password</th>
                        <th> Role </th>
                        <!-- <th>Etat</th> -->
                        <?php if($_SESSION['user']['ROLE']=='admin'){?><th> Action</th><?php }?>
                    </thead>
                    <tbody>
                        <?php
                            while($row=$resultat->fetch()){ ?>
                            <tr class="alert alert-<?php echo $row['ETAT']==1?'success':'danger'?>">
                                <!-- <td><?php echo $row['ID_USER']?></td> -->
                                <td><?php echo $row['LOGIN']?></td>
                                <td><?php echo $row['EMAIL']?></td>
                                <td><?php echo $row['PASSWORD']?></td>
                                <td><?php 
                                    if($row['ROLE']=='admin') 
                            {?><button class="btn btn-success widthbtn" disabled><?php echo $row['ROLE']?></button>
                            <?php }else{?><button class="btn btn-warning widthbtn text-white" disabled><?php echo $row['ROLE']?>
                                <?php }?></td>
                                <!-- <td><?php if ($row['ETAT']==1) { ?>
                                    <a  href="desactiverUser.php" class="btn btn-success widthbtn"><?php echo 'active'?></a>
                                    <?php } else{?>
                                        <a href="" class="btn btn-danger widthbtn"><?php echo 'disabled'?></button>
                                    <?php }?>
                                </td> -->
                                <?php if ($_SESSION['user']['ROLE']=='admin') {?> <td>
                                    <a href="modifierUser.php?idUser=<?php echo $row['ID_USER']?>" class="bi bi-pencil-square"></a> &nbsp;
                                    <a href="suppressionUser.php?idUser=<?php echo $row['ID_USER'] ?>" class="bi bi-trash" onclick="javascript: return confirm('etes vous sur de vouloir supprimer');"></a>&nbsp; 
                                    <a href="desactiverUser.php?idUser=<?php echo $row['ID_USER'] ?>&etat=<?php echo $row['ETAT']  ?>"
                                                <?php 
                                                if ($row['ROLE']=='user') { 
                                                    if ($row['ETAT']==1)
                                                        echo "class='bi bi-person-x' title='desactiver''";
                                                    else 
                                                        echo "class='bi bi-person-check' title='activer'";
                                                }
                                                ?>></a>
                                </td><?php } ?>
                            </tr>
                        <?php }?>
                    </tbody>
                </table>
                <ul class="pagination">
                    <?php for ($i=1;$i<=$nbrpage;$i++) {
                        ?> 
                        <li class="page-item <?php if ($i==$page) echo 'active';?>">
                            <a href="admin-panel(users).php?page=<?php echo $i ?>" class="page-link"> <?php echo $i; ?></a>
                        </li>
                    <?php } ?>
                 </ul> 
            </div>
        </div>
    </div>

    <!-- footer -->


</body>
</html>
