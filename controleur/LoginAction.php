<?php

class LoginAction implements Action
{
    public function execute()
    {
        if (!ISSET($_SESSION)) {
            session_start();
        }
        if (ISSET($_SESSION["connected"]))
            return "accueil dashboard";
        if (!ISSET($_REQUEST["fcellulaire"]))
            return "LoggingUsager";
        if (!$this->valide()) {
            return "LoggingUsager";
        }

        require_once('/modele/classes/PersonnesDAO.php');
        require_once('/modele/classes/UsagersDAO.php');
        $udao = new UsagersDAO();
        $user = $udao->findByCell($_REQUEST["fcellulaire"]);
        if ($user == null) {
            $_REQUEST["messages"]["fcellulaire"] = "Utilisateur inexistant.";
            return "LoggingUsager";
        } else if ($user->getPassword() != $_REQUEST["fpassword"]) {
            $_REQUEST["messages"]["fpassword"] = "Mot de passe incorrect.";
            return "LoggingUsager";
        }
        $_SESSION["connected"] = $_REQUEST["fcellulaire"];
        return "accueil dashboard";
    }

    public function valide()
    {
        $result = true;
        if ($_REQUEST['fcellulaire'] == "") {
            $_REQUEST["messages"]["fcellulaire"] = "Donnez votre cellulaire";
            $result = false;
        }
        if ($_REQUEST['fpassword'] == "") {
            $_REQUEST["messages"]["fpassword"] = "Mot de passe obligatoire";
            $result = false;
        }
        return $result;
    }
}