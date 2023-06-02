<?php
/**
 * @author Florain  <franck@yahoo.com>
 * 
 * Dans ce fichier :
 * - Nous avons deux erreurs
 * 
 */

namespace App\Controller;

use App\Repository\NouveauProduit;
use App\Response\RetourProduit;
use App\Type\TypeProduit;

/**
 * Class ProduitController
 * @package App
 */
class ProduitController
{
    /*
     * L'attribut nouveauProduit n'était pas déclarée
     *
     */
    private $nouveauProduit;
	public function __construct($nouveauProduit)
	{
		$this->nouveauProduit = $nouveauProduit;
	}

	public function getProduit()
	{
        /*ici j'ai un tableau associatif propriété qui n'est jamais utilisé
         *La méthode créer produit de la classe Nouveau produit n'est parcontre jamais utilisé alors qu'elle est déclarée
         * dans cette méthode...
         */

		$propriete = ["nom"=>"Biscuit", "prix"=>200];
        $produit = $this->nouveauProduit->creerProduit($propriete["nom"],$propriete["prix"]);

        $type = new TypeProduit($produit->getType());

		return new RetourProduit($produit, $type->getType());
	}
}
