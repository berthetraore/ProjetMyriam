<?php


class Usagers extends Personnes
{
    private $_listeCarte = array();

    /**
     * Usagers constructor.
     * @param $_idUsager
     */
    public function __construct()
    {

    }

    public function createNewUsager($prenom, $nom, $numCell, $email, $password)
    {
        parent::createNewPersonWeb($prenom, $nom, $numCell, $email, $password, 3);

    }

    public function addCarte(CarteUsagers $carteClient)
    {

        $count = count($this->_listeCarte);

        if ($count > 3) {
            throw new Exception("Vous avez atteint le maximum authorisé");
        }
        array_push($this->_listeCarte, $carteClient);
    }

    /**
     * @return array
     */
    public function getListeCarte()
    {
        return $this->_listeCarte;
    }

    /**
     * @param array $listeCarte
     */
    public function setListeCarte($listeCarte)
    {
        $this->_listeCarte = $listeCarte;
    }

}