<?php 
require_once 'src/Entity/Commande.php';
require_once 'src/Repository/AdminRepository.php';
require_once 'src/Service/AdmineService.php';
session_start();
$admineser = new AdmineService() ;
$commandes = $admineser->affichallcommandes();
 
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LmsakherGO - Gestion des Commandes</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .sidebar-item-active { background: rgba(59, 130, 246, 0.1); border-left: 4px solid #3b82f6; color: #3b82f6; }
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 10px; }
    </style>
</head>
<body class="bg-slate-50 flex h-screen overflow-hidden font-sans">

    <aside class="w-72 bg-white border-r border-slate-200 flex flex-col z-50">
        <div class="p-8 border-b border-slate-50">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-blue-600 rounded-xl flex items-center justify-center text-white shadow-lg shadow-blue-200">
                    <i class="fa-solid fa-box text-xl"></i>
                </div>
                <h1 class="text-xl font-black text-slate-900 tracking-tighter">Lmsakhar <span class="text-blue-600">GO</span></h1>
            </div>
        </div>

        <nav class="flex-1 p-6 space-y-2 overflow-y-auto">
            <p class="text-[10px] font-black text-slate-400 uppercase tracking-[0.2em] mb-4 ml-4 italic">Management</p>
            <a href="admin.php" class="flex items-center gap-4 text-slate-500 hover:bg-slate-50 p-4 rounded-2xl font-bold transition italic">
                <i class="fa-solid fa-chart-pie w-5"></i> Vue d'ensemble
            </a>
            <a href="utilisateurs.php" class="flex items-center gap-4 text-slate-500 hover:bg-slate-50 p-4 rounded-2xl font-bold transition italic">
                <i class="fa-solid fa-users w-5"></i> Utilisateurs
            </a>
            <a href="#" class="flex items-center gap-4 text-slate-500 hover:bg-slate-50 p-4 rounded-2xl font-bold transition italic">
                <i class="fa-solid fa-truck-fast w-5"></i> Livreurs
            </a>
            <a href="#" class="sidebar-item-active flex items-center gap-4 p-4 rounded-2xl font-bold transition italic">
                <i class="fa-solid fa-box w-5"></i> Commandes
            </a>
        </nav>
    </aside>

    <main class="flex-1 flex flex-col overflow-y-auto bg-[#F8FAFC]">
        
        <header class="h-20 bg-white/80 backdrop-blur-md border-b border-slate-200 px-10 flex items-center justify-between sticky top-0 z-40">
            <h2 class="text-xl font-black text-slate-800 italic uppercase">Suivi des <span class="text-blue-600">Commandes</span></h2>
        </header>

        <div class="p-10 max-w-[1600px] mx-auto w-full">
            
            <div class="bg-white rounded-[2.5rem] border border-slate-200 shadow-xl overflow-hidden">
                <div class="p-8 border-b border-slate-100 flex justify-between items-center bg-slate-50/50">
                    <div>
                        <h3 class="text-lg font-black text-slate-800 italic uppercase tracking-tighter">Flux de livraison</h3>
                        <p class="text-xs text-slate-500 font-medium italic">Gérez les commandes en temps réel.</p>
                    </div>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead class="bg-white text-slate-400 text-[10px] font-black uppercase tracking-[0.2em] border-b">
                            <tr>
                                <th class="px-8 py-5">Référence</th>
                                <th class="px-8 py-5">Client</th>
                                <th class="px-8 py-5">Destination</th>
                                <th class="px-8 py-5">date create</th>
                                <th class="px-8 py-5">Statut</th>
                                <th class="px-8 py-5">description</th>
                            </tr>
                        </thead>
                        <?php foreach($commandes as $command): ?>
                        <tbody class="divide-y divide-slate-100">
                            <tr class="hover:bg-slate-50/50 transition italic">
                                <td class="px-8 py-5">
                                    <span class="text-sm font-black text-blue-600 uppercase"><?= $command['id'] ?></span>
                                    <span class="block text-[10px] text-slate-400 font-bold">created : <?php $command['created_at'] ?></span>
                                </td>
                                <td class="px-8 py-5">
                                    <div class="flex flex-col">
                                        <span class="text-sm font-black text-slate-800"><?= $command['firstname'] . $command['lastname'] ?></span>
                                    </div>
                                </td>
                                <td class="px-8 py-5">
                                    <div class="flex items-center gap-2 text-slate-600">
                                        <i class="fa-solid fa-location-dot text-red-400 text-xs"></i>
                                        <span class="text-xs font-bold"><?=$command['adresse'] . " " . $command['address_delivery'] ?></span>
                                    </div>
                                </td>
                                <td class="px-8 py-5">
                                    <div class="flex items-center gap-2">
                                        <span class="text-xs font-bold text-slate-700"><?= $command['created_at'] ?>PM</span>
                                    </div>
                                </td>
                                <td class="px-8 py-5">
                                    <span class="px-3 py-1 bg-blue-50 text-blue-600 rounded-lg text-[10px] font-black uppercase tracking-wider">
                                        <?= $command['status'] ?>
                                    </span>
                                </td>
                                <td class="px-8 py-5">
                                    <span class="text-sm font-black text-slate-900"><?= $command['description'] ?></span>
                                </td>
                                <td class="px-8 py-5 text-right">
                                    <button class="p-2 text-slate-400 hover:text-blue-600 transition"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                                </td>
                            </tr>

                            
                        </tbody>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </main>

</body>
</html>