
<?php

date_default_timezone_set('Africa/Casablanca');

require_once('connectiondb.php');



$currentDate= date('Y/m/d H:i', time());
//la base de donne de fiche
$rq="select max(id_visite) maxid from visite";
$resultmax=$pdo->query($rq);
$tab=$resultmax->fetch();
$lastidVisite=$tab['maxid'];

$sql="insert into fiche(id_visite,date_creation) values (?,?)";
$params=array($lastidVisite,$currentDate);
$resVisite=$pdo->prepare($sql);
$resVisite->execute($params);


$idVisite=isset($_POST['idVisite'])?$_POST['idVisite']:0;

$rq="select max(id_visiteur) maxid from visiteur";
$resultmax=$pdo->query($rq);
$tab=$resultmax->fetch();
$lastid=$tab['maxid'];

//for visitor informations

$visiteur="select * from visiteur where id_visiteur=$lastid";
$res=$pdo->query($visiteur);
$row=$res->fetch();

$nom=strtoupper($row['NOM']);
$prenom=ucwords($row['PRENOM']);
$cin=strtoupper($row['CIN']);
$adresse=strtoupper($row['ADRESSE']);
$tel=$row['TEL'];

//for service name 

$rqser="select nomservice nmserv from service,visite where service.id_service=visite.id_service and id_visiteur=$lastid";
$result=$pdo->query($rqser);
$tab=$result->fetch();
$servnom=$tab['nmserv'];

//For visite info (hours/dates)

$visiteRq="select * from visite where id_visiteur=$lastid";
$resVisite=$pdo->query($visiteRq);
$rowV=$resVisite->fetch();

$objet=$rowV['OBJET'];
$date=$rowV['DATE'];
$heure_Visite=$rowV['HEURE_ENTREE'];


// $service=$row['NOMSERVICE'];
// $rq="insert into fiche (id_visite,date_creation) values (?,?)";
// $params=array($idVisite,$date);
// $res=$pdo->prepare($rq);
// $res->execute($params);
// $service="select nomservice from service,visite,visiteur where service.id_visiteur";

require('fpdf.php');
class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('logo.png',10,6,190);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Cell(80);
    // Title
    // $this->Cell(30,10,'Title',1,0,'C');
    // Line break
    $this->Ln(40);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    // $this->Cell(0,10,'pages'.$this->PageNo().'/{nb}',0,0,'C');
    $this->Cell(0,10,'avenue mohamed bel hassan el ouazzani hay nahda 2 BP-5015 Rabat Tel:0600000000 Fax:0500000000',0,0,'C');
}
}

// $nom=$pdo->query("select nom from visiteur where id_visiteur=1");
// Instanciation of inherited class
// function title()
// {
//     $this->SetFont('Times','',20);
//     $this->Cell(80);
//     $this->Cell(30,10,'Fiche de visite',10,1,'C');
//     $this->Ln(40);
// }

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',13);
$pdf->Cell(150);
$pdf->Cell(50,10,' date: '.$currentDate,10,1);
$pdf->SetFont('Times','',20);
// for($i=1;$i<=40;$i++)
//     $pdf->Cell(0,10,'Printing line number '.$i,0,1);
$pdf->Cell(80);
$pdf->Cell(50,10,'Fiche de visite',1,0,'C');

$pdf->Ln(30);


$pdf->SetFont('Times','',15);
$pdf->Cell(10);
$pdf->Cell(0,10,' Nom      : '.$nom,10,1);
$pdf->Cell(10);
$pdf->Cell(0,10,' Prenom  : '.$prenom,10,1);
$pdf->Cell(10);
$pdf->Cell(0,10,' CIN  : '.$cin,10,1);
$pdf->Cell(5);
$pdf->Cell(0,10,' Adresse : '.$adresse,10,1);
$pdf->Cell(5);
$pdf->Cell(0,10,'Num. de telephone : '.$tel,10,1);
$pdf->Cell(5);
$pdf->Ln(10);

$pdf->Cell(0,10,' Service   : '.$servnom,10,1);
$pdf->Cell(5);
$pdf->Cell(0,10,' Objet de visite  : '.$objet,10,1);
$pdf->Cell(5);
$pdf->Cell(0,10,'  Date de visite  : '.$date,10,2);
$pdf->Cell(5);
$pdf->Cell(0,10,' Heure de visite  : '.$heure_Visite,10,1);

//$pdf->Image('gestes-barrières.png',100,6,90,'C');
// $pdf->Cell(30,10,'Fiche de visite',10,1,'C');

$pdf->Output();

?>