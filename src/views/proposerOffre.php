<?php
session_start();
require_once '../Entity/Offre.php';
require_once '../Service/OffreService.php';


$commande_id = $_GET['id'];

if (isset($_POST['submit'])) {
    $data = [
        'commande_id'   => $commande_id,
        'livreur_id'    => $_SESSION['id'],
        'prix'          => $_POST['prix'],
        'duree'         => $_POST['duree'],
        'type_vehicule' => $_POST['type_vehicule'],
        'option'        => $_POST['option']
    ];
    $offreser = new OffreService();
    $offreser->creatoffre($data);
 
}


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Proposer une offre</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-50 min-h-screen flex items-center justify-center">

<div class="bg-white w-full max-w-md p-8 rounded-[2.5rem] shadow-xl border">

    <h2 class="text-2xl font-black italic mb-6 text-center">
        Proposer votre offre
    </h2>

    <form method="POST" class="space-y-5" action="proposerOffre.php?id=<?= $commande_id ?>">

        <!-- Prix -->
        <div>
            <label class="text-xs font-black text-slate-400 uppercase">Prix (DH)</label>
            <input type="number" step="0.01" name="prix" required
                class="w-full bg-slate-50 p-4 rounded-xl font-bold text-blue-600 text-center">
        </div>

        <!-- Durée -->
        <div>
            <label class="text-xs font-black text-slate-400 uppercase">Durée estimée</label>
            <input type="text" name="duree" placeholder="ex: 45 min" required
                class="w-full bg-slate-50 p-4 rounded-xl font-bold">
        </div>

        <!-- Véhicule -->
        <div>
            <label class="text-xs font-black text-slate-400 uppercase">Type de véhicule</label>
            <select name="type_vehicule" required
                class="w-full bg-slate-50 p-4 rounded-xl font-bold">
                <option value="">-- Choisir --</option>
                <option value="Moto">Moto</option>
                <option value="Voiture">Voiture</option>
                <option value="Camionnette">Camionnette</option>
            </select>
        </div>

        <!-- Option -->
        <div>
            <label class="text-xs font-black text-slate-400 uppercase">Option</label>
            <select name="option" required
                class="w-full bg-slate-50 p-4 rounded-xl font-bold">
                <option value="Normal">Normal</option>
                <option value="Express">Express</option>
                <option value="Fragile">Fragile</option>
            </select>
        </div>

        <a href="ofrecommand.php"><button type="submit" name="submit"
            class="w-full bg-blue-600 hover:bg-blue-700 text-white py-5 rounded-2xl font-black shadow-lg">
            ENVOYER L'OFFRE
        </button></a>
    </form>

    <a href="livreur.php" class="block text-center mt-6 text-sm text-slate-400 hover:text-blue-600">
        ← Retour
    </a>
</div>

</body>
</html>
