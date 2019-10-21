<?php
require_once '../../modele/CartesDAO.php';
require_once '../../modele/CartesUsagersDAO.php';


/****
 *--------------------------------------------------------------------------------------------------------------
 *                                              CREER DES CARTES ET LES INSERER,SUPPRIMER DANS LA TABLE CARTES
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
$carte0->create($carte);
echo '<pre>';
var_dump($carte0);
echo '<pre>';
$carteO1=CartesDAO::create($carte1);
echo '<pre>';
var_dump($carteO1);
echo '<pre>';
$carteO2=new CartesDAO();
$carteO2->create($carte2);
echo '<pre>';
var_dump($carteO2);
echo '<pre>';

//affiche la liste des cartes
/*
$carte0=CartesDAO::findById();

echo '<pre>';
var_dump($carte0);
echo '<pre>';
die();
*/
/*
//cherche une carte
$listeCartes=CartesDAO::findById("a143be");

//si on ne trouve pas la carte
if(empty($listeCartes)){

    ?>
    <script> console.log("cette carte n'existe plus ")</script>
    <?php
}
else{
    //trouver l'objet carte
    $carte= new Cartes();
    //recuperer l'id
    $carte->setIdCarte($listeCartes[0]->getIdCarte());

    //supprimmer l'objet
    CartesDAO::delete($carte);
    ?>
    <script> console.log("la carte a éte supprimé avec succes <?= $listeCartes[0]->getIdCarte()?>")</script>
    <?php
}
*/
/****
 *--------------------------------------------------------------------------------------------------------------
 *                                              CREER DES USAGERS
 * --------------------------------------------------------------------------------------------------------------
 */
/*
//creer un usager
$usager1 = new Usagers();
$usager1->createNewUsager("birima", "sall", "514 555 0000", "awa@diouf.name", "awadiouf");
echo '<pre>';
var_dump($usager1);
echo '<pre>';

$usager2 = new Usagers();
$usager2->createNewUsager("birima", "sall", "450 444 0000", "aida@ba.name", "aidaba");
echo '<pre>';
var_dump($usager2);
echo '<pre>';
$usager3 = new Usagers();
$usager3->createNewUsager("tata", "dieng", "514 333 0000", "tata@dieng.name", "tatadieng");
echo '<pre>';
var_dump($usager3);
echo '<pre>';
$usager4 = new Usagers();
$usager4->createNewUsager("birima sall", "dieng", "450 333 3333", "tata@dieng.name", "tatadieng");
echo '<pre>';
var_dump($usager4);
echo '<pre>';
*/

/****
 *--------------------------------------------------------------------------------------------------------------
 *                                              RECHERCHE PAR NUMCELL AVANT D'INSERER UNE PERSONNE DANS LA BD USAGERS
 * --------------------------------------------------------------------------------------------------------------
 */
//Inserer les Usagers dans la BD
/*
//pour creer un usager
$usagerO = new UsagersDAO();
//d'abord verifier si le numero existe dans la bd
$cell = $usager1->getNumCell();
if (empty($usagerO->findByCell($cell))) {
    $usagerO->create($usager1);
} else {
    ?>
    <script> console.log("cet usager existe deja ")</script>
    <?php
}
echo '<pre>';
var_dump($usagerO);
echo '<pre>';

//on essaye d'iserer un udager avec le meme num tel
$usagerO4 = new UsagersDAO();
$cell = $usager4->getNumCell();
if (empty($usagerO4->findByCell($cell))) {
    $usagerO4->create($usager4);
} else {
    ?>
    <script> console.log("cet usager existe deja ")</script>
    <?php
}
echo '<pre>';
var_dump($usagerO4);
echo '<pre>';


$usagerO1 = new UsagersDAO();
$usagerO1->create($usager2);
echo '<pre>';
var_dump($usagerO2);
echo '<pre>';
$usagerO2 = new UsagersDAO();
$usagerO2->create($usager3);
echo '<pre>';
var_dump($usagerO2);
echo '<pre>';
*/
/****
 *--------------------------------------------------------------------------------------------------------------
 *                                              AJOUTER UNE CARTE A UN USAGER
 * --------------------------------------------------------------------------------------------------------------
 */
//cherche une carte

$carte = CartesUsagersDAO::findById("040372");
if (empty($carte)) {
    ?>
    <script> console.log("cette carte n'existe pas ")</script>
    <?php
}
$carte = CartesUsagersDAO::findByUsager("583e2e");
if (empty($carte)) {
    ?>
    <script> console.log("cette usager n'existe pas ")</script>
    <?php
    $carte = CartesUsagersDAO::addUsager("583e2e");
}


/****
 *--------------------------------------------------------------------------------------------------------------
 *                                              AJOUTER DES TITRES A UNE CARTE d'UN USAGER
 * --------------------------------------------------------------------------------------------------------------
 */
