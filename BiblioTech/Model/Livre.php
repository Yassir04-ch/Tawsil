<?php
namespace BiblioTech\Model;
class Livre{
    private int $id;
    private string $name;
    private string $description;
    private object $auteur;

    public function __construct(string $name, string $description, object $auteur){
      $this->name = $name;
      $this->description = $description;
      $this->auteur = $auteur;
    }

    
    public function getName()
    {
        return $this->name;
    }

     
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

       public function getDescription()
    {
        return $this->description;
    }
 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    
    public function getAuteur()
    {
        return $this->auteur;
    }

    
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }
    
     
}