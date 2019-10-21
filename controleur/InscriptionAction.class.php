<?php
require_once('./controleur/Action.interface.php');
require_once('./modele/UserDAO.class.php');

class InscriptionAction implements Action
{
    public function execute()
    {
        if (!ISSET($_SESSION)) session_start();
        if (ISSET($_SESSION["connected"]))    //déjà connecté
            return "default";

        if (!ISSET($_REQUEST["username"]))
            return "register";
        if (!$this->valide())
            return "register";
        $dao = new UserDAO();
        $x = new User();
        $x->setUsername($_REQUEST["username"]);
        $x->setPassword(md5($_REQUEST["password"]));
        if (!$dao->create($x)) {
            $_REQUEST["field_messages"]["username"] = "Cet utilisateur existe d&eacute;j&agrave;";
            return "register";
        }
        return "login";
    }

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
    }
}

?>