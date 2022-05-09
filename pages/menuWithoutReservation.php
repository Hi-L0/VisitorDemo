<!DOCTYPE html>
<html>
<head>
	<title>Departement de Formation Professionnelle</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" sizes="114x114" type="image/x-icon" href="favicon.ico" >
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	<style type="text/css">
		body{
			background: #DCDDDF url(https://cssdeck.com/uploads/media/items/7/7AF2Qzt.png);
			overflow: auto;
		}

		.navbar { 
			background-color: #484848;
			box-shadow: 2px 4px 4px black;
		 }
		.navbar  a:hover{
			width: 130px;
			text-decoration: none;
			background-color: #485050;
			border-radius: 5px;
			
			
		}
		/* .nav-item{
			display: flex;
			justify-content: center;
			width: 150px;
			
		} */
		.navbar-brand{
			display: flex;
			justify-content: center;
			/* padding: 10px; */
			width: 80px;
			border-radius: 5px;
		}
        #logo{
            width: 35px;
            height: 35px;
        }
	</style>
</head>
<body>
	<!--header-->
	<header>
		<nav class="navbar navbar-expand-lg  bg-secondary navbar-fixed-top shadow">
			<div class="container-fluid">
				<div class="navbar-header">
					<a href="#" class="navbar-brand mr-8 text-white"><img id="logo" src="../image/dfplogo.jpg" alt="dfp logo">&nbsp; DFP</a>	
				</div>
				<ul class="nav navbar-nav">
					<li class="nav-item  pl-4 text-white"><a href="formVisite.php" class="nav-link text-primary disabled" style="background-color:#485050;width: 130px;border-radius: 5px; ">Reserver visite</a></li>
					&nbsp;&nbsp;
					<span class="border-right"></span>
					<li class="nav-item active pl-4 text-nowarp text-white "><a href="#" class="nav-link text-white"><i class="bi bi-menu-button-wide"></i>&nbsp;Services</a></li><!---services du DFP --->
					<!-- <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			          <a class="dropdown-item" href="#">Action</a>
			          <a class="dropdown-item" href="#">Another action</a>
			          <div class="dropdown-divider"></div>
			          <a class="dropdown-item" href="#">Something else here</a>
			        </div>
			     	</li> -->
					 &nbsp;&nbsp;
					<span class="border-right"></span>
					<li class="nav-item active pl-4 text-white"><a href="registration.php" class="nav-link text-white"><span class="bi bi-box-arrow-in-right"></span>&nbsp; Connexion</a></li>
				</ul>
			</div>
		</nav>
	</header>
	

	<!-- <div class="buttons">
		<div style="margin-left:50px; margin-top:200px;  width: 100px; height:100px; background-color:#DCDDDF; box-shadow: 2px 4px 4px black;"></div>

	</div> -->



	<!-- footer -->
    <!-- <footer>
        <div class="footer-copyright text-center p-3 grey lighten-1 text-black-50">
            <a class="black-text" href="https://dfp.gov.ma/">
            Copyright © 2021. Département de la Formation Professionnelle.
            </a>
    </div>
    </footer> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>