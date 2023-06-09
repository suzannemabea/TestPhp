<?php
//require_once ("../App/Entity/Produit.php");

namespace App\Repository;
/**
 * @author Florain  <franck@yahoo.com>
 * 
 * Dans ce fichier :
 * - Nous avons deux erreurs
 * 
 */


use App\Entity\Produit;

/**
 * Class NouveauProduit
 * @package App
 */
class NouveauProduit
{
  public function creerProduit($nom, $prix){


		//return new Produit($nom, 2, $nom);
		return new Produit($nom, 2, $prix);

      /*Sachant que le constructeur de la méthode Produit prend 3 valeurs en paramètre, il serait
    judicieux de rajouter une variable type à la méthode creerProduit, sinon tous les nouveaux produits auront
    le meme type : 2

     */
	}
    /*
     * Dans cette class, nous avons une nouvelle fonction qui crée un nouveau produit en prenom en entrée
     * son nom et un type qui n'est jamais utilisé.
     *
     */
}