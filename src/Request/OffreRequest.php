<?php
namespace Src\Request;
class OffreRequest{
   public string $duree;
   public string $type_vehicule;
   public string $option;
   public INT $commande_id;
   public INT $livreur_id;
   public $prix;
   public function __construct(array $data,int $commande_id, int $livreur_id ) {

   $this->duree = $data['duree'];
   $this->type_vehicule = $data['type_vehicule'];
   $this->option = $data['option'];
   $this->prix = $data['prix'];
   $this->livreur_id = $livreur_id;
   $this->commande_id = $commande_id;
   }
} 