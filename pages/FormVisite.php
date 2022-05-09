<!-- partie formulaire-->
<!-- <//?php
session_start();
include('connectiondb.php');
$cin=isset($_POST['CIN'])?$_POST['CIN']:"";


$rq="select * from visiteur where cin='$cin'";
$result=$pdo->query($rq);
if($visiteur=$result->fetch())

?> -->
<!DOCTYPE HTML>
<html>
    <head>
        <title> formulaire </title>
        <link rel="shortcut icon" sizes="114x114" type="image/x-icon" href="favicon.ico" >
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
        
        <div class="container">
            <div class="card margetop" id="card"> 
                <h5 class="card-header "> Réservation </h5>
                <div class="card-body bod">
                    <form id="formulaire" action="connection.php" method="POST" >
                        <table  width="700" cellspacing="0">
                            <tr height="20">
                                <th style="width: 260px; text-align: left;">Nom:</th>
                                <td></td>
                                <th style="width: 300px; text-align: left;">Prenom:</th>
                            </tr>
                            <tr height="20">
                                <td>
                                    <div  class="form-group">
                                        <input type="text" name="nom" id="nom" placeholder="entrez votre nom" required="required" onkeypress="javascript:alphaOnly();" class="form-control">
                                    </div>
                                </td>
                                <td></td>
                                <td>
                                    <div  class="form-group">
                                        <input type="text" name="prenom" id="pr" placeholder="entrez votre prenom" required="required" onkeypress="javascript:alphaOnly();" class="form-control">
                                    </div>
                                </td>
                            </tr>
                            <tr height="20">
                                <td colspan="3"></td>
                            </tr>
                            <tr height="20">
                                <th align="left">CIN ou n° carte de séjour</th>
                                <td></td>
                                <th align="left">GSM: </th>
                            </tr>
                            <tr height="20">
                            <td >
                                <div  class="form-group">
                                        <input type="text" id="cin" name="CIN" placeholder="CIN ou carte de séjour" maxlength="10" required="required" onkeypress="javascript:cinVerif(this.value);" class="form-control">
                                    </div>
                                </td>
                                <td></td>
                            <td>
                                <div  class="form-group">
                                        <input type="text" name="Tel" id="Tel" placeholder="Telephone" maxlength="10" required="required" onkeypress="javascript:IntOnlyBis(this.value);" class="form-control">
                                    </div>
                                </td>
                            </tr>
                            <tr height="20">
                                <td colspan="3"></td>
                            </tr>
                            <tr>
                                <th colspan="3" align="left">Adresse:</th>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div  class="form-group">
                                        <textarea class="form-control" placeholder="entrez votre adresse" rows="4" cols="50" name="adresse" required="required" style="margin-top: 10px;"></textarea>
                                    </div>
                                </td>
                                <td  align="right" valign="bottom">
                                    <button class="btn btn-primary mb-1" type="submit" name="envoyer" onclick="isTeleFormat(document.getElementById('Tel').value);">suivant</button>
                                </td>
                            </tr>
                        </table>
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