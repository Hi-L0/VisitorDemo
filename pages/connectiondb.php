<?php
    try{
    $pdo=new PDO("mysql:host=localhost;dbname=gestion_visiteur","root",""); //provider
    }
    catch(Exception $e){
        die('ERROR: '.$e->getMessage());
    }

?>