<!DOCTYPE html>
<html>
<head>
	<title>frame</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" crossorigin="anonymous">
    <style> 
        #container{
            margin: 0px auto;
            padding: 10px;
            margin-left: 10px;
            margin-right: 10px;
            
        }
        /* input   {
            border-radius: 4px ;
            width: 50px;
            height: 25px;
            margin: auto;
            border-collapse: collapse;

        }     */
         button{
          /*  width: 100px;
            height: 25px;
            border-radius: 4px;
            background-color: rgb(255,255,255); */
            border-collapse: collapse;
            cursor: pointer;   
        }
    </style>
    <script src="formJs.js"></script>
</head>
<body>
    <div id="container">
        <form id="formulaire" action="connection.php" method="POST" >
            <table  width="700" cellspacing="0">
                <tr >
                    <th style="width: 260px; text-align: left;">Nom:</th>
                    <td></td>
                    <th style="width: 300px; text-align: left;">Prenom:</th>
                </tr>
                <tr>
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
                <tr>
                    <td colspan="3"></td>
                </tr>
                <tr >
                    <th align="left">CIN/identifiant:</th>
                    <td></td>
                    <th align="left">GSM: </th>
                </tr>
                <tr >
                <td >
                    <div  class="form-group">
                            <input type="text" id="cin" name="CIN" placeholder="CIN" maxlength="10" required="required" onkeypress="javascript:cinVerif(this.value);" class="form-control">
                        </div>
                    </td>
                    <td></td>
                <td>
                    <div  class="form-group">
                            <input type="text" name="Tel" id="Tel" placeholder="Telephone" maxlength="10" required="required" onkeypress="javascript:IntOnlyBis(this.value);" class="form-control">
                        </div>
                    </td>
                </tr>
                <tr >
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
        <!-- <b>Nom</b> &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>Prenom :</b><br>
        <input type="text" name="nom" id="nom" placeholder="enter nom"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" name="prenom" id="pr" placeholder="enter prenom"><br><br>
        <b>CIN/Identifiant: </b>  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>GSM:</b><br>
        <input type="text" id="cin" name="CIN" placeholder="CIN" maxlength="10"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" name="Tel" id="Tel" placeholder="Telephone" maxlength="10"> <br><br>
        <b>adresse:</b><br>
        <textarea placeholder="entrer adresse" rows="4" cols="50" id="adresse"></textarea> -->
    </div>
    
</body>
</html>