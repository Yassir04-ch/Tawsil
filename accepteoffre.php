<?php
require_once 'src/Entity/Offre.php';
require_once 'src/Service/OffreService.php';
session_start();
$commande_id = $_POST['commande_id'];
$offre_id = $_POST['offre_id'];
$statuscom = 'EN_cours';
$statusoff = "Acceptée";
$offreser = new OffreService();
$offreser->accepteoffre($commande_id,$statuscom,$offre_id,$statusoff);

?>