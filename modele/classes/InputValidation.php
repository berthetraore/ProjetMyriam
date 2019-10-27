<?php

require_once 'MyGenerator.php';

class InputValidation
{
    public static function emailValidation($email)
    {
        //retrait des espace
        $verifyMail = trim(htmlspecialchars($email));
        //verification format mail et nous retourne un boolean
        return $verifyMail = filter_var($verifyMail, FILTER_VALIDATE_EMAIL);
    }

    //Methode permettant de
    public static function nameValidation($name)
    {
        if (!preg_match('/^[a-zA-Z\s]{2,50}+$/', $name)) {
            return false;
        } else {
            //retrait des espace
            $name = trim(htmlspecialchars($name));
            //On met la 1ere lettre en majuscule et les reste en minuscule
            return $name = ucfirst(strtolower($name));
        }
    }

    /***
     * Methode permettant de valider le mot de passe et nous retourne un mot de passe haché pret pour le server
     * @param $password
     * @return bool|string
     */
    public static function passwordValidation($password)
    {
        if (strlen($password) < 8) {
            return false;
        } elseif (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[#$^+=!*()@%&]).{8,20}$/', $password)) {
            return false;
        } else {
            return MyGenerator::getPasswordHached($password);
        }
    }

    public static function phoneValidation($phoneNumber)
    {
        //Format de numéro accepté
        $formats = [
            '### ### ####', '##########'
        ];
        //Verification de format num tel saisi si correspond a ceux dans le tableau formats
        if (!in_array(trim(preg_replace('/[0-9]/', '#', htmlspecialchars($phoneNumber))), $formats)) {
            throw new Exception("Format de telephone invalide, format accepté: ### ### ####");
        } else
            return $phoneNumber = trim(preg_replace('/\s/', '', htmlspecialchars($phoneNumber)));
    }
}