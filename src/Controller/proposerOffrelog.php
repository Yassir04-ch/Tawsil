<?php
namespace Src\Controller;
require_once __DIR__ . '/../../vendor/autoload.php';
use Src\Request\OffreRequest;
use Src\Entity\Offre;
use Src\Service\OffreService;
session_start();
if (!isset($_POST['submit'])) {
     header("location:../views/livreur.php");
     exit;
}
    $commande_id = $_GET['id'];
    $livreur_id = $_SESSION['id'];
    $offrerequest = new OffreRequest($_POST,  $commande_id, $livreur_id);
     $offre = new Offre( $offrerequest->commande_id,  $offrerequest->livreur_id, 
     $offrerequest->prix, $offrerequest->duree,   $offrerequest->type_vehicule, 
      $offrerequest->option, 'En Attant');
      
    $offreser = new OffreService();
    $offreser->creatoffre($offre);
     header("location:../views/livreur.php");
?>