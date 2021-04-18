<?php 
require_once "Connexion.php"; 

class Usager{
	private $nom;
	private $num_carte;
	private $lib_categ;
	private $date_carte;
	private $mt_caution;
	
	public function __construct($nom, $num_carte, $lib_categ, $date_carte, $mt_caution) {
		$this->nom = $nom;
		$this->num_carte = $num_carte;
		$this->lib_categ = $lib_categ;
		$this->date_carte = $date_carte;
		$this->mt_caution = $mt_caution;
	}
	
	public static function getUsagers():Array {
		$db = Connexion::get();
		$usagers = $db->query("SELECT nom, num_carte, lib_categ, date_carte, mt_caution FROM usager, categorie WHERE usager.num_categ = categorie.num_categ");
		$tableau = $usagers->fetchAll();
		return $tableau;
	}
	
	public static function get($num_carte):Usager {
		$db = Connexion::get();
		$resultat = $db->query("SELECT nom, num_carte, lib_categ, date_carte, mt_caution FROM usager, categorie WHERE usager.num_carte = '$num_carte' AND usager.num_categ = categorie.num_categ");		
		$usager = $resultat->fetch();
		return new Usager($usager["nom"], $usager["num_carte"], $usager["lib_categ"], $usager["date_carte"], $usager["mt_caution"]);
	}

	public function getNom():String {
		return $this->nom;
	}
	
	public function getNumCarte():String {
		return $this->num_carte;
	}
	
	public function getCategorie():String {
		return $this->lib_categ;
	}
	
	public function __toString(): string {
        return "<br> Nom : $this->nom <br> Catégorie : $this->lib_categ <br> Date de la carte : $this->date_carte <br> Montant de la caution : $this->mt_caution <br> ";
		
    }
	
	public static function creerUsager(Usager $usager) {
		$db = Connexion::get();
		$num_categ = $db->query("SELECT usager.num_categ FROM usager, categorie WHERE usager.num_categ = categorie.num_categ AND 'Usager->num_categ = categorie.num_categ'");
		$query = $db->query("INSERT INTO 'usager' VALUES ('Usager->nom', 'Usager->num_carte', 'Usager->num_categ', 'Usager->date_carte', 'Usager->mt_caution'");
		
	}

	
}