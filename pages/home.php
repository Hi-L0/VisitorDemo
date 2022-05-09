<!--home.php-->

<?php 
require_once("mysession.php");
require_once('connectiondb.php');

$contVisite="select count(*) visite from visite";
$resVisite=$pdo->query($contVisite);
$tab=$resVisite->fetch();
$nbrVisite=$tab['visite'];

$contVisiteur="select count(id_visiteur) visiteur from visiteur";
$resVisiteur=$pdo->query($contVisiteur);
$tab=$resVisiteur->fetch();
$nbrVisiteur=$tab['visiteur'];

$contservice="select count(id_service) service from service";
$resservice=$pdo->query($contservice);
$tabService=$resservice->fetch();
$nbrservice=$tabService['service'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="shortcut icon" sizes="114x114" type="image/x-icon" href="favicon.ico" >
    <style>
        .margetop{
            margin-top: 150px;
            margin-left: 150px;
            
        }
        .margeCard{
            margin-left: 150px;
            width: 100px;
        }
        .widthbtn{
            width:80px;
        }
        table{
            margin-left: 1050px;
            width:120px;
            
            
        }
        .diammetre{
            width: 310px;
            height: 100px;
            font-weight: 500;
            font-size: 25px;
        }
        /* a:hover{
            text-decoration: none;
        } */
    </style>

</head>
<body>
	<header>
		<!-- header -->
        <?php
            session_start();
            if(!isset($_SESSION['user'])){
                header('location:registration.php');
            } 
            include("dashboard-admin.php");    //menu2==> càd menu withot connection link + items +admin icon prolly
            

        ?>
	</header>

    <div class="container margetop ">
        <table class="margeCard">
            <tr>
                <td align="center">
                    <div class='alert alert-danger diammetre' role='alert'>
                    <i class="bi bi-calendar4-week"></i>&nbsp; <?php echo $nbrVisite ?> Visite<?php if($nbrVisite>1){echo "s";}?>
		            </div>
                </td>
                <td align="center">
                    <div class='alert alert-success diammetre' role='alert'>
                    <i class="bi bi-people"></i>&nbsp; <?php echo $nbrVisiteur ?> Visiteur<?php if($nbrVisiteur>1){echo "s";}?>
		            </div>
                </td>
                <td align="center">
                    <div class='alert alert-primary diammetre' role='alert'>
                    <i class="bi bi-menu-button-wide"></i>&nbsp; <?php echo $nbrservice ?> Service<?php if($nbrservice>1){echo "s";}?>
		            </div>
                </td>
            
            </tr>

        </table>
    </div>
</body>
</html>
