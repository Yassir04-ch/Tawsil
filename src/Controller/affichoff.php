<?php
namespace Src\Controller;
require_once __DIR__ . '/../../vendor/autoload.php';
use Src\Service\OffreService;
session_start();
$commande_id = $_GET['id'];
$offreser = new OffreService();
$offres = $offreser->afficheoffres($commande_id);
?>