<?php
    session_start();
    if(isset($_SESSION['error_Login'])){
        $error=$_SESSION['error_Login'];
    }else{
        $error="";
    }
    session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>connexion</title>
	<link rel="shortcut icon" sizes="114x114" type="image/x-icon" href="favicon.ico" >
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/registration.css">
	<script src=”https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js” integrity=”sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo” crossorigin=”anonymous”></script>
	<script src=”https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js” integrity=”sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/” crossorigin=”anonymous”></script>
    <style>
        a:hover{
            text-decoration: none;
        }
    </style>
    <script>
        function alerte(){
            alert("admin space");
            return;
        }
    </script>
</head>
<body onload="alerte()">
	<header>
	    <//?php 
		include("menu.php");
		?> 
	</header>
	<br>
	<br>
	
	<!-- <div>
		<center>
		<p>Salut chere visiteur</p>
	</center>
	</div> -->

	<div class="container margintop">
		<section class="card ">
        <div class="card-header "> <center><b><i>Registration</i></b></center></div>
            <div class="card-body">
                <form id="formulaire" method="POST" action="login.php">
               
                    <table border="0" >
                    <?php if(!empty($error)){ ?>  
                        <!-- <tr>   -->
                    <!-- <td colspan="3"--><div class="alert alert-danger"> 
                        <?php echo $error;?>
                    </div><!--/td> -->
                    
                    <?php } ?>
                        <!-- <tr>
                             <td id="logo" align="center">
                            <img src="fsts_logo.png" alt="logo" id="image">  -->
                            <!-- </td> -->
                        
                            <!-- <td colspan="3" id="login" height="100" align="center"> </td> -->
                            <!-- <td align="center" width="20"><img src="uh1_logo.png" alt="logo2" id="image2"></td>
                        </tr> -->
                        <br>
                        <tr>
                            <th width="120">

                            <label> Login </label>
                            </th>
                            <td colspan="2">
                                <div class="form-group">
                                    <input type="text" name="login" placeholder="nom d'utilisateur" class="form-control" id="login" required="required">
                                </div>			
                            </td>						
                            </tr>
                            <tr>
                                <th>
                                    <label> Mot de passe </label>
                                </th>
                                <td colspan="2">
                                    <div class="form-group">
                                        <input type="password" name="pw" placeholder="mot de passe" id="pw" required="required" class="form-control">
                                    </div> 
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3"></td>
                            </tr>
                            <tr>
                                <td colspan="3" align="center" id="sub" style="padding-bottom: 20px"> 
                                    <button class="btn btn-primary" id="cnx" type="submit" name="connexion" onclick=""> Se Connecter </button> 
                                </td>
                            </tr>	
                    </table>
                    <!-- <div>
                        <small><a href="" > vous n'avez pas un compte? </a></small>
                    </div> -->
                </form>
                <span><a href="index.php" ><< return </a></span>
            </div>
		</section>
	</div>