<?php


class Personnes
{
    private $_Id, $_Prenom, $_Nom, $_NumCell, $_DateActivation, $_Actived, $_DateModification, $_Mail, $_Password, $_TypeCompte;


    public function __construct()
    {
    }


    public function createNewPersonWeb($prenom, $nom, $numCell, $email, $password, $typeCompte)
    {
        $today = MyGenerator::getDateNow();

        $this->_Id = MyGenerator::getIdGenerated();
        $this->_Prenom = $prenom;
        $this->_Nom = $nom;
        $this->_NumCell = $numCell;
        $this->_Mail = $email;
        $this->_Password = $password;
        $this->_TypeCompte = $typeCompte;
        $this->_DateActivation = $today;
        $this->_DateModification = $today;

    }


    /**
     * Methode permettant de créer une personne a partir d'un objet provenant de la base de donnée
     * @param mixed $obj
     */
    public function loadFromObjet($obj)
    {
        $this->_Id = $obj->idPersonne;
        $this->_Prenom = $obj->prenom;
        $this->_Nom = $obj->nom;
        $this->_NumCell = $obj->numCell;
        $this->_Mail = $obj->mail;
        $this->_Password = $obj->password;
        $this->_TypeCompte = $obj->typeCompte;
        $this->_Actived = $obj->actived;
        $this->_DateActivation = $obj->dateActivation;
        $this->_DateModification = $obj->dateModification;

    }


    /**
     * Methode permettant de créer une personne a partir d'un tableau provenant de la base de donnée
     * @param mixed $tableau
     */
    public function loadFromArray($tableau)
    {
        $this->_Id = $tableau['id'];
        $this->_Prenom = $tableau["prenom"];
        $this->_Nom = $tableau['nom'];
        $this->_NumCell = $tableau['cellulaire'];
        $this->_Mail = $tableau['email'];
        $this->_Password = $tableau['password'];
        $this->_TypeCompte = $tableau['typeCompte'];
        $this->_Actived = $tableau ['actived'];
        $this->_DateActivation = $tableau['dateActivation'];
        $this->_DateModification = $tableau['dateModificaton'];

    }


    /**
     * ==============================
     * Getteur and Setter
     * =============================
     */

    /**
     * @param mixed $Prenom
     */
    public function setPrenom($Prenom)
    {
        $this->_Prenom = $Prenom;
    }

    /**
     * @param mixed $Nom
     */
    public function setNom($Nom)
    {
        $this->_Nom = $Nom;
    }

    /**
     * @param mixed $NumCell
     */
    public function setNumCell($NumCell)
    {
        $this->_NumCell = $NumCell;
    }

    /**
     * @param mixed $DateActivation
     */
    public function setDateActivation($DateActivation)
    {
        $this->_DateActivation = $DateActivation;
    }

    /**
     * @param mixed $Actived
     */
    public function setActived($Actived)
    {
        $this->_Actived = $Actived;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->_Id;
    }

    /**
     * @param mixed $Id
     */
    public function setId($Id)
    {
        $this->_Id = $Id;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->_Prenom;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->_Nom;
    }

    /**
     * @return mixed
     */
    public function getNumCell()
    {
        return $this->_NumCell;
    }

    /**
     * @return mixed
     */
    public function getDateActivation()
    {
        return $this->_DateActivation;
    }

    /**
     * @return mixed
     */
    public function getActived()
    {
        return $this->_Actived;
    }

    /**
     * @return mixed
     */
    public function getDateModification()
    {
        return $this->_DateModification;
    }

    /**
     * @param mixed $DateModification
     */
    public function setDateModification($DateModification)
    {
        $this->_DateModification = $DateModification;
    }

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->_Mail;
    }

    /**
     * @param mixed $Mail
     */
    public function setMail($Mail)
    {
        $this->_Mail = $Mail;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->_Password;
    }

    /**
     * @param mixed $Password
     */
    public function setPassword($Password)
    {
        $this->_Password = $Password;
    }

    /**
     * @return mixed
     */
    public function getTypeCompte()
    {
        return $this->_TypeCompte;
    }

    /**
     * @param mixed $TypeCompte
     */
    public function setTypeCompte($TypeCompte)
    {
        $this->_TypeCompte = $TypeCompte;
    }


}