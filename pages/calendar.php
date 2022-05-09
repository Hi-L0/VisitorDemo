<?php 
function build_calendar($month,$year){
    //first of all we'll create an array containing names of all days in a week
    $daysOfWeek=array('lundi','mardi','mercredi','jeudi','vendredi','samedi','dimanche');
    
    //then we'll get the first day of the month that is an argumentof this function
    $firstDayOfMonth=mktime(0,0,0,$month,1,$year);
    
    //now getting the number of days this month contains
    $numberDays=date('t',$firstDayOfMonth);
    
    //getting some informations about the first day of this month
    $dateComponents=getdate($firstDayOfMonth);

    //getting the name of this month
    $monthName=$dateComponents['month'];
    
    //getting the index value 0-6 of the first day of this month
    $dayOfWeek=$dateComponents['wday'];
    //getting the current date
    $dateToDay=date('d-m-Y');

    //now creating the html table
    $calendar="<table class='table table-bordered>";
    $calendar.="<center><h3>$monthName $year</h3></center>";
    $calendar.="<tr>";

    //creating the calendar hearders

    foreach($daysOfWeek as $day){
        $calendar.="<th class='header'>$day</th>";
    }
    $calendar.="</tr><tr>";
    //the variable  $SdaysOfWeek will make sure that there must be only 7 columns on our table

    if($dayOfWeek > 0){
        for($k=0 ; $k<$dayOfWeek ;$k++){
            $calendar.="<td></td>";        }
    }
    //initiating the day counter
    $currentDay=1;

    //getting the month number
    $month=str_pad($month,2,"0",STR_PAD_LEFT);
    
    while($currentDay<=$numberDays){
        
        //if servent column (samdi) reached,start a new row
        if($dayOfWeek==7){
            $dayOfWeek=0;
            $calendar.="</tr><tr>";
        }
        $currentDayRel=str_pad($currentDay,2,"0",STR_PAD_LEFT);
        $date="$currentDayRel-$month-$year";

        if($dateToDay==$date){
            $calendar.="<td class='today'><h4>$currentDay</h4>";
        }else{
            $calendar.="<td><h4>$currentDay<h4>";
        }
        $calendar.="</td>";
        
        //incrementing the counters
        $currentDay++;
        $dayOfWeek++;
    
    }
    //completing the row of the week in month,if necessary
    if($dayOfWeek!=7)
    {
        $remainingDays= 7-$daysOfWeek;
        for($i=0 ; $i<$remainingDays ; $i++)
        {
            $calendar.="<td></td>";
        }
    }
    $calendar.="</tr>";
    $calendar.="</table>";
    echo $calendar;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>calendar</title>
    <meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <style>
        table{
            background-color: red;
            table-layout: fixed;
        }
        td{
            width: 33%;
        }
        .today{
            background: yellow;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                $dateComponents=getdate();
                $month=$dateComponents['month'];
                $year=$dateComponents['year'];
                echo build_calendar($month,$year);
                ?>
            </div> 
        </div>
    </div>
</body>