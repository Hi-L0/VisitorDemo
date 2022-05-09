<!--impression-->
<!-- partie formulaire-->
<!DOCTYPE HTML>
<html>
    <head>
        <title> formulaire </title>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<link rel="shortcut icon" sizes="114x114" type="image/x-icon" href="favicon.ico" >
		<link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
      
        <script src="formJs.js"></script>
     
        
    </head>
    <body>
        <header>
            <?php 
                include("menuWithoutReservation.php");
            ?>
            
        </header>
        <br>
        <br>
        
        <div class="container">
            <div class="card margetop" id="card"> 
                <h5 class="card-header "> Visite </h5>
                <div class="card-body bod">
                    <div class='alert alert-success' role='alert'>
                        votre rendez-vous a été effectué, veuillez télécharger ou imprimer cette fiche.
		            </div>
                    <form id="formulaire" action="fiches.php" method="POST" >
                    <button class="btn btn-success" type="submit"><i class="bi bi-download"></i>&nbsp;Votre fiche</button>
                    </form>
                    <!-- <div>
                        <ul class="pagination">
                        <li class="page-item active"><a class="page-link" href="">1</a></li>
                        <li class="page-item disabled"><a class="page-link" href="">2</a></li>
                        <li class="page-item disabled"><a class="page-link" href="">3</a></li>
                        </ul>
                    </div>         -->
                </div>  
            </div>
       </div>
       <br><br>
       <?php include("footer.php");?>
       <!-- <footer>
		<div class="jumbotron jumbotron-fluid bg-secondary p-4 mt-5 mb-0">
			<div class="contenaire">
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


       
      

       
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>



    </body>
</html>