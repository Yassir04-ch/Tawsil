<?php

require_once 'src/Entity/Commande.php';
require_once 'src/Repository/CommandeRepository.php';
require_once 'src/Service/CommandeService.php';
session_start();
if (!isset($_POST['submit'])) {
    header('location:client.php');
    exit;
}

$description = $_POST['description'];
$address_delivery = $_POST['address_delivery'];
$adresse = $_POST['adresse'];
$client_id = $_SESSION['id'];

$commande = new Commande($client_id,$description,$address_delivery, $adresse ,0);
$commanderep = new CommandeRepository();
$commanderep->addCommande($commande);   

header('location:client.php');