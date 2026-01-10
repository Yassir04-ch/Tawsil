<?php
require_once __DIR__ . '/../../vendor/autoload.php';
use Src\Entity\Commande;
use Src\Service\CommandeService;

session_start();
if (!isset($_POST['submit'])) {
    header('location:../views/client.php');
    exit;
}
$description = $_POST['description'];
$address_delivery = $_POST['address_delivery'];
$adresse = $_POST['adresse'];
$client_id = $_SESSION['id'];
$commande = new Commande($client_id, $description,  $address_delivery, $adresse,'En attente' , 0);
$commandeser = new CommandeService();
$commandeser->addcommande($commande);
header('location:../views/client.php');
