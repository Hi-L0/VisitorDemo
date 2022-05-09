<!--menu2+maybe dashboard-->
<!--navbar après la connexion -->
<!--?php 
session_start();
require_once('connectiondb.php');

$contVisite="select count(id_visite) visite from visite";
$resvisite=$pdo->query('$contVisite');
$tabVisite=$resvisite->fetch();
$nbrVisite=$tabVisite['visite'];

$contVisiteur="select count(id_visiteur) visiteur from visiteur";
$resvisiteur=$pdo->query('$contVisiteur');
$tabVisiteur=$resvisiteur->fetch();
$nbrVisiteur=$tabVisiteur['visiteur'];

$contservice="select count(id_service) service from service";
$resservice=$pdo->query('$contservice');
$tabservice=$resservice->fetch();
$nbrservice=$tabVisiteur['service'];



?-->

<?php require_once("mysession.php");
$year = date("Y"); ?>

<!DOCTYPE html>
<html>

<head>
    <title>Departement de Formation Professionnelle</title>
    <link rel="shortcut icon" sizes="114x114" type="image/x-icon" href="favicon.ico">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <style type="text/css">
    body {
        background: #DCDDDF url(https://cssdeck.com/uploads/media/items/7/7AF2Qzt.png);
        overflow: auto;
    }

    .navbar {
        background-color: #484848;
        display: flex;
    }

    /* .navbar a:hover {
        width: 140px;
        
        background-color: #485050;
        border-radius: 5px;
        color: white;
    } */

    .sidebar a:hover {
        background-color: #485050;
        padding-left: 30px;

    }

    .navbar-brand {
        display: flex;
        justify-content: center;
        /*padding: 10px;*/
        width: 70px;
        border-radius: 5px;
    }

    .sidebar {
        position: fixed;
        top: 0px;
        left: 0;
        bottom: 0;
        z-index: 100;
        /* margin-top: 56px; */
        padding: 70px 0px 0 10px;
        border-right: 1px solid #d3d3d3;
    }

    .left-sidebar {
        position: sticky;
        top: 0;
        height: calc(100vh - 70px);
    }

    #logo {
        margin-left: 60px;
        /*padding-left: 200px;*/
        width: 35px;
        height: 35px;
    }

    .pfooter {
        padding-left: 5px;
        padding-top: 215px;
        font-size: 10px;
        color: gray;
    }

    .cfooter {

        color: gray;
    }
    </style>
</head>

<body>
    <!--header-->
    <header>
        <!--navbar--->
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top flex-md-nowrap p-2 shadow shadow primary">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="#" class="navbar-brand text-primary"><span><img src="../image/dfplogo.jpg" id="logo"
                                alt="dfp logo"></span>&nbsp; DFP </a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="nav-item active pl-4 text-secondary disabled"><a href="#"
                            class="nav-link text-secondary disabled"><i
                                class="bi bi-person-circle"></i>&nbsp;<?php echo strtoupper($_SESSION['user']['LOGIN']); ?></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 bg-light d-md-block sidebar">
                <div class="left-sidebar">
                    <ul class="nav flex-column sidebar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="home.php"><i class="bi bi-house-fill"></i>&nbsp Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="admin-panel(visite).php"><i
                                    class="bi bi-calendar4-week"></i>&nbsp Visites</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="admin-panel(services).php"><i
                                    class="bi bi-menu-button-wide"></i>&nbsp Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="admin-panel(visiteur).php"><i
                                    class="bi bi-people"></i>&nbsp; Visiteurs</a>
                        </li>
                        <?php if ($_SESSION['user']['ROLE'] == 'admin') { ?>
                        <!-- pour que seul l'admin aura la possiblité de voir tous les utilisateur de l'application-->
                        <li class="nav-item">
                            <a class="nav-link active" href="admin-panel(users).php"><i
                                    class="bi bi-people-fill"></i>&nbsp; Utilisateurs</a>
                        </li> <?php }	?>
                        <li class="nav-item">
                            <a class="nav-link active " href=""><i class="bi bi-table"></i>&nbsp; Calendrier</a>
                        </li>
                        &nbsp;&nbsp;
                        <li class="nav-item">
                            <a class="nav-link active border-top" href="logout.php"
                                onclick="javascript:return confirm('are you sure you want to quit');"><i
                                    class="bi bi-box-arrow-left"></i>&nbsp; Se Deconnecter</a>
                        </li>
                    </ul>

                    <p class="pfooter">Département de formation professionnelle </p>
                    <center class="cfooter"><small>Copyright ©2021 - <?php echo $year ?></small></center>
                </div>
            </div>
        </div>
    </div>

    <!-- <table>
		 <tr>
		 <div class='alert alert-danger' role='alert'>
			 <td> Nombre de visite <//?php echo $nbrVisite ?> Vistes.</td>
		 </div>
		 </tr>
	 </table>
   </div> -->
    <!-- <?php
			if ($_SESSION["login"]) {
				header('location:index.php');
			} else {
				header('location:registration.php');
			}

			?> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>



</body>

</html>