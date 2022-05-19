<?php

namespace sonic\Models;

use sonic\Utils\Database;
use PDO;

class Character extends CoreModel
{
    // Les propriétes de cette classe sont les colonnes de la table corresondante
    /**
     * @var string name
     */
    private $name;

    /**
     * @var string character's description
     */
    private $description;

    /**
     * @var string URL of the image
     */
    private $picture;

    /**
     * @var int type_id of character
     */
    private $type_id;

    //* -- METHODES FIND //

     /**
     * Find record by its id
     * 
     * @param int $id record id
     */
    public function find(int $id)
    {
        // La requête
        $sql = "SELECT * FROM `character` WHERE id={$id}";
    
        // On récupère PDO via Database
        $pdo = Database::getPDO();
        
        // On exécute la requête via PDO
        $pdoStatement = $pdo->query($sql);
        
        // On récupère nos résultats
        $result = $pdoStatement->fetchObject('sonic\Models\Character');
        
        // On retourne les résultats
        return $result;
    }

    public function findAllOrderByName()
    {
        // La requête
        $sql = "SELECT * FROM `character` ORDER BY `name` LIMIT 10";

        // On récupère PDO via Database
        $pdo = Database::getPDO();

        // On exécute la requête via PDO
        $pdoStatement = $pdo->query($sql);

        // On récupère nos résultats
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'sonic\Models\Character');

        // On retourne les résultats
        return $results;
    }
       


    //* -- GETTERS AND SETTERS //
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

    /**
     * Get category's subtitle
     *
     * @return  string
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set category's subtitle
     *
     * @param  string  $description  category's subtitle
     *
     * @return  self
     */ 
    public function setDescription(string $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get uRL of the image
     *
     * @return  string
     */ 
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set uRL of the image
     *
     * @param  string  $picture  URL of the image
     *
     * @return  self
     */ 
    public function setPicture(string $picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get display order for homepage (0 = NO DISPLAY)
     *
     * @return  int
     */ 
    public function getTypeId()
    {
        return $this->type_id;
    }

    /**
     * Set display order for homepage (0 = NO DISPLAY)
     *
     * @param  int  $type_id  display order for homepage (0 = NO DISPLAY)
     *
     * @return  self
     */ 
    public function setTypeId(int $type_id)
    {
        $this->type_id = $type_id;

        return $this;
    }
    
}