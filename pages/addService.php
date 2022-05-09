<?php
require_once("mysession.php"); ?>
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
            <h5 class="card-header bg-primary text-white "> ajouter service  </h5>
            <div class="card-body fluid">
                <form method="POST" action="insertService.php" class="form">
                    <label>nom Service</label>
                    <div class="form-group">
                        <input type="text" name="nomservice" id="nomservice" class="form-control">
                    </div>
                    <label>abreviation service</label>
                    <div class="form-group">
                        <input type="text" name="abv" id="abv" class="form-control">
                    </div>
                    <label>etage </label>
                    <div class="form-group">
                        <select name="etage" id="etage" class="form-control">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                    <button class="btn btn-success" type="submit"><i class="bi bi-save"></i>&nbsp; enregistrer </button>
                </form>
            </div>



















    </body>
</html>
