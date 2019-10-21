<?php


class TransactionUsagerCartes
{
    private $_idUsager, $_idCarte, $_dateTransaction, $_titreAjouter;

    /**
     * UsagerCartes constructor.
     * @param $_idUsager
     * @param $_idCarte
     * @param $_dateTransaction
     * @param $_titreAjouter
     */
    public function createNewTransaction($_idUsager, $_idCarte, $_titreAjouter)
    {
        $today = MyGenerator::getDateNow();
        $this->_idUsager = $_idUsager;
        $this->_idCarte = $_idCarte;
        $this->_dateTransaction = $today;
        $this->_titreAjouter = $_titreAjouter;
    }

    public function loadFromArray($tableau)
    {
        $this->_idCarte = $tableau['idCarte'];
        $this->_idUsager = $tableau['idUsager'];
        $this->_dateTransaction = $tableau['dateTransaction'];
        $this->_titreAjouter = $tableau['titreAjouter'];
    }

    public function loadFromObject($obj)
    {
        $this->_idCarte = $obj->idCarte;
        $this->_idUsager = $obj->idUsager;
        $this->_dateTransaction = $obj->dateTransaction;
        $this->_titreAjouter = $obj->titreAjouter;
    }

    public function addTitre($nbreTitre)
    {
        $this->_titreAjouter += $nbreTitre;

    }

    public function removeTitre($nbreTitre)
    {
        $this->_titreAjouter -= $nbreTitre;
    }

    /**
     * @return mixed
     */
    public function getIdUsager()
    {
        return $this->_idUsager;
    }

    /**
     * @param mixed $idUsager
     */
    public function setIdUsager($idUsager)
    {
        $this->_idUsager = $idUsager;
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
    public function getDateTransaction()
    {
        return $this->_dateTransaction;
    }

    /**
     * @param mixed $dateTransaction
     */
    public function setDateTransaction($dateTransaction)
    {
        $this->_dateTransaction = $dateTransaction;
    }

    /**
     * @return mixed
     */
    public function getTitreAjouter()
    {
        return $this->_titreAjouter;
    }

    /**
     * @param mixed $titreAjouter
     */
    public function setTitreAjouter($titreAjouter)
    {
        $this->_titreAjouter = $titreAjouter;
    }

}