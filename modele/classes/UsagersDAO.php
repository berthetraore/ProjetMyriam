<?php
require_once 'Database.php';
require_once 'Usagers.php';
require_once 'Personnes.php';
require_once 'PersonneDAO.php';
class UsagersDAO extends PersonneDaO
{
    /**
     * creer un usager
     * @param $usager
     */
    public static function createUsager(Usagers $usager)
    {

        $db = Database::getInstance();

        $request = "INSERT INTO usagers (idUsager) values (:id)";

        try {

            //On s'assure que la connexion n'est pas null
            if (is_null($db)) {
                throw new PDOException("Impossible d'insérer un usager");
            }

            //Preparation de la requette SQL pour l'execution(Tableau)
            $pstm = $db->prepare($request);

            $pstm->bindValue(':id', $usager->getId());

            $pstm->execute();

            $pstm = NULL;
            //Deconnexion a la base de donnée
            Database::close();


            ?>
            <script>console.log("Insertion complété de l'usager avec l'ID:   <?=$usager->getNom()?>")</script>
            <?php

        } catch (PDOException $ex) {
            ?>
            <script>console.log("Error createDAO:  <?= $ex->getMessage()?>")</script>
            <?php
        }


    }

    public static function findUsagerByCell($cell)
    {
        $request = "SELECT * FROM personnes WHERE numCell = :x AND typeCompte =3";

        $db = Database::getInstance();
        try {

            if (is_null($db)) {
                throw new PDOException("Impossible d'effectuer une requete de recherche verifier la connexion");
            }
            $pstmt = $db->prepare($request);
            $pstmt->execute(array(':x' => $cell));

            if ($result = $pstmt->fetch(PDO::FETCH_OBJ)) {
                $usager = new Usagers();
                $usager->setPrenom($result->prenom);
                $usager->setNom($result->nom);
                $usager->setNumCell($result->numCell);
                $usager->setMail($result->mail);
                $usager->setPassword($result->password);
                $usager->setActived($result->actived);
                $usager->setDateActivation($result->dateActivation);
                $usager->setDateModification($result->dateModification);

                $pstmt->closeCursor();
                return $usager;

            }
            $pstmt->closeCursor();
            return NULL;

        } catch (PDOException $exception) {
            ?>
            <!-- Affichage du message d'erreur au console personne-->
            <script>console.log("Error createDAO:  <?= $exception->getMessage()?>")</script>
            <?php
        }


    }


    /**
     * modifier les imfos sur un usager
     * @param Usagers $usagerObjet
     */

}