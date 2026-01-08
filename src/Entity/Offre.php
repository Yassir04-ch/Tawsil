<?php
namespace Src\Entity;

class Offre {
    private int $commande_id;
    private int $livreur_id;
    private float $prix;
    private $duree ;
    private string $type_vehicule;
    private string $option;
    private  $created_at;

    private $status_offre;

     public function __construct(int $commande_id, int $livreur_id,float $prix,string $duree,  string $type_vehicule, string $option,string $status_offre){
        $this->commande_id = $commande_id;  
        $this->livreur_id = $livreur_id;
        $this->prix = $prix;
        $this->duree = $duree;
        $this->type_vehicule = $type_vehicule;
        $this->option = $option;
        $this->status_offre = $status_offre;

     }
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
    
    public function setCommande_id($commande_id)
    {
        $this->commande_id = $commande_id;

    }

    public function getLivreur_id()
    {
        return $this->livreur_id;
    }

    
    public function setLivreur_id($livreur_id)
    {
        $this->livreur_id = $livreur_id;

    }
 
    public function getCommande_id()
    {
        return $this->commande_id;
    }

 
    public function getStatus_offre()
    {
        return $this->status_offre;
    }

    public function setStatus_offre($status_offre)
    {
        $this->status_offre = $status_offre;

    }
}