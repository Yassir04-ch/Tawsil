<?php
require_once '../Entity/Commande.php';
require_once '../Repository/CommandeRepository.php';
require_once '../Service/CommandeService.php';
session_start();
if (!isset($_POST['submit'])) {
    header('location:../views/client.php');
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
