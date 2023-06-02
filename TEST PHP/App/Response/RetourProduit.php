<?php
/**
 * @author Florain  <franck@yahoo.com>
 * 
 * Dans ce fichier :
 * - Nous avons une erreur
 * - Nous avons une donnée manquante
 * 
 */

namespace App\Response;

include_once("Produit.php");

use App\Entity\Produit;

/**
 * Class NouveauProduit
 * @package App
 */

class RetourProduit {
  
	/**
	 * @var Produit
	 */
	private $produit;

    /*
     * Je remarque qu'au niveau du constructeur de la class RetourProduit, on instanci un type qui n'est paas
     * déclarer en tant qu'attribut de la classe
     */
    private $type;
	public function __construct($produit, $type)
	{
		$this->produit = $produit;
		$this->type = $type;
	}
  public function getProduit() {
    return "Produit: ".$this->produit->getNom().
        "<br> Type: ".$this->type.
        "<br> Prix:  ".$this->produit->getPrix().
        "&euro;<br> TVA:".this->produit->TVA()." &euro;";
  }
/*
 * Dans notre méthode getProduit, on affiche la TVA mais on ne récupère pas sa valeur
 */
}