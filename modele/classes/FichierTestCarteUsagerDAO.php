<?php

require_once 'Cartes.php';
require_once 'CartesDAO.php';
require_once 'CarteUsagers.php';
require_once 'CartesUsagersDAO.php';
/*
****
*--------------------------------------------------------------------------------------------------------------
*      Activer les cartes et les attribuer a un usager
* --------------------------------------------------------------------------------------------------------------
*/
/*
*/
//$carte=CartesUsagersDAO::findCarteById('1420cf');
//var_dump($carte);
/*
if($carte==null){
    ?>
    <script> console.log("cette carte n'existe pas dans notre inventaire")</script>
    <?php
}

else{
*/
$carte = CartesUsagersDAO::findCarteUsagerById('1420cf');

var_dump($carte);
if ($carte != null) {
    ?>
    <script> console.log("cette carte appartient déja à quelqu'un")</script>
    <?php
}
/*
    else{

        $carte->activerCarte();
        var_dump($carte);
        //$carte=$carteUsager1;
       // $carteUsager1->activerCarte();

//var_dump($carteUsager1);
        $carte=CartesUsagersDAO::addCarteUsager('040372',199386);
       // $carteUsager1->activerCarte();
        ?>
        <script> console.log("cette carte appartient a"<?= $carte->getIdUsager()?>)</script>
        <?php
    }
*/