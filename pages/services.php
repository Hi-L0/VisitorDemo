<!DOCTYPE html>
<html>
<head>
	<title>Services</title>
    <meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="shortcut icon" sizes="114x114" type="image/x-icon" href="favicon.ico" >
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    
    <style>
        body{
            background-image: "https://www.google.com/maps/uv?pb=!1s0xda76b4de2bb0b8b:0xeedb3973a25b1dd9!3m1!7e115!4shttps://lh5.googleusercontent.com/p/AF1QipNijAwRL0pEOMRQuM9Q8t7jHYE5_VCtz2JZmMvV%3Dw191-h144-k-no!5sdfp+-+Recherche+Google!15zQ2dJZ0FRPT0&imagekey=!1e10!2sAF1QipNijAwRL0pEOMRQuM9Q8t7jHYE5_VCtz2JZmMvV&hl=fr&sa=X&ved=2ahUKEwi87tOBysnxAhURxoUKHWpFAdEQoip6BAg3EAM#";
        }
         .margeCard{
            height:600px;
            width:650px;
            margin-left: 200px;
        }
        .margetop{
            margin-top: 60px;
        }
        .cur {
            font-family: 'Oswald', sans-serif;
            margin-left: 400px;
            
        }
        #parag{
            margin-left: 60px;
        }

        
    </style>
    <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}    
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";  
        dots[slideIndex-1].className += " active";
        setTimeout(showSlides, 5000); // Change image every 5 seconds
        }
</script>



</head>
<body>
<!--header-->
    <header>
        <?php include("menu.php"); ?>
    </header>
<!--/header-->
<section class="container disppub-maincontainer bg-white">
    <div class="inner-container margetop">
        <div class="row-fluid ">
            <div class="col-md-10">
                <div class="full">

                <h1><strong class="cur margetop">Services DFP</strong><br></h1>
                            <!-- <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature</p>
                            <div class="button_section"><a class="main_bt" href="#">Buy Now</a></div> -->
                &nbsp;
                <br>
                <div id="parag">
                <h3>Coopération & Partenariat :</h3>
<p>La division de la coopération et du partenariat est chargé, en liaison avec les parties concernées, de l’élaboration des programmes de coopération internationale, bilatérale et multilatérale dans le domaine de la formation professionnelle, ainsi que des programmes de partenariat avec les collectivités locales, les établissements publics et les organisations non gouvernementales (ONG).
Elle est également chargée du suivi de la réalisation de ces programmes et de leur évaluation.</p>
<hr>
<h3>Formation des Détenus :</h3>
<br>
<p>La division de la formation des détenus est chargée du développement et de la promotion de la formation professionnelle destinée aux détenus en vue de favoriser leur insertion socioprofessionnelle, et ce en collaboration avec les organismes concernés.

Affaires administratives et ressources humaines :
La Direction des Affaires Administratives et des Ressources Humaines a pour mission la gestion des affaires du personnel et des carrières, la préparation des budgets d'investissement et de fonctionnement et la gestion des affaires financières et générales. Cette direction a pour mission également de contribuer à l’élaboration et au suivi des textes législatifs et réglementaires régissant le secteur de la formation professionnelle, d’examiner et de donner son avis sur les textes législatifs et réglementaires en rapport avec ce secteur. Elle est chargée aussi des relations avec le citoyen et de l’instruction des doléances.

Missions de La Direction de la Coordination Pédagogique & du Secteur Privé :
La Direction de la Coordination  Pédagogique & du Secteur Privé (DCPSP) a pour mission, en collaboration avec les différents départements et organismes concernés, l’orientation, la normalisation, la coordination, le suivi et le contrôle des différents aspects relatifs aux ressources formatives des secteurs public et privé de la formation professionnelle.
La DCPSP comprend, outre le Service de la Normalisation :
-    La Division des Programmes et de la Coordination Pédagogique, composée de 4 Services :
•	Service des Programmes du Secteur Tertiaire;
•	Service des Programmes des Secteurs Primaire et Secondaire;
•	Service du Personnel Formateur et d’Encadrement;
•	Service du Concours général et des examens.
-	La Division de la Formation Professionnelle Privée, composée de 3 Services :
•	Service des Autorisations et de la Promotion du Secteur;
•	Service de la Qualification/ Accréditation;
•	Service du Contrôle.
 
</p>

<hr>
<h3>Formation en Milieu Professionnel :</h3>
<br>
<p>Promouvoir et développer la formation en cours d’emploi, la formation alternée et la formation  par  apprentissage, en collaboration avec les différents départements et organismes concernés.
La Direction de la Formation en Milieu Professionnel comprend, outre le Service de la Formation Professionnelle Alternée :
<b>1.	La Division de la Formation en Cours d’Emploi, composée :</b>
•	du Service de la Gestion et de la  Promotion de la Formation en Cours d’Emploi.
•	du Service du  Contrôle de la Formation en Cours d’Emploi
•	du Service des Etudes d’Impact de la Formation en Cours d’Emploi
<b> 2.	La Division de la Formation par Apprentissage, composée :</b>
<br>
•	du Service de l’Apprentissage dans les Secteurs de l’Agriculture et de la  Pêche,
•	du Service de l’Apprentissage dans le Secteur de l’Artisanat
•	du Service de l’Apprentissage dans les Secteurs du Textile et du Cuir,
•	du Service de l’Apprentissage dans le Secteur du Tourisme,
•	du Service de l’Apprentissage dans les Secteurs du  Bâtiment et des Travaux Publics (BTP) et des Industries Mécaniques, Métallurgiques, Electriques et Electroniques (IMMEE),
</p>
<hr>
<h3>Planification et Evaluation :</h3>
<br>
<p>
En application du Décret n° 2-04-332 du 21 hija 1425 (1er février 2005) fixant les attributions et l’organisation du Département de la Formation Professionnelle (DFP), la Direction de la Planification et de l’Evaluation a pour mission de mener, en collaboration avec les différents départements et organismes concernés, toutes les activités liées à la planification de la formation professionnelle et à l’analyse du marché du travail et des liaisons formation/emploi, notamment à travers des études, des recherches et des enquêtes.
<br>
Elle a aussi pour mission en liaison avec les différentes parties concernées, d’évaluer les politiques de la formation professionnelle, le fonctionnement de l’appareil de formation professionnelle et le développement de la communication en vue d’informer les différents partenaires sur les réalisations et les projets de développement du secteur.
</p>&nbsp;
<br>
                </div>
            <!-- <div class="card margeCard"> 
                <h5 class="card-header "> Positionnement de DFP </h5>
                <div class="card-body fluid">
                    <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=dfp&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://fmovies2.org"></a><br>
                    <style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net"></a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>
                    </div>
                </div>
            </div> -->
                </div>
            </div>
        </div>

    </div>

</section>



<!-- <div class="card margeCard"> 
            <h5 class="card-header "> Positionnement de DFP </h5>
            <div class="card-body fluid">
                <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=dfp&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://fmovies2.org"></a><br>
                <style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net"></a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>
            </div>
</div>
</div> -->

<!--footer-->
    <footer>
        <?php include("footer.php"); ?>
    </footer>
<!--/footer-->
</body>
</html>