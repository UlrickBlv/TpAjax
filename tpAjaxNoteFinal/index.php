<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script src="js/jquery.js" type="text/javascript"></script>
        <script src="js/monJsdemo1.js" type="text/javascript"></script>
    </head>
    <body>

<?php

  require_once ("include/class.pdo.inc.php");

  $pdo = PdoEtablissement::getPdoEtablissement();
  $lesArrondissements=$pdo->getLesArrondissement();
 
?>
<h2>Choisir votre Ecole primaire</h2>

Selectionner un arrondissement
<select id="arrondissements" name ="arrondissements">
    <option disabled>...</option>
  <?php
    foreach ($lesArrondissements as $unarr)
    {
        echo "<option>".$unarr['arrondissement']."</option>";
    }       
     ?>
</select>
<table>
Selectionner une ecole de cet arrondissement
<select id="ecoles" name = "ecoles">
    

    
   
</select>
</table> 
<div id ="detail" name="detail"> 
    
    

</div>
</body>
</html>