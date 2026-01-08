<?php

namespace Src\View;

require_once __DIR__ . '/../../vendor/autoload.php';
use Src\Repository\CommandeRepository;
session_start();
$commandeRepo = new CommandeRepository();
$commandes = $commandeRepo->commandelivreur();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LmsakherGO - Espace Livreur</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-slate-50 text-slate-900 font-sans pb-24">

<header class="bg-white/80 backdrop-blur-md sticky top-0 z-50 border-b border-slate-100 p-5">
    <div class="max-w-7xl mx-auto flex justify-between items-center">
        <div class="flex items-center gap-3">
            <div class="h-10 w-10 bg-blue-600 rounded-xl flex items-center justify-center text-white shadow-lg shadow-blue-200 rotate-3">
                <i class="fa-solid fa-motorcycle -rotate-3"></i>
            </div>
            <div>
                <h2 class="text-lg font-black tracking-tighter italic">Lmsakhar<span class="text-blue-600">GO</span></h2>
                <p class="text-[10px] text-green-500 font-bold uppercase"><i class="fa-solid fa-circle text-[8px] mr-1"></i> En ligne</p>
            </div>
        </div>

               <a href="profil.php">
                    <div class="h-10 w-10 rounded-full bg-gradient-to-tr from-blue-600 to-indigo-600 flex items-center justify-center text-white font-bold shadow-md uppercase">
                        <?= substr($_SESSION['firstname'], 0, 2) ?>
                    </div>
                </a>
    </div>
</header>

<main class="max-w-4xl mx-auto p-4 space-y-8">

    <section class="space-y-4">
        <h3 class="text-sm font-black text-slate-400 uppercase tracking-[0.2em] ml-2">Missions Disponibles</h3>

        <?php if(!empty($commandes)): ?>
            <?php foreach($commandes as $commande): ?>
            <div class="bg-white p-6 rounded-[2.5rem] border border-slate-100 shadow-sm space-y-6 hover:border-blue-500/50 transition-all group">
                <div class="flex justify-between items-start">
                    <a href="ofrecommand.php?id=<?= $commande['id']?>">
                        <button class="view-offers-btn flex-1 lg:flex-none bg-blue-600 text-white px-6 py-3 rounded-xl font-bold text-sm shadow-lg shadow-blue-100 hover:bg-slate-900 transition flex items-center justify-center">
                            <i class="fa-solid fa-tags mr-2"></i> Voir les offres
                        </button>
                    </a>
                    <div class="space-y-1">
                        <span class="bg-blue-50 text-blue-600 text-[10px] font-black px-3 py-1 rounded-full border border-blue-100">NOUVEAU</span>
                        <h4 class="text-xl font-bold pt-2 text-slate-800"><?= $commande['description']?></h4>
                        <span class="bg-blue-50 text-blue-600 text-[10px] font-black px-3 py-1 rounded-full border border-blue-100">status command</span>
                        <h5 class="text-xl font-bold pt-2 text-slate-800"><?= $commande['status']?></h5>
                    </div>
                    <div class="text-right">
                        <p class="text-xs text-slate-400">date creat</p>
                        <p class="text-xl font-black text-blue-600 italic"><?= $commande['created_at'] ?></p>
                    </div>
                </div>

                <div class="relative flex gap-4 pl-2">
                    <div class="flex flex-col items-center py-1">
                        <div class="h-3 w-3 rounded-full bg-blue-600 shadow-[0_0_10px_rgba(37,99,235,0.3)]"></div>
                        <div class="w-[2px] h-10 bg-slate-100 my-1"></div>
                        <div class="h-3 w-3 rounded-full border-2 border-blue-600"></div>
                    </div>
                    <div class="space-y-4">
                        <p class="text-sm font-semibold text-slate-700">Départ: <span class="text-slate-400 ml-2 font-medium italic text-xs"><?= $commande['adresse'] ?></span></p>
                        <p class="text-sm font-semibold text-slate-700">Arrivée: <span class="text-slate-400 ml-2 font-medium italic text-xs"><?= $commande['address_delivery'] ?></span></p>
                    </div>  
                </div>
          <?php if($commande['status'] == 'En attente'): ?>
                <a href="proposerOffre.php?id=<?= $commande['id'] ?>">
                    <button class="btn-propose w-full bg-slate-900 text-white py-5 rounded-2xl font-black text-sm hover:bg-blue-600 transition-all active:scale-95 shadow-xl shadow-slate-200">
                        PROPOSER UN PRIX
                    </button>
                </a>
         <?php endif; ?>
            </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p class="p-6 text-center text-slate-500">Aucune mission disponible pour le moment.</p>
        <?php endif; ?>
    </section>

</main>

</body>
</html>