<?php


class Cartes
{
    private $_idCarte, $_libelle, $_dateAjout;

    /**
     * Cartes constructor.
     *
     * */
    public function __construct()
    {
    }

    /**
     * Cartes constructor.
     * @param $_idCarte
     * @param $_libelle
     */
    public function createCarte($_libelle)
    {
        $this->_idCarte = MyGenerator::getIdGenerated();
        $this->_libelle = $_libelle;
        $this->_dateAjout = MyGenerator::getDateNow();
    }

    public function loadFromArray($tableau)
    {
        $this->_idCarte = $tableau['idCarte'];
        $this->_libelle = $tableau['libelle'];
        $this->_dateAjout = $tableau['dateAjout'];
    }

    public function loadFromObject($obj)
    {
        $this->_idCarte = $obj->idCarte;
        $this->_libelle = $obj->libelle;
        $this->_dateAjout = $obj->dateAjout;
    }

    /**
     * @return mixed
     */
    public function getIdCarte()
    {
        return $this->_idCarte;
    }


    /**
     * @param mixed $idCarte
     */
    public function setIdCarte($idCarte)
    {
        $this->_idCarte = $idCarte;
    }

    /**
     * @return mixed
     */
    public function getLibelle()
    {
        return $this->_libelle;
    }

    /**
     * @param mixed $libelle
     */
    public function setLibelle($libelle)
    {
        $this->_libelle = $libelle;
    }

    public function __toString()
    {
        return $this->_idCarte . "," . $this->_libelle;
    }

    /**
     * @return mixed
     */
    public function getDateAjout()
    {
        return $this->_dateAjout;
    }

    /**
     * @param mixed $dateAjout
     */
    public function setDateAjout($dateAjout)
    {
        $this->_dateAjout = $dateAjout;
    }
}