<?php
/**
 * @author Florain  <franck@yahoo.com>
 * 
 * Dans ce fichier :
 * - Nous avons une erreur
 * 
 */

namespace App\Type;

/**
 * Class TypeProduit
 * @package App
 */
class TypeProduit
{
  private $typeArray;
  private $type;
  public function __construct($type) {
    $this->type = $type;
    $this->typeArray = ["construction", "alimentaire", "decoratif"];
  }
  
	/**
	 * @return string
	 */
  public function getType()
  {
    //return $this->typeArray[type];
      return $this->typeArray[this->type];
      /*
       * Ici nous devons bien faire référence au type de cette classe avec le mot clé this.
       */
  }
}
