<?php
require_once '../Repository/OffreRepository.php';
require_once '../Service/OffreService.php';
session_start();
$commande_id = $_GET['id'];
$status = 'Commande livrée';
$offreser = new OffreService();
$offreser->updatstatuscomm($commande_id,$status);
