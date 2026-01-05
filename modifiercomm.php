<?php
require_once 'src/Entity/Commande.php';
require_once 'src/Repository/CommandeRepository.php';
require_once 'src/Service/CommandeService.php';
session_start();

$id = $_GET['id'];
$commanderep = new CommandeRepository();
$commande = $commanderep->getCommande( $id);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Expédition - LmsakherGO</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-slate-50 font-sans text-slate-900">

    <nav class="bg-white shadow-sm border-b border-slate-200 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex items-center gap-3">
                    <a href="client.php" class="h-10 w-10 flex items-center justify-center bg-slate-100 text-slate-600 rounded-xl hover:bg-blue-600 hover:text-white transition-all shadow-sm">
                        <i class="fa-solid fa-arrow-left"></i>
                    </a>
                    <h1 class="text-2xl font-black text-slate-800 tracking-tighter">LMSAKHER<span class="text-blue-600 italic">GO</span></h1>
                </div>
            </div>
        </div>
    </nav>

    <main class="max-w-2xl mx-auto px-4 py-12">
        <div class="bg-white rounded-[2.5rem] border border-slate-200 shadow-xl overflow-hidden">
            
            <div class="p-8 border-b border-slate-100 bg-slate-50/50">
                <div class="flex items-center gap-4 mb-4">
                    <div class="bg-amber-100 text-amber-700 text-[10px] font-black px-3 py-1 rounded-lg uppercase tracking-widest border border-amber-200">
                        Modification en cours
                    </div>
                    <span class="text-xs font-mono font-black text-slate-400">#LGO-9842</span>
                </div>
                <h2 class="text-3xl font-black italic tracking-tighter text-slate-800">Modifier l'expédition</h2>
                <p class="text-slate-500 mt-1">Mettez à jour les informations de votre colis avant qu'il ne soit pris en charge.</p>
            </div>

            <form action="modifierlog.php" method="POST" class="p-8 space-y-8">
                
                <input type="hidden" name="commande_id" value=<?=$commande['id']?>>

                <div class="relative group">
                    <label class="block text-xs font-black text-slate-400 uppercase tracking-widest mb-3 ml-1 group-focus-within:text-blue-600 transition-colors">
                        <i class="fa-solid fa-box-open mr-2"></i>Quoi expédier ?
                    </label>
                    <input type="text" name="description" placeholder="Ex: Livraison de 3 pizzas" value=<?=$commande['description']?>
                        class="w-full px-6 py-5 bg-slate-50 border-2 border-transparent rounded-2xl font-bold text-slate-800 outline-none focus:border-blue-500 focus:bg-white transition-all shadow-inner">
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="relative group">
                        <label class="block text-xs font-black text-slate-400 uppercase tracking-widest mb-3 ml-1 group-focus-within:text-blue-600 transition-colors">
                            <i class="fa-solid fa-location-dot mr-2"></i>Point de Retrait
                        </label>
                        <input type="text" name="adresse" placeholder="Adresse de départ"  value=<?=$commande['adresse']?>
                            class="w-full px-6 py-5 bg-slate-50 border-2 border-transparent rounded-2xl font-bold text-slate-800 outline-none focus:border-blue-500 focus:bg-white transition-all shadow-inner">
                    </div>

                    <div class="relative group">
                        <label class="block text-xs font-black text-slate-400 uppercase tracking-widest mb-3 ml-1 group-focus-within:text-red-500 transition-colors">
                            <i class="fa-solid fa-flag-checkered mr-2"></i>Destination
                        </label>
                        <input type="text" name="adresse_livraison" placeholder="Adresse d'arrivée"  value=<?=$commande['address_delivery']?>
                            class="w-full px-6 py-5 bg-slate-50 border-2 border-transparent rounded-2xl font-bold text-slate-800 outline-none focus:border-red-500 focus:bg-white transition-all shadow-inner">
                    </div>
                </div>

                <div class="bg-blue-50 border border-blue-100 rounded-2xl p-4 flex gap-4 items-start">
                    <i class="fa-solid fa-circle-info text-blue-500 mt-1"></i>
                    <p class="text-sm text-blue-700 leading-relaxed">
                        <strong>Note :</strong> Vous ne pouvez modifier une commande que lorsqu'elle est encore en statut <strong>"En attente"</strong>.
                    </p>
                </div>

                <div class="flex flex-col sm:flex-row gap-4 pt-4">
                    <a href="client.php" class="flex-1">
                        <button type="button" class="w-full bg-slate-100 text-slate-600 py-5 rounded-2xl font-black hover:bg-slate-200 transition-all uppercase tracking-tighter">
                            Annuler
                        </button></a>
                   
                    <button type="submit" name="submit" class="flex-[2] bg-slate-900 text-white py-5 rounded-2xl font-black hover:bg-blue-600 shadow-xl shadow-slate-200 transition-all hover:-translate-y-1 active:scale-95 uppercase tracking-tighter">
                        Enregistrer les modifications
                    </button>
                </div>
            </form>
        </div>
    </main>

</body>
</html>