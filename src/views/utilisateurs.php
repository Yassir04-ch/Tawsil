<?php
require_once __DIR__ ."/../Controller/afficheusers.php";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LmsakherGO - Gestion des Utilisateurs</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body class="bg-slate-50 flex h-screen overflow-hidden font-sans">

<!-- Sidebar -->
<aside class="w-72 bg-white border-r border-slate-200 flex flex-col z-50">
    <div class="p-8 border-b border-slate-50">
        <div class="flex items-center gap-3">
            <div
                class="w-10 h-10 bg-blue-600 rounded-xl flex items-center justify-center text-white shadow-lg shadow-blue-200">
                <i class="fa-solid fa-shield-halved text-xl"></i>
            </div>
            <h1 class="text-xl font-black text-slate-900 tracking-tighter">Lmsakhar <span
                    class="text-blue-600">GO</span></h1>
        </div>
    </div>

    <nav class="flex-1 p-6 space-y-2 overflow-y-auto">
        <p class="text-[10px] font-black text-slate-400 uppercase tracking-[0.2em] mb-4 ml-4 italic">Management</p>
        <a href="admin.php"
            class="flex items-center gap-4 text-slate-500 hover:bg-slate-50 p-4 rounded-2xl font-bold transition italic">
            <i class="fa-solid fa-chart-pie w-5"></i> Vue d'ensemble
        </a>
        <a href="#" class="sidebar-item-active flex items-center gap-4 p-4 rounded-2xl font-bold transition italic">
            <i class="fa-solid fa-users w-5"></i> Utilisateurs
        </a>
        <a href="commandes.php"
            class="flex items-center gap-4 text-slate-500 hover:bg-slate-50 p-4 rounded-2xl font-bold transition italic">
            <i class="fa-solid fa-box w-5"></i> Commandes
        </a>
    </nav>
</aside>

<!-- Main -->
<main class="flex-1 flex flex-col overflow-y-auto bg-[#F8FAFC]">
    <header
        class="h-20 bg-white/80 backdrop-blur-md border-b border-slate-200 px-10 flex items-center justify-between sticky top-0 z-40">
        <h2 class="text-xl font-black text-slate-800 italic uppercase">Gestion des <span
                class="text-blue-600">Utilisateurs</span></h2>
    </header>

    <div class="p-10 max-w-[1600px] mx-auto w-full">
        <div class="bg-white rounded-[2.5rem] border border-slate-200 shadow-xl overflow-hidden">
            <div class="p-8 border-b border-slate-100 flex justify-between items-center bg-slate-50/50">
                <div>
                    <h3 class="text-lg font-black text-slate-800 italic uppercase tracking-tighter">Membres de la
                        plateforme</h3>
                    <p class="text-xs text-slate-500 font-medium italic">Tous les comptes enregistrés dans le
                        système.</p>
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left">
                    <thead
                        class="bg-white text-slate-400 text-[10px] font-black uppercase tracking-[0.2em] border-b">
                        <tr>
                            <th class="px-8 py-5">Utilisateur</th>
                            <th class="px-8 py-5">Email</th>
                            <th class="px-8 py-5">Rôle</th>
                            <th class="px-8 py-5">Situation</th>
                            <th class="px-8 py-5 text-right">Actions</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-slate-100">
                    <?php foreach ($users as $user): ?>
                        <tr class="hover:bg-slate-50/50 transition italic">
                            <td class="px-8 py-5">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="w-9 h-9 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center font-black text-xs">
                                    </div>
                                    <span
                                        class="text-sm font-black text-slate-800"><?= htmlspecialchars($user['firstname'] . ' ' . $user['lastname']) ?></span>
                                </div>
                            </td>
                            <td class="px-8 py-5 text-sm font-bold text-slate-500"><?= htmlspecialchars($user['email']) ?></td>
                            <td class="px-8 py-5 text-sm">
                                <span
                                    class="px-3 py-1 bg-blue-50 text-blue-600 rounded-lg text-[10px] font-black uppercase tracking-wider"><?= $user['role'] ?></span>
                            </td>
                            <td class="px-8 py-5 text-sm">
                                <?php if($user['active'] == 1): ?>
                                    <span
                                        class="px-3 py-1 bg-blue-50 text-blue-600 rounded-lg text-[10px] font-black uppercase tracking-wider">En ligne</span>
                                <?php elseif($user['active'] == 0): ?>
                                    <span
                                        class="px-3 py-1 bg-blue-50 text-blue-600 rounded-lg text-[10px] font-black uppercase tracking-wider">Offline</span>
                                <?php else: ?>
                                    <span
                                        class="px-3 py-1 bg-blue-50 text-blue-600 rounded-lg text-[10px] font-black uppercase tracking-wider">Désactivé</span>
                                <?php endif; ?>
                            </td>

                            <td class="px-8 py-5 text-right">
                                <button class="btn-edit-role p-2 text-slate-400 hover:text-blue-600 transition" data-id="<?= $user['id'] ?>">
                                    <i class="fa-solid fa-user-pen"></i>
                                </button>
                                <a href="../Controller/deletuser.php?id=<?= $user['id'] ?>">
                                    <button class="p-2 text-slate-400 hover:text-red-500 transition">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </a>
                                <a href="../Controller/activecont.php?id=<?= $user['id'] ?>">
                                    <button class="p-2 text-slate-400 hover:text-green-500 transition">
                                        <i class="fas fa-check"></i>
                                    </button>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

<!-- Modal unique -->
<div id="roleModal" class="hidden fixed inset-0 bg-slate-900/50 backdrop-blur-sm flex items-center justify-center z-[100]">
    <div class="bg-white rounded-[2rem] p-8 w-full max-w-md shadow-2xl border border-slate-100">
        <h3 class="text-xl font-black text-slate-800 italic uppercase mb-6">Modifier le Rôle</h3>

        <form action="../Controller/updaterole.php" method="POST" class="space-y-4">
            <input type="hidden" name="id" id="modalUserId">

            <div class="grid gap-3">
                <label class="flex items-center gap-3 p-4 border-2 border-slate-100 rounded-2xl cursor-pointer hover:border-blue-500 hover:bg-blue-50 transition group">
                    <input type="radio" name="role" value="admin" class="w-4 h-4 text-blue-600" required>
                    <span class="font-bold text-slate-700 group-hover:text-blue-700">Administrateur</span>
                </label>
                
                <label class="flex items-center gap-3 p-4 border-2 border-slate-100 rounded-2xl cursor-pointer hover:border-blue-500 hover:bg-blue-50 transition group">
                    <input type="radio" name="role" value="livreur" class="w-4 h-4 text-blue-600">
                    <span class="font-bold text-slate-700 group-hover:text-blue-700">Livreur</span>
                </label>
                
                <label class="flex items-center gap-3 p-4 border-2 border-slate-100 rounded-2xl cursor-pointer hover:border-blue-500 hover:bg-blue-50 transition group">
                    <input type="radio" name="role" value="client" class="w-4 h-4 text-blue-600">
                    <span class="font-bold text-slate-700 group-hover:text-blue-700">Client</span>
                </label>
            </div>

            <div class="flex gap-3 mt-8">
                <button type="button" id="closeModalBtn" class="flex-1 py-3 font-bold text-slate-500 hover:bg-slate-100 rounded-xl transition">Annuler</button>
                <button type="submit" class="flex-1 py-3 bg-blue-600 text-white font-bold rounded-xl shadow-lg shadow-blue-200 hover:bg-blue-700 transition">Confirmer</button>
            </div>
        </form>
    </div>
</div>

<script src="../Utils/utilisateurs.js"></script>

</body>
</html>
