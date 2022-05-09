<!--addUser-->
<?php require_once("mysession.php");?>

<!DOCTYPE html>
<html>
<head>
	<title>ajouter un service</title>
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
            margin-left: 300px;
            width: 700px;
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
    <div class="card margetop margeCard"> 
            <h5 class="card-header bg-primary text-white "> ajouter utilisateur  </h5>
            <div class="card-body fluid">
                <form method="POST" action="insertUser.php" class="form">
                    <label>Nom utilisateur</label>
                    <div class="form-group">
                        <input type="text" name="login" id="login" class="form-control">
                    </div>
                    <label>Email</label>
                    <div class="form-group">
                        <input type="text" name="email" id="email" class="form-control">
                    </div>
                    <label >Mot de passe</label>
                    <div class="form-group">
                        <input type="password" name="pw" id="pw" class="form-control">
                    </div>
                    <label>Role </label>
                    <div class="form-group">
                        <select name="role" id="role" class="form-control">
                            <option value="admin">admin</option>
                            <option value="user">user</option>
                        </select>
                    </div>
                    <label> Etat </label>
                    <div class="form-group">
                        <select name="etat" id="etat" class="form-control">
                            <option value="1">active</option>
                            <option value="0">non active</option>
                        </select>
                    </div>
                    
                    <button class="btn btn-success" type="submit"><i class="bi bi-save"></i>&nbsp; enregistrer </button>
                </form>
            </div>