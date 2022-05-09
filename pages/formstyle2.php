
<!-- <//?php
    //require_once("connectiondb.php");
    $rq="select * from visiteurs";
    $result=$pdo->query($rq);
?> -->



<!DOCTYPE HTML>
<html>
    <head>
        <title> formulaire </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <script src="formJs.js"></script>
    </head>
    <body>
        <header>
            <?php 
                include("menu.php");
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
            <div class="panel panel-primary">
                <div class="panel-heading"> Visite </div>
                <div class="panel-body">
                    <form id="formulaire" action="connection.php" method="POST" >
                        <iframe src="frame.html">
                    </form>
                </div>
            </div>
       </div>








    </body>
</html>