<?php
require_once 'src/Repository/OffreRepository.php';
require_once 'src/Service/OffreService.php';
session_start();
$commande_id = $_GET['id'];
$status = 'Commande livrée';
$offreser = new OffreService();
$offreser->updatstatuscomm($commande_id,$status);
