<?php

class Tarif {

  private $num_prest;
  private $num_categ;
  private $prix;
  
  public static function getTarifs():Array {
		$db = Connexion::get();
		$tarifs = $db->query("SELECT type_prest, lib_categ, prix FROM tarif, prestation, categorie WHERE tarif.num_categ = categorie.num_categ AND tarif.num_prest = prestation.num_prest ORDER BY prix");
		$tableau = $tarifs->fetchAll();
		return $tableau;
	}
}
	
	
