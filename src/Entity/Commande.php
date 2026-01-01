<?php

class Commande {
    private string $description;
    private string $adresse;
    private $created_at;
    private bool $is_delete;
    
    public function __construct(string $description, string $adresse , bool $is_delete ){
        $this->description = $description;
        $this->adresse = $adresse;
        $this->is_delete = $is_delete;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;

    }

 
    public function getAdresse()
    {
        return $this->adresse;
    }

 
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

    }


    public function getCreated_at()
    {
        return $this->created_at;
    }


    public function getIs_delete()
    {
        return $this->is_delete;
    }
 
    public function setIs_delete($is_delete)
    {
        $this->is_delete = $is_delete;

    }

}