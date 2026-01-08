<?php
namespace Src\Controller;
require_once __DIR__ . '/../../vendor/autoload.php';

use Src\Service\CommandeService;

if (!isset($_POST['submit'])) {
 header('location:modifiercomm.php');
}
$commande_id = $_POST['commande_id'];
$description = $_POST['description'];
$adresse = $_POST['adresse'];
$adresse_livraison = $_POST['adresse_livraison'];

$commandeser = new CommandeService();
$commandeser->modifiercom($commande_id, $description, $adresse, $adresse_livraison);
header('location:../views/client.php');
