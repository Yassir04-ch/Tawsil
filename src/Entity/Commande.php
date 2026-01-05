<?php

class Commande {
    private int $client_id;
    private string $description;
    private string $adresse;
    private string $address_delivery;
    private $created_at;
    private bool $is_delete;
    
    public function __construct(int $client_id,string $description, string $address_delivery,string $adresse , bool $is_delete ){
        $this->client_id = $client_id;
        $this->description = $description;
        $this->adresse = $adresse;
        $this->address_delivery = $address_delivery;
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


    public function getClient_id()
    {
        return $this->client_id;
    }

    public function setClient_id($client_id)
    {
        $this->client_id = $client_id;

    }

  
    public function getIs_delete()
    {
        return $this->is_delete;
    }

    public function setIs_delete($is_delete)
    {
        $this->is_delete = $is_delete;
    }

    public function getAddress_delivery()
        {
                return $this->address_delivery;
        }

    public function setAddress_delivery($address_delivery)
        {
                $this->address_delivery = $address_delivery;

        }
}