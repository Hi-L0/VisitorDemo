<!-- etape2-->
<?php 
require_once('connectiondb.php');
$date=isset($_POST['date'])?$_POST['date']:"";
$time=isset($_POST['time'])?$_POST['time']:"";
$rq="select max(id_visiteur) last_id from visiteur";
$residVisiteur=$pdo->query($rq);
$tab=$residVisiteur->fetch();
$idVisiteur=$tab['last_id'];

 $heure="select count(*) heure from visite where id_visiteur=$idVisiteur and date='$date' and heure_entree='$time'";
 $res=$pdo->query($heure);
 $tab=$res->fetch();
 $nbrHeure=$tab['heure'];

 $currentDate=date('Y-m-d',strtotime("+2 days"));

?>
<!DOCTYPE HTML>
<html>
    <head>
        <title> formulaire </title>
        <link rel="shortcut icon" sizes="114x114" type="image/x-icon" href="favicon.ico" >
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" crossorigin="anonymous">
        <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
        <link href="jquery.datetimepicker.min.css" rel="stylesheet">
        <script src="formJs.js"></script>
        <style>
            
            .container .card{
                margin: auto;
                width: 800px;
                height:460px ;
                padding:0px;
            }
            .container .margetop{
                margin-top: 60px;
            }
            table{
                width: 700px;
                margin-left: 20px;
            } 
            optgroup{
                font-size: 9px;
            }

        </style>
    </head>
    <body>
        <header>
            <?php 
                include("menuWithoutReservation.php");
            ?>
            <!-- <div id="div1">
                <table id="table1">
                    <tr>
                        <td></td>
                    </tr>
                </table>
            </div> -->
        </header>
    
        <div class="container">
            <div class="card margetop"> 
                <h5 class="card-header "> Réservation </h5>
                <div class="card-body">
                    <form method="POST" action="connection2.php">
                        <table>
                            <?php if($nbrHeure>1){ ?>
                                <div class="alert alert-danger"> 
                        <?php echo "vous avez reserver le meme rendez-vous";?>
                    </div><?php }?>
                            <tr>
                                <th> select service visité: </th>
                                <th width="50px"></th>
                                <th> objet de visite: </th>
                            </tr>
                            <tr>
                                <td align="left" valign="top">
                                    <div class="col-xs-3 form-group">
                                        <fieldset>
                                            <select name="abv" id="" placeholder="select service" class="form-select" aria-label=".form-select-sm example" required="required">
                                                <option></option>
                                                <option value="sg">Secrétaire Génerale FP</option>
                                                <optgroup label="Direction affaires administratives et ressouce humaines">Direction affaires administratives et ressouce humaines  
                                                    <optgroup label="Division Ressources Humaines">
                                                        <option value="sgap">service gestion affaires du personnel</option>
                                                        <option value="sgcp">service gestion carriere du personnel</option>
                                                    </optgroup>
                                                    <optgroup label="Division Ressources Humaines">
                                                        <option value="spb">Service Programmation et Budget</option>
                                                        <option value="sagp">Service affaires génerale et parq </option>
                                                        <option value="scm">Service comptabilité et marchés</option>
                                                        <option value="si">Service informatique</option>
                                                    </optgroup>
                                                    <optgroup label="Division affaires Juridique et relation avec le citoyen">    
                                                        <option value="saf">Service affaires Juridique</option>
                                                        <option value="src">Service relation avec le citoyen </option>
                                                    </optgroup>
                                                </optgroup>

                                                <optgroup label="Direction Planification et Evaluation">
                                                        
                                                        <option value="ssps">Service secteur primaire et secondaire</option>
                                                        <option value="sst">Service secteur tertiaire</option>
                                                        <option value="sc">Service Carte</option>
                                                        <option value="sio">Service information et orientation</option>
                                                        <option value="ssil">Service suivi insertion des lauréats</option>
                                                        <option value="se">Service Evaluation</option>
                                                        <option value="scomm">Service Communication</option>
                                                </optgroup>
                                                <optgroup label="Direction Coordination Pédagogique et Secteur Privé">
                                                    <option value="saps">Service autorisations et promotion du secteur</option>
                                                    <option value="sqa">Service Qualification et Accreditation</option>
                                                    <option value="sctrl">Service Controle</option>
                                                    <option value="spsps">Service Programmes Secteur Primaire et Secondaire</option>
                                                    <option value="spst">Service Progrmmes Secteur tertiaire</option>
                                                    <option value="spfe">Service Personnel Formateur et d'Encadrement</option>
                                                    <option value="secg">Service Examens et Concours Général</option>
                                                    <option value="sn">Service Normalisation</option>
                                                </optgroup>
                                                <optgroup label="Direction Formation en Millieu Professionnel">
                                                    <option value="sgp">Service Gestion et Promotion de FCE</option>
                                                    <option value="scf">Service Controle De la FCE</option>
                                                    <option value="seif">Service Etude d'Impact de la FCE</option>
                                                    <!-- <option value="saap">Service Apprentissage Agriculture et Peche</option>
                                                    <option value="saa">Service Apprentissage Artisanat</option> 
                                                    <option value="satc">Service Apprentissage Textile et Cuire</option>
                                                    <option value="sat">Service Apprentissage Tourisme</option>
                                                    <option value="sabi">Service Apprentissage BTP et IMMEE</option>
                                                    -->
                                                    <option value="sfpa">Service Formation Professionnelle Altérnée</option>
                                                </optgroup>
                                                <optgroup label="Direction Formation des Détenus">
                                                    <option value="sfp">Service formation pensionnaire des CRE</option>
                                                    <option value="sfda">Service Formation des détenus adultes</option>
                                                </optgroup>
                                                <optgroup label="Direction Coopération et Partenariat">
                                                    <option value="som">Service Coopération Multilatérale </option>
                                                    <option value="scb">Service Coopération Bilatérale</option>
                                                    <option value="sp">Service Partenariat</option>
                                                </optgroup>
                                            </select>
                                        </fieldset>    
                                    </div> 
                                </td>
                                <td width="20px"></td>
                                <td width="400px">
                                    <div class="form-group">
                                        <textarea name="objetVisite" id="objet" cols="15" rows="5" class="form-control" required="required"></textarea>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>Date de visite:</th>
                                <td width="20px"></td>
                                <th>Heure de visite:</th>
                            </tr>
                            <tr>
                                <td >
                                    <!-- we gonna implement calendar here i guess-->
                                    <input type="date" id="txtDate" class="form-control" name="date" min="<?php echo $currentDate?>"  required>
                                    <!--this is heure_debut-->
                                </td>
                                <td width="20px"></td>
                                <td>
                                    <select name="time" id="time" class="form-control">
                                        <option value="09:00:00" <?php if($nbrHeure == 5){echo "disabled";} ?>>09:00</option>
                                        <option value="09:30:00" <?php if($nbrHeure == 5){echo "disabled";} ?>>09:30</option>
                                        <option value="10:00:00" <?php if($nbrHeure == 5){echo "disabled";} ?>>10:00</option>
                                        <option value="10:30:00" <?php if($nbrHeure == 5){echo "disabled";} ?>>10:30</option>
                                        <option value="11:00:00" <?php if($nbrHeure == 5){echo "disabled";} ?>>11:00</option>
                                        <option value="11:30:00" <?php if($nbrHeure == 5){echo "disabled";} ?>>11:30</option>
                                        <option value="12:00:00" <?php if($nbrHeure == 5){echo "disabled";} ?>>12:00</option>
                                        <option value="13:00:00" <?php if($nbrHeure == 5){echo "disabled";} ?>>13:00</option>
                                        <option value="13:30:00" <?php if($nbrHeure == 5){echo "disabled";} ?>>13:30</option>
                                        <option value="14:00:00" <?php if($nbrHeure == 5){echo "disabled";} ?>>14:00</option>
                                        <option value="14:30:00" <?php if($nbrHeure == 5){echo "disabled";} ?>>14:30</option>
                                        <option value="15:00:00" <?php if($nbrHeure == 5){echo "disabled";} ?>>15:00</option>
                                        <option value="15:30:00" <?php if($nbrHeure == 5){echo "disabled";} ?>>15:30</option>
                                        <option value="16:00:00" <?php if($nbrHeure == 5){echo "disabled";} ?>>16:00</option>
                                    </select> 
                                </td>
                            </tr>
                            <tr height="90">
                                <td colspan="3">
                                    <?php if(!empty($date=isset($_POST['date']))){
                                        if($currentDate>$date){?>
                                        <div class="alert alert-danger">
                                            <?php echo 'selectionner une autre date ' ?>
                                        </div>
                                        <?php }}?>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3" align="right"><button class="btn btn-primary" type="submit"> suivant </td>
                            </tr>
                        </table>
                    </form>
                    <!-- <ul class="inline"><li>1</li><li>2</li><li>3</li></ul> -->
                    <!-- <center>
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="FormVisite.php">1</a></li>
                            <li class="page-item active "><a class="page-link" href="">2</a></li>
                            <li class="page-item disabled"><a class="page-link" href="">3</a></li>
                        </ul>
                    </center>  -->
                </div>
             </div>
       </div> 
       <!-- footer --> 
       <br><br>
       <?php include("footer.php");?>

    
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="jquery.datetimepicker.full.min.css" rel="stylesheet"></script>
        <script>
            const picker = document.getElementById('txtDate');
            picker.addEventListener('input', function(e){
            var day = new Date(this.value).getUTCDay();
            if([6,0].includes(day)){
                e.preventDefault();
                this.value = '';
                alert('les weekends ne sont pas disponibles');
            }
            });

            /*$('#picker').datetimepicker({
                timerpicker:true,
                datepicker:true,
                format:'d-m-Y H:i',//dateformat
                value:'12-09-2020 00:00',
                weeks:true,
                hours:false,
                step:30
            })*/

            // $(function(){
            //     var dtToday = new Date();
                
            //     var month = dtToday.getMonth() + 1;
            //     var day = dtToday.getDate();
            //     var year = dtToday.getFullYear();
            //     if(month < 10)
            //         month = '0' + month.toString();
            //     if(day < 10)
            //         day = '0' + day.toString();
                
            //     var minDate= year + '-' + month + '-' + day;
                
            //     $('#txtDate').attr('min', minDate);
            // });
        </script>



    </body>
</html>