<?php
namespace Src\Controller;
use Src\Service\OffreService;

session_start();
$commande_id = $_GET['id'];
$status = 'Commande livrée';
$offreser = new OffreService();
$offreser->updatstatuscomm($commande_id,$status);
