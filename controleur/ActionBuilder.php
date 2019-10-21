<?php

class ActionBuilder
{
    public static function getAction($nom)
    {
        switch ($nom) {
            case "connecter" :
                return new LoginAction();
                break;
            case "deconnecter" :
                return new LogoutAction();
                break;
            case "sinscrire" :
                return new DefaultAction();
                break;
            case "afficher" :
                return new AfficherAction();
                break;
            case "inserer" :
                return new AjouterAction();
                break;
            case "supp" :
                return new SupprimerAction();
                break;
            case "sauver" :
                return new SauverAction();
                break;
            case "edit" :
                return new EditerAction();
                break;
            default :
                return new DefaultAction();
        }
    }
}