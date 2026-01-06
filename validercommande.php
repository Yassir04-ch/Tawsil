<?php
require_once 'src/Repository/OffreRepository.php';
require_once 'src/Service/OffreService.php';
session_start();
$commande_id = $_GET['id'];
$offreRepo = new OffreRepository() ;
$status = 'Commande livrée';
$offreRepo->updatstatutcom($commande_id,$status);
header('location:client.php');
