<!DOCTYPE html>
<html>
<head>
	<title>Departement de Formation Professionnelle</title>
	<meta charset="utf-8">
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
			/* font-size: large; */
			width: 130px;
			color: blue;
			/* text-decoration: underline; */
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
			/*padding: 10px;*/
			width: 80px;
			border-radius: 5px;
		}
		#logo{
            width: 35px;
            height: 35px;
        }

		/* footer a.text-light:hover { color: blue!important; text-decoration: none; }
		footer .cizgi { border-right: 1px solid #535e67; }
		@media (max-width: 992px) { footer .cizgi { border-right: none; } } */
	</style>
</head>
<body>
	<!--header-->
	<header>
		<nav class="navbar navbar-expand-lg navbar-light bg-secondary navbar-fixed-top shadow">
			<div class="container-fluid">
				<div class="navbar-header">
					<a href="#" class="navbar-brand mr-8 text-white"><img id="logo" src="../image/dfplogo.jpg" alt="dfp logo">&nbsp; DFP</a>	
				</div>
				<ul class="nav navbar-nav">
					<li class="nav-item  pl-4 text-white"><a href="formVisite.php" class="nav-link text-white">Reserver visite</a></li>
					&nbsp;&nbsp;
					<span class="border-right"></span>
					<li class="nav-item active pl-4 text-nowarp text-white "><a href="services.php" class="nav-link text-white"><i class="bi bi-menu-button-wide"></i>&nbsp; Services</a></li><!---services du DFP --->
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
	<!-- body -->


	<!-- footer -->
	
	<!-- <footer>
		<div class="jumbotron jumbotron-fluid bg-secondary p-4 mt-5 mb-0">
			<div class="container">
				<div class="row">
					<div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 cizgi">
						<div class="card bg-secondary border-0">
							<div class="card-body text-light text-center">
								<h5 class="card-title text-white display-4" style="font-size:25px">Droits</h5>
								<p> Copyright © 2021. 
									<br><a href="https://dfp.gov.ma/" class="text-light text-white"> Département de la Formation Professionnelle</a>
								</p>
	
							</div>
						</div>
					</div>
					
					<div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 cizgi">
						<div class="card bg-secondary border-0">
							<div class="card-body text-center">
								<h5 class="card-title text-white display-4" style="font-size:30px">İletişim</h5>
								<a class="text-light d-block lead" style="margin-left: -20px" href="#"><i class="fa fa-phone mr-2"></i>+90 (000) 000 0 000</a>
								<a class="text-light d-block lead" href="#"><i class="fa fa-envelope mr-2"></i>admin@localhost.com</a>
							</div>
						</div>
					</div>
					
					<div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
						<div class="card bg-secondary border-0">
							<div class="card-body text-center">
							<h5 class="card-title text-white display-4" style="font-size:25px">Rejoignez-nous</h5>
					
									<a class="text-light" href="https://www.facebook.com/D%C3%A9partement-de-la-Formation-Professionnelle-Maroc-184054288684406/?ref=ts&fref=ts42102490https://www.facebook.com/D%C3%A9partement-de-la-Formation-Professionnelle-Maroc-184054288684406/?ref=ts&fref=ts42102490" title="suivez nous sur facebook"><i class="bi bi-facebook"></i></a>
								&nbsp;
									<a class="text-light" href="https://www.twitter.com/" title="suivez nous sur twitter"><i class="bi bi-twitter"></i></a>
								&nbsp;
									<a class="text-light" href="https://www.youtube.com/channel/UCER6IpG62MJgMzdgMhDad2g" title="suivez nous sur youtube"><i class="bi bi-youtube"></i></a>
								
								
							</div>
						</div>
					</div>	
				</div>
				 &nbsp;
				<center><small ><a href="https://dfp.gov.ma/" class="text-white"> Copyright © 2021. Département de la Formation Professionnelle</a></small></center> -->
	<!--		</div>
		</div>
	</footer> -->
	<!-- </?php include("footer.php")?> -->
	<!--# Footer #-->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>