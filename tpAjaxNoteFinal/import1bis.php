<?php
require_once ("include/class.pdo.inc.php");

  $pdo = PdoEtablissement::getPdoEtablissement();
  //$lesDetails = $pdo->getLesDetails($arrondissements);
 // $lesArrondissements=$pdo->getLesArrondissement();
  //$lesLignes =$_REQUEST ['nom']; 
  $arrondissements = $_REQUEST['arrondissements']; 
  $lesLignes = $pdo->getLesEcoles($arrondissements);
           
                echo json_encode($lesLignes);
                               
                //echo json_encode($lesLignes);
                

?> 				