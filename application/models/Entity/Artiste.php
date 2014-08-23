<?php

namespace Entity;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity
 * @Table(name="artiste")
 */
class Artiste
{
    /**
     * @var     bigint
     * @Id
     * @Column(type="bigint")
     * @GeneratedValue
     */
    protected $id = null;

    /**
     * @var     string
     * @Column(type="string")
     */
    protected $noms = null;

    /**
     * @var     string
     * @Column(type="string")
     */
    protected $description = "none";

    public function __construct($noms=null,$desc=null)
    {
        $this->setNoms($noms);
        $this->setDescription($desc);
    }
    
   
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }

    public function getNoms(){
        return $this->noms;
    }
    public function setNoms($noms){
        $this->noms = $noms;
    }

    public function getDescription(){
        return $this->description;
    }
    public function setDescription($description){
        $this->description = $description;
    }
}