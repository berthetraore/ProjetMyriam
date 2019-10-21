<?php


class ConnectUsager
{
    public static function connexion()
    {
        $c = $_REQUEST['cellulaire'];
        $m = $_REQUEST['motDePasse'];
        $resultat = TRUE;
        if ($c == "") {
            $_REQUEST["messages"]["cellulaire"] = "Entrez votre numero de cellulaire obligatoire";
            $resultat = FALSE;
        }
        if ($m == "") {
            $_REQUEST["messages"]["motDePasse"] = "Mot de passe obligatoire";
            $resultat = FALSE;
        }
        if ($resultat) {
            $dao = new UsagersDAO();
            $u = $dao->findByCell($c);
            if ($u == NULL) {
                $_REQUEST["messages"]["cellulaire"] = "Utilisateur inexistant";
                $resultat = FALSE;
            } elseif ($u->getPassword() != $m) {
                $_REQUEST["messages"]["password"] = "Mot de passe incorrect";
                $resultat = FALSE;
            } else {
                if (!ISSET($_SESSION)) {
                    session_start();
                }
                $_SESSION["connected"] = $c;
            }
        }
        return $resultat;
    }

    public static function inscription()
    {
        $name = $_REQUEST['fname'];
        $surname = $_REQUEST['fsurname'];
        $email = $_REQUEST['femail'];
        $cellulaire = $_REQUEST['fcellulaire'];
        $password = $_REQUEST['fpassword'];
        $password2 = $_REQUEST['fpassword-repeat'];
        $typeCompte = $REQUEST['ftypecompte'];
        $resultat = TRUE;
        if ($name == "") {
            $_REQUEST["messages"]["fname"] = "votre nom est obligatoire";
            $resultat = FALSE;
        }
        if (InputValidation::nameValidation($name) == FALSE) {
            $_REQUEST["messages"]["fname"] = "votre nom n'est pas valide";
            $resultat = FALSE;
        }
        if ($surname == "") {
            $_REQUEST["messages"]["fsurname"] = "votre prenom est obligatoire";
            $resultat = FALSE;
        }
        if (InputValidation::nameValidation($surname) == FALSE) {
            $_REQUEST["messages"]["fsurname"] = "votre prenom n'est pas valide";
            $resultat = FALSE;
        }
        if ($email == "") {
            $_REQUEST["messages"]["femail"] = "votre email est obligatoire";
            $resultat = FALSE;
        }
        if (InputValidation:: emailValidation($email) == FALSE) {
            $_REQUEST["messages"]["femail"] = "votre email n'est pas valide";
            $resultat = FALSE;
        }
        if ($cellulaire == "") {
            $_REQUEST["messages"]["fcellulaire"] = "votre cellulaire est obligatoire";
            $resultat = FALSE;
        }
        if (InputValidation::phoneValidation($cellulaire) == FALSE) {
            $_REQUEST["messages"]["fcellulaire"] = "votre cellulaire n'est pas valide";
            $resultat = FALSE;
        }

        if ($password == "") {
            $_REQUEST["messages"]["fpassword"] = " Le Mot de passe obligatoire";
            $resultat = FALSE;
        }
        if (InputValidation::passwordValidation($password) == FALSE) {
            $_REQUEST["messages"]["fpassword"] = " Le mot de passe doit contenir au moins 8 caracteres, une majuscule, une minuscule et un chiffre au moins";
            $resultat = FALSE;
        }
        if ($password != $password2) {
            $_REQUEST["messages"]["fpassword"] = "Les mots de passe doivent être identiques";
            $resultat = FALSE;
        }
        if ($resultat) {
            $usager = new Personnes();
            $usager->setNom($name);
            $usager->setPrenom($surname);
            $usager->setMail($email);
            $usager->setNumCell($cellulaire);
            $usager->setPassword($password);
            $usager->setTypeCompte($typeCompte);
            $dao = new PersonneDAO();
            $dao->create($usager);
        }
        return $resultat;
    }

    public static function getMessage($champ)
    {
        if (ISSET($_REQUEST["messages"][$champ]))
            return $_REQUEST["messages"][$champ];
        return "";
    }
}