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
$data = [
      'client_id'=>$client_id,
    'description'=> $description,
    'address_delivery'=> $address_delivery,
    'adresse'=> $adresse,
    'is_delete'=> 0
];
$commandeser = new CommandeService();
$commandeser->addcommande($data);
