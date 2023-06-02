<?php
/**
 * @author Florain  <franck@yahoo.com>
 * 
 * Dans ce fichier :
 * - Nous avons deux erreurs
 * - Nous avons une méthode manquante
 * 
 */

namespace App\Entity;

/**
 * Class Produit
 * @package App
 */
class Produit
{
	/**
	 * @var string
	 */
    private $nom;
    /**
     * @var int
     */
    private $type;
    /**
     * @var int
     */
    private $prix;
    
	/**
	 * Constructeur Product.
	 *
	 * @param string $nom
	 * @param int $type
	 * @param int $prix
   * 
	 */
    public function __construct($nom, $type, $prix)
    {
      // Il ya une erreur au niveau de la déclaration du this nom. 
     //   $this->$nom = $nom;
        $this->nom = $nom;
        $this->type = $type;
        $this->prix = $prix;
    }
    
	/**
	 * @return string
	 */
    public function getNom()
    {
      //Cette fonction devrait retourner un nom 
    //  return $this->prix;
      return $this->nom;
    }
	/**
	 * @return int
	 */
    public function getType()
    {
      return $this->type;
    }
    public function TVA_Aliment()
    {
      return $this->prix * 0.055;
    }

    
	/**
	 * @return int $prix
	 */
    public function TVA()
    {
      return $this->prix * 0.196;
    }
// La méthode manquante serait la déclaration du prix sans la TVA 
    public function getPrix(){
      return $this->prix;
    }
}