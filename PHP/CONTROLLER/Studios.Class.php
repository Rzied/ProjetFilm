<?php
class XXX
{

    /*****************Attributs***************** */
    private $_idStudio;
    private $_nomStudio;
    private $_paysStudio;
    private $_fondateurStudio;
    private $_creationStudio;

    /*****************Accesseurs***************** */
    public function getIdStudio()
    {
        return $this->_idStudio;
    }

    public function setIdStudio($idStudio)
    {
        $this->_idStudio = $idStudio;
    }

    public function getNomStudio()
    {
        return $this->_nomStudio;
    }

    public function setNomStudio($nomStudio)
    {
        $this->_nomStudio = $nomStudio;
    }

    public function getPaysStudio()
    {
        return $this->_paysStudio;
    }

    public function setPaysStudio($paysStudio)
    {
        $this->_paysStudio = $paysStudio;
    }

    public function getFondateurStudio()
    {
        return $this->_fondateurStudio;
    }

    public function setFondateurStudio($fondateurStudio)
    {
        $this->_fondateurStudio = $fondateurStudio;
    }

    public function getCreationStudio()
    {
        return $this->_creationStudio;
    }

    public function setCreationStudio($creationStudio)
    {
        $this->_creationStudio = $creationStudio;
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
        return "\nId : ".$this->getIdStudio();
    }

    /**
     * Renvoi vrai si l'objet en paramètre est égal à l'objet appelant
     *
     * @param [type] $obj
     * @return bool
     */
    public function equalsTo($obj)
    {
        return true;
    }
    /**
     * Compare 2 objets
     * Renvoi 1 si le 1er est >
     *        0 si ils sont égaux
     *        -1 si le 1er est <
     *
     * @param [type] $obj1
     * @param [type] $obj2
     * @return void
     */
    public static function compareTo($obj1, $obj2)
    {
        return 0;
    }

}
