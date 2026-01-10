<?php
require_once __DIR__ . '/../../vendor/autoload.php';
use Src\Service\OffreService;
session_start();
$commande_id = $_POST['commande_id'];
$offre_id = $_POST['offre_id'];
$statuscom = 'EN_cours';
$statusoff = "Acceptée";
$offreser = new OffreService();
$offreser->accepteoffre($commande_id,$statuscom,$offre_id,$statusoff);
     header('location:../views/client.php');

?>