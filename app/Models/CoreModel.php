<?php

namespace sonic\Models;

class CoreModel
{
    protected $id;
    protected $created_at;
    protected $updated_at;

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

      /**
     * Get creation timestamp
     *
     * @return  string
     */ 
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set creation timestamp
     *
     * @param  string  $created_at  creation timestamp
     *
     * @return  self
     */ 
    public function setCreatedAt(string $createdAt)
    {
        $this->created_at = $createdAt;

        return $this;
    }

    /**
     * Get update timestamp
     *
     * @return  string
     */ 
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * Set update timestamp
     *
     * @param  string  $updated_at  update timestamp
     *
     * @return  self
     */ 
    public function setUpdatedAt(string $updatedAt)
    {
        $this->updated_at = $updatedAt;

        return $this;
    }
}