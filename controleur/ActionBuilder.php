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
                return new RegisterAction();
                break;
            default :
                return new LoginAction();
        }
    }
}