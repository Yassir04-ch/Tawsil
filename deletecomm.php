<?php

require_once 'src/Entity/Commande.php';
require_once 'src/Repository/CommandeRepository.php';
require_once 'src/Repository/OffreRepository.php';
session_start();
$id = $_GET['id'];
$commandeRepo = new CommandeRepository();
$commandeRepo->softDelet($id);
$offreRepo = new OffreRepository();
$status = "Annulée";
$offreRepo->updatstatut($id,$status);

header('location:client.php');
