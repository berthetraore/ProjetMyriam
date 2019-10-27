<?php
require_once 'Personnes.php';
require_once 'PersonneDAO.php';
require_once 'Usagers.php';
require_once 'UsagersDAO.php';
require_once 'CartesUsagersDAO.php';
/****
 *--------------------------------------------------------------------------------------------------------------
 *                                              CREER DES USAGERS
 * --------------------------------------------------------------------------------------------------------------
 */
/*
//creer un usager
$usager1 = new Usagers();
$usager1->createNewUsager("Amadou", "Diouf", "700 777 5145", "amadou@diouf.name", "amadoudiouf");
echo '<pre>';
echo "afficher l'usager";
var_dump($usager1);
echo "afficher letupe de compte usager";
var_dump($usager1->getTypeCompte());
echo "afficher le cellulaire'usager";
$cell = $usager1->getNumCell();
echo '<pre>';
$usager0 = new Usagers();
$usager0->createNewUsager("Awa", "Diouf", "450 450 0000", "aida@ba.name", "awadioufa");

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
 *             RECHERCHE PAR NUMCELL AVANT D'INSERER UNE PERSONNE DANS LA BD USAGERS
 * --------------------------------------------------------------------------------------------------------------
 */
//Inserer les Usagers dans la BD
/*
//pour creer un usager
$usagertest = new PersonneDAO();
$usagertest->create($usager1);
var_dump($usagertest);

$user1= new PersonneDAO();
$user1->create($usager2);
$user2= new PersonneDAO();
$user2->create($usager3);
$user3= new PersonneDAO();
$user3->create($usager4);
$user4=PersonneDAO::create($usager0);
$user4=PersonneDAO::create($usager4);
//d'abord verifier si le numero existe dans la bd
*/

/*
if (empty($usagerO->findUsagerByCell($cell))) {
    $usagerO->create($usager1);
    var_dump($usagerO);
} else {
    ?>
    <script> console.log("cet usager existe deja ")</script>
    <?php
}
echo '<pre>';
var_dump($usagerO);
echo '<pre>';
/*

*/
/****
 *--------------------------------------------------------------------------------------------------------------
 *             RECHERCHE DANS LA BD USAGERS
 * --------------------------------------------------------------------------------------------------------------
 */
//toute les personnes
//$liste=UsagersDAO::findById();
//var_dump($liste);

$liste2 = UsagersDAO::findPersonnByCellPwd('450 444 0000', "aidaba");
var_dump($liste2);
