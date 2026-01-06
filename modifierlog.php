<?php
require_once 'src/Entity/Commande.php';
require_once 'src/Repository/CommandeRepository.php';
require_once 'src/Service/CommandeService.php';

if (!isset($_POST['submit'])) {
 header('location:modifiercomm.php');
}
$commande_id = $_POST['commande_id'];
$description = $_POST['description'];
$adresse = $_POST['adresse'];
$adresse_livraison = $_POST['adresse_livraison'];

$commandeser = new CommandeService();
$commandeser->modifiercom($commande_id, $description, $adresse, $adresse_livraison);
