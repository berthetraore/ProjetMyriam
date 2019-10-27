<?php
require_once 'Cartes.php';
require_once 'CartesDAO.php';
require_once 'CartesUsagersDAO.php';


/****
 *--------------------------------------------------------------------------------------------------------------
 *      CREER DES CARTES ET LES INSERER,SUPPRIMER DANS LA TABLE CARTES
 * --------------------------------------------------------------------------------------------------------------
 */
/*
//instance trois cartes
$carte= new Cartes();
$carte->createCarte("classique");
echo '<pre>';
var_dump($carte);
echo '<pre>';
$carte1= new Cartes();
$carte1->createCarte("premium");
echo '<pre>';
var_dump($carte1);
echo '<pre>';
$carte2= new Cartes();
$carte2->createCarte("famille");
echo '<pre>';
var_dump($carte2);
echo '<pre>';

//Inseres les cartes dans la BD
$carte0=new CartesDAO();
$carte0->createCarte($carte);
echo '<pre>';
var_dump($carte0);
echo '<pre>';
$carteO1=new CartesDAO();
$carteO1->createCarte($carte1);
echo '<pre>';
var_dump($carteO1);
echo '<pre>';
$carteO2=new CartesDAO();
$carteO2->createCarte($carte2);
echo '<pre>';
var_dump($carteO2);
echo '<pre>';
*/
//affiche la liste des cartes
/*
$listeCartes=CartesDAO::findCarteById();


echo '<pre>';
var_dump($listeCartes);
echo '<pre>';
die();
*/

//cherche une carte
$listeCartes = CartesDAO::findCarteById("2561e3");

//si on ne trouve pas la carte
if (empty($listeCartes)) {

    ?>
    <script> console.log("cette carte n'existe pas ")</script>
    <?php
} else {
    //trouver l'objet carte
    $carte = new Cartes();
    //recuperer l'id
    $carte->setIdCarte($listeCartes[0]->getIdCarte());

    //supprimmer l'objet
    CartesDAO::deleteCarte($carte);
    ?>
    <script> console.log("la carte a éte supprimé avec succes <?= $listeCartes[0]->getIdCarte()?>")</script>
    <?php
}
?>
