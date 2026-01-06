<?php
require_once 'src/Entity/Offre.php';
require_once 'src/Repository/OffreRepository.php';
session_start();
$commande_id = $_POST['commande_id'];
$offre_id = $_POST['offre_id'];
$offreRepo = new OffreRepository() ;
$statuscom = 'EN_cours';
$statusoff = "Acceptée";
$offreRepo->updatstatutcom($commande_id,$statuscom) ;
$offreRepo->updatstatutoffre($offre_id, $statusoff) ;

header('location:client.php') ;
?>