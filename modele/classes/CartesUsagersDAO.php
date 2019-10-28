<?php
require_once 'CarteUsagers.php';
require_once 'CartesDAO.php';

class CartesUsagersDAO extends CartesDAO

{
    /**
     * @param $id
     * attribuer una carte a un usager
     **/
    public static function addCarteUsager($carte, $usager)
    {

        $request = "INSERT INTO cartesusagers (idCarte,idUsager) values (:x,:y) ";
        $db = Database::getInstance();

        try {
            if (is_null($db)) {
                throw new PDOException("Impossible d'effectuer une requete de recherche verifier la connexion");
            }
            $pstmt = $db->prepare($request);
            $pstmt->bindValue(':x', $carte);
            $pstmt->bindValue(':y', $usager);
            $pstmt->execute();
            $pstmt->closeCursor();
            $pstmt = NULL;
            Database::close();
            ?>
            <script>console.log("Insertion complété l'ID:   <?=$usager->getIdUsager()?>")</script>

            <?php
        } catch (PDOException $exception) {
            $exception->getMessage();
        }
    }

    public static function updateCarteUsager($carte)
    {
        $request = "UPDATE cartesusagers SET idUsager=':idusager',idCarte=':idCarte' nbreTitre=':nbreTitre', statut=':stat', dateExpiration=':dexp', dateActivation='dact'";
        $db = Database::getInstance();
        try {
            $pstm = $db->prepare($request);
            $pstm->bindValue(':idusager', $carte->getIdUsager());
            $pstm->bindValue(':nbreTitre', $carte->getNbreTitre());
            $pstm->bindValue(':stat', $carte->getStatut());
            $pstm->bindValue(':dExp', $carte->getDateExpiration());
            $pstm->bindValue(':dact', $carte->getDateActivation());
            $pstm->bindValue(":idCarte", $carte->getIdCarte());

            $pstm->execute();
            $pstm->closeCursor();
            $pstm = NUll;
            Database::close();

        } catch (PDOException $exception) {
            throw $exception;
        }

    }

    /**
     * @param $id
     * Rechercher les cartes activés
     **/
    public static function findCarteUsagerByStatut()
    {
        $db = Database::getInstance();
        $listeCartesActives = array();
        try {
            if (is_null($db)) {
                throw new PDOException("Impossible d'effectuer une requete de recherche verifier la connexion");
            }
            $pstmt = $db->prepare("SELECT * FROM Cartesusagers WHERE statut =1");
            $pstmt->execute();
            while ($result = $pstmt->fetch(PDO::FETCH_OBJ)) {
                $carte = new CarteUsagers();
                $carte->loadFromObject($result);
                array_push($listeCartesActives, $carte);
                return $listeCartesActives;
            }
            $pstmt->closeCursor();
            $pstmt = NULL;
            Database::close();

        } catch (PDOException $exception) {
            $exception->getMessage();
        }
        return null;

    }


    /**
     * @param $id
     * Rechercher les cartes de l'usager
     **/
    public static function findCarteUsagerById($idcarte = null)
    {
        $request = "";
        $db = Database::getInstance();
        $listeCartesUsager = array();

        if ($idcarte == null)
            $request = "SELECT * FROM Cartesusagers ";
        else {
            $request = "SELECT * FROM Cartesusagers WHERE idcarte =:x";
        }

        try {
            if (is_null($db)) {
                throw new PDOException("Impossible d'effectuer une requete de recherche verifier la connexion");
            }
            $pstmt = $db->prepare($request);
            $pstmt->execute(array(':x' => $idcarte));
            if ($result = $pstmt->fetch(PDO::FETCH_OBJ)) {
                $carte = new CarteUsagers();
                $carte->loadFromObject($result);
                array_push($listeCartesUsager, $carte);
                return $listeCartesUsager;
            }
            $pstmt->closeCursor();
            $pstmt = NULL;
            Database::close();
            ?>
            <script>console.log("carteTrouvé:   <?=count($listeCartesUsager)?>")</script>
            <?php

        } catch (PDOException $exception) {
            $exception->getMessage();
        }
        return $listeCartesUsager;
        ?>
        <script>console.log("aucune carte Trouvé:   <?=count($listeCartesUsager)?>")</script>
        <?php
    }

    /**
     * @param $id
     * Rechercher les cartes de l'usager
     **/
    public static function findCarteUsagerByUsager($usager)
    {
        $db = Database::getInstance();
        $listeCartesUsager = array();
        try {
            if (is_null($db)) {
                throw new PDOException("Impossible d'effectuer une requete de recherche verifier la connexion");
            }
            $pstmt = $db->prepare("SELECT * FROM Cartesusagers WHERE idUsager =:x");
            $pstmt->execute(array(':x' => $usager));
            while ($result = $pstmt->fetch(PDO::FETCH_OBJ)) {
                $carte = new CarteUsagers();
                $carte->loadFromObject($result);
                array_push($listeCartesUsager, $carte);
                return $listeCartesUsager;
            }
            $pstmt->closeCursor();
            $pstmt = NULL;
            Database::close();
            ?>
            <script>console.log("carteTrouvé:   <?=count($listeCartesUsager)?>")</script>
            <?php

        } catch (PDOException $exception) {
            $exception->getMessage();
        }
        return NULL;
        ?>
        <script>console.log("aucune carte Trouvé:   <?=count($listeCartesUsager)?>")</script>
        <?php
    }

    /**
     * @param $id
     * ????????????????
     **/

    public static function addUsager($usager)
    {
        $request = "INSERT INTO cartesusagers (idUsager) values (:x) ";
        $db = Database::getInstance();

        try {
            if (is_null($db)) {
                throw new PDOException("Impossible d'effectuer une requete de recherche verifier la connexion");
            }
            $pstmt = $db->prepare($request);
            $pstmt->bindValue(':x', $usager);
            $pstmt->execute();
            $pstmt->closeCursor();
            $pstmt = NULL;
            Database::close();
            ?>
            <script>console.log("Insertion complété l'ID:   <?=$usager->getIdUsager()?>")</script>
            <?php
        } catch (PDOException $exception) {
            $exception->getMessage();
        }

    }


}