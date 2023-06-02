<?php
/**
 * @author Florain  <franck@yahoo.com>
 * 
 * Dans ce fichier :
 * - Nous avons deux erreurs
 * 
 */

namespace App\Controller;

//use App\Repository\NouveauProduit;
use App\Response\RetourProduit;
use App\Type\TypeProduit;

/**
 * Class ProduitController
 * @package App
 */
class ProduitController
{
	public function __construct($nouveauProduit)
	{
		$this->nouveauProduit = $nouveauProduit;
	}

	public function getProduit()
	{
		$propriete = ["nom"=>"Biscuit", "prix"=>200];
        $produit = $this->nouveauProduit->creerProduit();

        $type = new TypeProduit($produit->getType());

		return new RetourProduit($produit, $type->getType());
	}
}
