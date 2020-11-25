<?php
class Genre
{

    /*****************Attributs***************** */
    private $_idGenre;
    private $_libelleGenre;
    private $_desGenre;

    /*****************Accesseurs***************** */

    public function getIdGenre()
    {
        return $this->_idGenre;
    }

    public function setIdGenre($idGenre)
    {
        $this->_idGenre = $idGenre;
    }

    public function getLibelleGenre()
    {
        return $this->_libelleGenre;
    }

    public function setLibelleGenre($libelleGenre)
    {
        $this->_libelleGenre = $libelleGenre;
    }

    public function getDesGenre()
    {
        return $this->_desGenre;
    }

    public function setDesGenre($desGenre)
    {
        $this->_desGenre = $desGenre;
    }
    /*****************Constructeur***************** */

    public function __construct(array $options = [])
    {
        if (!empty($options)) // empty : renvoi vrai si le tableau est vide
        {
            $this->hydrate($options);
        }
    }
    public function hydrate($data)
    {
        foreach ($data as $key => $value) {
            $methode = "set" . ucfirst($key); //ucfirst met la 1ere lettre en majuscule
            if (is_callable(([$this, $methode]))) // is_callable verifie que la methode existe
            {
                $this->$methode($value);
            }
        }
    }

    /*****************Autres Méthodes***************** */

    /**
     * Transforme l'objet en chaine de caractères
     *
     * @return String
     */
    public function toString()
    {
        return "\nId : " . $this->getIdGenre() . "\nLibelle : " . $this->getLibelleGenre() . "\nDescription : " . $this->getDesGenre();
    }

}
