<?php
namespace Src\Service;
use Src\Entity\Offre;
use Src\Repository\OffreRepository;

  class OffreService{

    public function creatoffre($offre){
     $offreRepo = new OffreRepository();
     $offreRepo->addoffre($offre);

   }
   public function accepteoffre($commande_id,$statuscom,$offre_id,$statusoff){

    $offreRepo = new OffreRepository() ;
    $offreRepo->updatstatutcom($commande_id,$statuscom) ;
    $offreRepo->updatstatutoffre($offre_id, $statusoff) ;

   }
   public function updatstatuscomm($id,$status){
      $offreRepo = new OffreRepository() ;
      $offreRepo->updatstatutcom($id,$status) ;
      header('location:../views/client.php');

   }
   public function afficheoffres($commande_id) {
    $offresRep = new OffreRepository();
    $offres = $offresRep->affichoffres($commande_id);
    return $offres;
   }

}


?>