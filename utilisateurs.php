<?php
require_once 'src/Entity/user.php';
require_once 'src/Repository/userRepository.php';
require_once 'src/Service/AdmineService.php';
session_start();
 if (!isset($_SESSION['id']) || $_SESSION['role'] != 'admin'){
header('location:index.php');
exit();
}
$adminser = new AdmineService();
$id = $_SESSION['id'];
$users = $adminser->affichusers($id);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LmsakherGO - Gestion des Utilisateurs</title>
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
                    <i class="fa-solid fa-shield-halved text-xl"></i>
                </div>
                <h1 class="text-xl font-black text-slate-900 tracking-tighter">Lmsakhar <span class="text-blue-600">GO</span></h1>
            </div>
        </div>

        <nav class="flex-1 p-6 space-y-2 overflow-y-auto">
            <p class="text-[10px] font-black text-slate-400 uppercase tracking-[0.2em] mb-4 ml-4 italic">Management</p>
            <a href="admin.php" class="flex items-center gap-4 text-slate-500 hover:bg-slate-50 p-4 rounded-2xl font-bold transition italic">
                <i class="fa-solid fa-chart-pie w-5"></i> Vue d'ensemble
            </a>
            <a href="#" class="sidebar-item-active flex items-center gap-4 p-4 rounded-2xl font-bold transition italic">
                <i class="fa-solid fa-users w-5"></i> Utilisateurs
            </a>
            <a href="#" class="flex items-center gap-4 text-slate-500 hover:bg-slate-50 p-4 rounded-2xl font-bold transition italic">
                <i class="fa-solid fa-truck-fast w-5"></i> Livreurs
            </a>
            <a href="commandes.php" class="flex items-center gap-4 text-slate-500 hover:bg-slate-50 p-4 rounded-2xl font-bold transition italic">
                <i class="fa-solid fa-box w-5"></i> Commandes
            </a>
        </nav>
    </aside>

    <main class="flex-1 flex flex-col overflow-y-auto bg-[#F8FAFC]">
        
        <header class="h-20 bg-white/80 backdrop-blur-md border-b border-slate-200 px-10 flex items-center justify-between sticky top-0 z-40">
            <h2 class="text-xl font-black text-slate-800 italic uppercase">Gestion des <span class="text-blue-600">Utilisateurs</span></h2>
            
            <div class="flex items-center gap-6">
                <div class="relative group hidden md:block">
                    <i class="fa-solid fa-magnifying-glass absolute left-4 top-1/2 -translate-y-1/2 text-slate-400"></i>
                    <input type="text" placeholder="Rechercher un utilisateur..." class="bg-slate-100 border-none rounded-xl pl-12 pr-4 py-2.5 text-sm w-80 focus:ring-2 focus:ring-blue-500 transition-all">
                </div>
            </div>
        </header>

        <div class="p-10 max-w-[1600px] mx-auto w-full">
            
            <div class="bg-white rounded-[2.5rem] border border-slate-200 shadow-xl overflow-hidden">
                <div class="p-8 border-b border-slate-100 flex justify-between items-center bg-slate-50/50">
                    <div>
                        <h3 class="text-lg font-black text-slate-800 italic uppercase tracking-tighter">Membres de la plateforme</h3>
                        <p class="text-xs text-slate-500 font-medium italic">Tous les comptes enregistrés dans le système.</p>
                    </div>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-left">
                        <thead class="bg-white text-slate-400 text-[10px] font-black uppercase tracking-[0.2em] border-b">
                            <tr>
                                <th class="px-8 py-5">Utilisateur</th>
                                <th class="px-8 py-5">Email</th>
                                <th class="px-8 py-5">Rôle</th>
                                <th class="px-8 py-5">situation</th>
                                <th class="px-8 py-5 text-right">Actions</th>
                            </tr>
                        </thead>
                        <?php foreach($users as $user) : ?>
                        <tbody class="divide-y divide-slate-100">
                            <tr class="hover:bg-slate-50/50 transition italic">
                                <td class="px-8 py-5">
                                    <div class="flex items-center gap-3">
                                        <div class="w-9 h-9 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center font-black text-xs">YA</div>
                                        <span class="text-sm font-black text-slate-800"><?=$user['firstname'] . $user['lastname'] ?></span>
                                    </div>
                                </td>
                                <td class="px-8 py-5 text-sm font-bold text-slate-500"><?=$user['email']?></td>
                                <td class="px-8 py-5 text-sm">
                                    <span class="px-3 py-1 bg-blue-50 text-blue-600 rounded-lg text-[10px] font-black uppercase tracking-wider"><?=$user['role'] ?></span>
                                </td>
                                <?php if($user['active'] == 1) :?>
                                 <td class="px-8 py-5 text-sm">
                                    <span class="px-3 py-1 bg-blue-50 text-blue-600 rounded-lg text-[10px] font-black uppercase tracking-wider">En ligne</span>
                                </td>
                                <?php else :?>
                                 <td class="px-8 py-5 text-sm">
                                    <span class="px-3 py-1 bg-blue-50 text-blue-600 rounded-lg text-[10px] font-black uppercase tracking-wider">Offline</span>
                                </td>
                                <?php endif ;?>

                                <td class="px-8 py-5 text-right">
                                    <button class="p-2 text-slate-400 hover:text-blue-600 transition"><i class="fa-solid fa-user-pen"></i></button>
                                    <button class="p-2 text-slate-400 hover:text-red-500 transition"><i class="fa-solid fa-trash"></i></button>
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