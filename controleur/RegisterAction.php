<?php
require_once('./controleur/Action.php');
require_once('./modele/UsagersDAO.php');
require_once('./modele/ConnectUsager.php');

class RegisterAction implements Action
{
    public function execute()
    {
        if (!ISSET($_SESSION))
            session_start();
        if (ISSET($_SESSION["connected"]))    //déjà connecté
            return "LoginUsager";

        if (!ISSET($_REQUEST["fname"]) || !ISSET($_REQUEST["fsurname"]) || !ISSET($_REQUEST["femail"]) || !ISSET($_REQUEST["fcellulaire"]) || !ISSET($_REQUEST["fpassword"]) || !isset($_REQUEST["fpassword-repeat"]))
            return "RegisterUsager";
        if (!ConnectUsager::inscription())
            return "RegisterUsager";

        //$dao = new UsagersDAO();
        //$x = new Personnes();
        $udao = new UsagersDAO();
        //on verifie qu'aucun usager ne possede ce cellulaire dans la BD
        $x = $udao->findByCell($_REQUEST['fcellulaire']);
        //Si c'est la cas on peut preceder a la creation de l'usager
        if ($x == null) {

            $x->setPrenom($_REQUEST['fname']);
            $x->setNom($_REQUEST['fsurname']);
            $x->setEmail($_REQUEST['femail']);
            $x->setNumCell($_REQUEST['fcellulaire']);
            $x->setPassword($_REQUEST["fpassword"]);
            $x->setTypeCompte($_REQUEST['ftypecompte']);

            if (!$udao->create($x)) {
                ConnectUsager::getMessage($_REQUEST["fcellulaire"]);
                return "registerUsager";
            }
            return "LoginUsager";
        }
    }
}

/*
    public function valide()
    {
        $result = true;
        if ($_REQUEST['username'] == "") {
            $_REQUEST["field_messages"]["username"] = "Donnez votre nom d'utilisateur";
            $result = false;
        }
        if ($_REQUEST['password'] == "") {
            $_REQUEST["field_messages"]["password"] = "Mot de passe obligatoire";
            $result = false;
        }
        if ($_REQUEST['password'] != $_REQUEST['password2']) {
            $_REQUEST["field_messages"]["password2"] = "Les 2 mots de passe doivent &ecirc;tre identiques";
            $result = false;
        }
        return $result;
    }*/


?>