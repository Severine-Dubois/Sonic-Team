<?php

namespace sonic\Models;

use sonic\Utils\Database;
use PDO;


class Type extends CoreModel
{
    // Les propriétes de cette classe sont les colonnes de la table corresondante

    /**
     * @var string name
     */
    private $name;

    //* --- METHODES //
    
    /**
     * Find record by its id
     *
     * @param int $id record id
     */
    public function find(int $id)
    {
        // La requête
        $sql = "SELECT * FROM `type` WHERE id={$id}";
        
        // On récupère PDO via Database
        $pdo = Database::getPDO();
        
        // On exécute la requête via PDO
        $pdoStatement = $pdo->query($sql);
        
        // On récupère nos résultats
        $result = $pdoStatement->fetchObject('sonic\Models\Type');
        
        // On retourne les résultats
        return $result;
    }

    public function findAll()
    {
        // La requête
        $sql = "SELECT * FROM `type`";
        
        // On récupère PDO via Database
        $pdo = Database::getPDO();
        
        // On exécute la requête via PDO
        $pdoStatement = $pdo->query($sql);
        
        // On récupère nos résultats
        $result = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'sonic\Models\Type');
        
        // On retourne les résultats
        return $result;
    }

    /**
     * Get name
     *
     * @return  string
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set name
     *
     * @param  string  $name  name
     *
     * @return  self
     */ 
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }
}