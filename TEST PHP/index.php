<?php
require_once ("App/Repository/NouveauProduit.php");
require_once ("App/Controller/ProduitController.php");
/**
 *
 * @author Florain  <franck@yahoo.com>
 *
 * Affichage attendu(output)
 * [  Produit : Biscuit
 *    Type: alimentaire
 *    Prix: 200€
 *    TVA: 11€
 * ]
 *
 */



use App\Repository\NouveauProduit;
use App\Controller\ProduitController;

$nouveauProduit = new NouveauProduit();

$produitController = new ProduitController($nouveauProduit);

$retourProduit = $produitController->getProduit();

?>
<form action="index.php" method="POST">
    Nom du produit : <input type="text" name="nom">

</form>
