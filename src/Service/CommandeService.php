<?php
namespace Src\Service;
use Src\Entity\Commande;
use Src\Repository\CommandeRepository;
use Src\Repository\OffreRepository;
class CommandeService{
    public function addcommande($commande){
    $commanderep = new CommandeRepository();
    $commanderep->addCommande($commande);
    }
    public function deletcom($id){
       $commandeRepo = new CommandeRepository();
       $commandeRepo->softDelet($id);
       $offreRepo = new OffreRepository();
      $status = "Annulée";
      $offreRepo->updatstatutcom($id, $status);
    }
  public function modifiercom($commande_id, $description, $adresse, $adresse_livraison){
  $commandeRepo = new CommandeRepository();
  $commandeRepo->modifierCommande($commande_id, $description, $adresse, $adresse_livraison);
    }
    public function getcommmande($id){
   $commandeRepo = new CommandeRepository();
       $commnd = $commandeRepo->getCommande( $id);
         return $commnd;
      }
}