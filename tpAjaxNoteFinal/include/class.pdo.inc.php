﻿<?php
/** 
 * Classe d'accès aux données. 
 
 * Utilise les services de la classe PDO
 * pour le tp ajax
 * Les attributs sont tous statiques,
 * les 4 premiers pour la connexion
 * $monPdo de type PDO 
 * $monPdoEtablissement qui contiendra l'unique instance de la classe
 
 * @package default
 * @author Cheri Bibi
 * @version    1.0
 * @link       http://www.php.net/manual/fr/book.pdo.php
 */

class PdoEtablissement{   		
      	private static $serveur='mysql:host=localhost';
      	private static $bdd='dbname=bdetablissement';   		
      	private static $user='root' ;    		
      	private static $mdp='root' ;	
	private static $monPdo;
	private static $monPdoEtablissement=null;
/**
 * Constructeur privé, crée l'instance de PDO qui sera sollicitée
 * pour toutes les méthodes de la classe
 */				
	private function __construct(){
    	self::$monPdo = new PDO(self::$serveur.';'.self::$bdd, self::$user, self::$mdp); 
		self::$monPdo->query("SET CHARACTER SET utf8");
	}
	public function _destruct(){
		self::$monPdo = null;
	}
/**
 * Fonction statique qui crée l'unique instance de la classe
 
 * Appel : PdoEtablissement::getPdoEtablissement();
 
 * @return l'unique objet de la classe PdoEtablissement
 */
	public  static function getPdoEtablissement(){
		if(self::$monPdoEtablissement==null){
			self::$monPdoEtablissement= new PdoEtablissement();
		}
		return self::$monPdoEtablissement;  
        }
    public function getLesEtablissements()
    {
        $req = "select * from etablissement group by nom";
		$rs = self::$monPdo->query($req);
		$ligne = $rs->fetchAll();
		return $ligne;
    }
     public function getLesArrondissement()
    {
        $req = "select * from etablissement group by arrondissement ";
		$rs = self::$monPdo->query($req);
		$arr = $rs->fetchAll();
		return $arr;
    }
     public function getLesEcoles($arrondissements)
    {
         //$arrondissements=$arrondissements['arrondissements'];
        $req = "select * from etablissement where etablissement.arrondissement ='$arrondissements'";
		$rs = self::$monPdo->query($req);
		$ecoles = $rs->fetchAll();
		return $ecoles;
    }
      public function getLesDetails($code)
    {
         //$arrondissements=$arrondissements['arrondissements'];
        $req = "select * from etablissement where etablissement.code='$code'";
		$rs = self::$monPdo->query($req);
		$details = $rs->fetchAll();
		return $details;
    }
    
}
?>