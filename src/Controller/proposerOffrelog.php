<?php
namespace Src\Controller;
require_once __DIR__ . '/../../vendor/autoload.php';
use Src\Entity\Offre;
use Src\Service\OffreService;
session_start();

$commande_id = $_GET['id'];
if (isset($_POST['submit'])) {
        $livreur_id    = $_SESSION['id'];
        $prix          = $_POST['prix'];
        $duree         = $_POST['duree'];
        $type_vehicule = $_POST['type_vehicule'];
        $option = $_POST['option'];
        $status_offre = 'En Attant';
    $offre = new Offre( $commande_id,  $livreur_id, $prix, $duree,   $type_vehicule,  $option, $status_offre);
    $offreser = new OffreService();
    $offreser->creatoffre($offre);
     header("location:../views/livreur.php");
}
?>