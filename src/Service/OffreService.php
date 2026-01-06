<?php
require_once __DIR__ .'/../Entity/Offre.php';
require_once __DIR__ . '/../Repository/OffreRepository.php';

  class OffreService{

    public function creatoffre($data){
     $offre = new Offre(
        $data['commande_id'],
        $data['livreur_id'],
        $data['prix'],
        $data['duree'],
        $data['type_vehicule'],
        $data['option'],
        "En Attente" 
    );

   
     $offreRepo = new OffreRepository();
     $offreRepo->addoffre($offre);
     header("location:livreur.php");

   }
   public function accepteoffre($commande_id,$statuscom,$offre_id,$statusoff){

    $offreRepo = new OffreRepository() ;
    $offreRepo->updatstatutcom($commande_id,$statuscom) ;
    $offreRepo->updatstatutoffre($offre_id, $statusoff) ;
    header('location:client.php') ;

   }
   public function updatstatuscom($id,$status){
    
   }

}


?>