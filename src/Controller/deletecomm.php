<?php

require_once '../Entity/Commande.php';
require_once '../Repository/CommandeRepository.php';
require_once '../Repository/OffreRepository.php';
require_once '../Service/CommandeService.php';
session_start();
$id = $_GET['id'];
$commandeser = new CommandeService();
$commandeser->deletcom($id);
