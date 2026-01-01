<?php
class Offre {
    private float $prix;
    private $duree ;
    private string $type_vehicule;
    private string $option;
    private  $created_at;

    public function getPrix()
    {
        return $this->prix;
    }

    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

 
    public function getDuree()
    {
        return $this->duree;
    }

    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    
    public function getType_vehicule()
    {
        return $this->type_vehicule;
    }
 
    public function setType_vehicule($type_vehicule)
    {
        $this->type_vehicule = $type_vehicule;

        return $this;
    }


    public function getOption()
    {
        return $this->option;
    }

    public function setOption($option)
    {
        $this->option = $option;

        return $this;
    }


    public function getCreated_at()
    {
        return $this->created_at;
    }


    public function create(){

    }
    public function accept(){}

    public function update(){}

    
    
}