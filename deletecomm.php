<?php

require_once 'src/Entity/Commande.php';
require_once 'src/Repository/CommandeRepository.php';
require_once 'src/Repository/OffreRepository.php';
require_once 'src/Service/CommandeService.php';
session_start();
$id = $_GET['id'];
$commandeser = new CommandeService();
$commandeser->deletcom($id);
