<?php
class CommandeService{
    public function addcommande($data){
       $command = new Commande(
        $data["client_id"],
        $data["description"],
        $data["address_delivery"],
        $data["adresse"],
        $data["is_delete"],
       );
    $commanderep = new CommandeRepository();
    $commanderep->addCommande($command);
    header("location:client.php");
    }
    public function deletcom($id){
       $commandeRepo = new CommandeRepository();
       $commandeRepo->softDelet($id);
       $offreRepo = new OffreRepository();
      $status = "Annulée";
      $offreRepo->updatstatutcom($id, $status);
      header('location:client.php');
    }
public function modifiercom($commande_id, $description, $adresse, $adresse_livraison){
  $commandeRepo = new CommandeRepository();
  $commandeRepo->modifierCommande($commande_id, $description, $adresse, $adresse_livraison);
  header('location:client.php');
    }
}