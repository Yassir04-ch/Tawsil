<?php
namespace Src\Request;

class CommandeRequest{
    public string $description;
    public string $address_delivery;
    public string $adresse;
    public INT $client_id;
    public function __construct(array $data,INT $client_id){
         $this->description = $data["description"];
         $this->address_delivery = $data["address_delivery"];
         $this->adresse = $data["adresse"];
         $this->int = $client_id;
    }

}