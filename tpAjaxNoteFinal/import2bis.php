<?php
require_once ("include/class.pdo.inc.php");

 $pdo = PdoEtablissement::getPdoEtablissement();
 
 $code = $_REQUEST['code'];
 $lesCodes = $pdo->getLesDetails($code);
 
    echo json_encode($lesCodes);

?>