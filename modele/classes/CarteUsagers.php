<?php


class CarteUsagers extends Cartes
{
    private $_nbreTitre, $_statut, $_dateExpiration, $_dateActivation;

    /**
     * CarteUsagers constructor.
     * @param $_nbreTitre
     */
    public function __construct()
    {
    }

    public function createCarteClient($libelle)
    {
        parent::createCarte($libelle);
        $this->activerCarte();
    }

    public function activerCarte()
    {
        $today = MyGenerator::getDateNow();
        $this->_statut = 1;
        $this->_dateActivation = $today;
        $this->_dateExpiration = MyGenerator::getDate2YearLater();
    }

    public function loadFromArray($tableau)
    {
        parent::loadFromArray();
        $this->_nbreTitre = $tableau['nbreTitre'];
        $this->_statut = $tableau['statut'];
        $this->_dateActivation = $tableau['dateActivation'];
        $this->_dateExpiration = $tableau['dateExpiration'];
    }

    public function loadFromObject($obj)
    {
        parent::loadFromObject();
        $this->_nbreTitre = $obj->nbreTitre;
        $this->_statut = $obj->libelle;
        $this->_dateActivation = $obj->dateActivation;
        $this->_dateExpiration = $obj->dateExpiration;
    }

    /**
     * @return mixed
     */

    public function getNbreTitre()
    {
        return $this->_nbreTitre;
    }

    /**
     * @param mixed $nbreTitre
     */
    public function setNbreTitre($nbreTitre)
    {
        $this->_nbreTitre = $nbreTitre;
    }

    /**
     * @return mixed
     */
    public function getStatut()
    {
        return $this->_statut;
    }

    /**
     * @param mixed $statut
     */
    public function setStatut($statut)
    {
        $this->_statut = $statut;
    }

    /**
     * @return mixed
     */
    public function getDateExpiration()
    {
        return $this->_dateExpiration;
    }

    /**
     * @param mixed $dateExpiration
     */
    public function setDateExpiration($dateExpiration)
    {
        $this->_dateExpiration = $dateExpiration;
    }

    /**
     * @return mixed
     */
    public function getDateActivation()
    {
        return $this->_dateActivation;
    }

    /**
     * @param mixed $dateActivation
     */
    public function setDateActivation($dateActivation)
    {
        $this->_dateActivation = $dateActivation;
    }

}