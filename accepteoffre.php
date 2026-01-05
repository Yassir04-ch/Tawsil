<?php
require_once 'src/Entity/Offre.php';
require_once 'src/Repository/OffreRepository.php';
session_start();
$commande_id = $_POST['commande_id'];
$offreRepo = new OffreRepository() ;
$status = 'EN_cours';
$offreRepo->updatstatut($commande_id,$status) ;

header('location:client.php') ;
?>