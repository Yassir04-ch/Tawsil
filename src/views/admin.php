<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LmsakherGO - Administration Système</title>
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
            
            <a href="#" class="sidebar-item-active flex items-center gap-4 p-4 rounded-2xl font-bold transition">
                <i class="fa-solid fa-chart-pie w-5"></i> Vue d'ensemble
            </a>
            <a href="utilisateurs.php" class="flex items-center gap-4 text-slate-500 hover:bg-slate-50 p-4 rounded-2xl font-bold transition">
                <i class="fa-solid fa-users w-5"></i> Utilisateurs
            </a>
            <a href="#" class="flex items-center gap-4 text-slate-500 hover:bg-slate-50 p-4 rounded-2xl font-bold transition">
                <i class="fa-solid fa-truck-fast w-5"></i> Livreurs
            </a>
            <a href="commandes.php" class="flex items-center gap-4 text-slate-500 hover:bg-slate-50 p-4 rounded-2xl font-bold transition">
                <i class="fa-solid fa-box w-5"></i> Commandes
            </a>

            <div class="pt-8">
                <p class="text-[10px] font-black text-slate-400 uppercase tracking-[0.2em] mb-4 ml-4 italic">Configuration</p>
                <a href="#" class="flex items-center gap-4 text-slate-500 hover:bg-slate-50 p-4 rounded-2xl font-bold transition">
                    <i class="fa-solid fa-gears w-5"></i> Paramètres
                </a>
            </div>
        </nav>

        <div class="p-6 border-t border-slate-100">
            <div class="bg-slate-900 p-4 rounded-2xl flex items-center gap-3">
                <a href="profil.php"><div class="w-10 h-10 rounded-full bg-blue-500 flex items-center justify-center text-xs font-bold text-white">AD</div></a>
                <div class="flex-1 overflow-hidden">
                    <p class="text-xs font-black text-white truncate"></p>
                    <p class="text-[10px] text-slate-400 truncate">admin@lmsakher.go</p>
                </div>
                <a href="../Controller/deconexion.php"><button class="text-slate-500 hover:text-red-400"><i class="fa-solid fa-right-from-bracket"></i></button></a>
            </div>
        </div>
    </aside>

    <!-- Main -->
    <main class="flex-1 flex flex-col overflow-y-auto bg-[#F8FAFC]">
        
        <header class="h-20 bg-white/80 backdrop-blur-md border-b border-slate-200 px-10 flex items-center justify-between sticky top-0 z-40">
            <h2 class="text-xl font-black text-slate-800">Statistiques</h2>
            
            <div class="flex items-center gap-6">
                <div class="relative group hidden md:block">
                    <i class="fa-solid fa-magnifying-glass absolute left-4 top-1/2 -translate-y-1/2 text-slate-400"></i>
                    <input type="text" placeholder="Rechercher..." class="bg-slate-100 border-none rounded-xl pl-12 pr-4 py-2.5 text-sm w-64 focus:ring-2 focus:ring-blue-500 transition-all">
                </div>
                <button class="p-2.5 bg-slate-100 rounded-xl hover:bg-blue-50 hover:text-blue-600 transition"><i class="fa-solid fa-bell"></i></button>
            </div>
        </header>

        <div class="p-10 space-y-10 max-w-[1600px] mx-auto w-full">
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-white p-6 rounded-3xl shadow-sm border border-slate-100">
                    <div class="flex justify-between mb-4">
                        <div class="p-3 bg-blue-50 text-blue-600 rounded-2xl"><i class="fa-solid fa-wallet text-xl"></i></div>
                        <span class="text-green-500 text-xs font-bold">+12% <i class="fa-solid fa-arrow-up"></i></span>
                    </div>
                    <p class="text-xs font-bold text-slate-400 uppercase tracking-widest">Revenus Totaux</p>
                    <h3 class="text-3xl font-black mt-2">42,500 <span class="text-sm font-medium">DH</span></h3>
                </div>
                
                <div class="bg-white p-6 rounded-3xl shadow-sm border border-slate-100">
                    <div class="flex justify-between mb-4">
                        <div class="p-3 bg-orange-50 text-orange-600 rounded-2xl"><i class="fa-solid fa-truck-ramp-box text-xl"></i></div>
                        <span class="text-blue-500 text-xs font-bold">+5 today</span>
                    </div>
                    <p class="text-xs font-bold text-slate-400 uppercase tracking-widest">Livreurs Actifs</p>
                    <h3 class="text-3xl font-black mt-2">124</h3>
                </div>

                <div class="bg-white p-6 rounded-3xl shadow-sm border border-slate-100">
                    <div class="flex justify-between mb-4">
                        <div class="p-3 bg-green-50 text-green-600 rounded-2xl"><i class="fa-solid fa-circle-check text-xl"></i></div>
                        <span class="text-slate-400 text-xs font-bold">98% Success</span>
                    </div>
                    <p class="text-xs font-bold text-slate-400 uppercase tracking-widest">Taux de livraison</p>
                    <h3 class="text-3xl font-black mt-2">1,042</h3>
                </div>

                <div class="bg-white p-6 rounded-3xl shadow-sm border border-slate-100">
                    <div class="flex justify-between mb-4">
                        <div class="p-3 bg-red-50 text-red-600 rounded-2xl"><i class="fa-solid fa-triangle-exclamation text-xl"></i></div>
                        <span class="text-red-500 text-xs font-bold">Critical</span>
                    </div>
                    <p class="text-xs font-bold text-slate-400 uppercase tracking-widest">Signalements</p>
                    <h3 class="text-3xl font-black mt-2">08</h3>
                </div>
            </div>

            <!-- Tableau & Nouveau Staff -->
            <div class="bg-white rounded-[2.5rem] border border-slate-200 shadow-xl overflow-hidden">
                <div class="p-8 border-b border-slate-100 flex flex-col md:flex-row justify-between items-center gap-4 bg-slate-50/50">
                    <div>
                        <h3 class="text-lg font-black text-slate-800 italic uppercase tracking-tighter">Modération & Surveillance</h3>
                        <p class="text-xs text-slate-500 font-medium">Gestion des comptes et des accès système.</p>
                    </div>
                    <div class="flex gap-3">
                        <!-- Bouton modifié -->
                        <button id="open-admin-modal" class="bg-slate-900 text-white px-6 py-2.5 rounded-xl font-bold text-xs hover:bg-blue-600 transition flex items-center gap-2">
                            <i class="fa-solid fa-user-plus"></i> Nouveau Staff
                        </button>
                    </div>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-left">
                        <thead class="bg-white text-slate-400 text-[10px] font-black uppercase tracking-[0.2em] border-b">
                            <tr>
                                <th class="px-8 py-5">Utilisateur</th>
                                <th class="px-8 py-5">Rôle / Accès</th>
                                <th class="px-8 py-5">Score / Avis</th>
                                <th class="px-8 py-5">Statut Compte</th>
                                <th class="px-8 py-5 text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100" id="users-table">
                        </tbody>
                    </table>
                </div>
                
                <div class="p-6 bg-white border-t border-slate-50 flex justify-between items-center">
                    <p class="text-xs text-slate-400 font-bold tracking-widest">AFFICHE 1-10 DE 1,280 RÉSULTATS</p>
                    <div class="flex gap-2">
                        <button class="px-4 py-2 border rounded-xl text-xs font-black hover:bg-slate-50 transition">PRÉCÉDENT</button>
                        <button class="px-4 py-2 bg-blue-600 text-white rounded-xl text-xs font-black shadow-lg shadow-blue-100 transition">SUIVANT</button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Modal Nouveau Staff -->
    <div id="admin-modal" class="fixed inset-0 bg-slate-900/60 backdrop-blur-md z-[100] hidden flex items-center justify-center p-4">
        <div class="bg-white w-full max-w-lg rounded-[3rem] p-10 shadow-2xl scale-in">
            <h2 class="text-2xl font-black italic mb-6">Ajouter Nouveau Staff</h2>
            <form id="new-staff-form" class="space-y-6">
                <div>
                    <label class="block text-xs font-bold text-slate-500 mb-2">first name</label>
                    <input type="text" name="firstname" class="w-full border border-slate-200 rounded-xl px-4 py-2 focus:ring-2 focus:ring-blue-500" placeholder="Ex: Ahmed Ben Ali" required>
                </div>
                 <div>
                    <label class="block text-xs font-bold text-slate-500 mb-2">last name</label>
                    <input type="text" name="lastname" class="w-full border border-slate-200 rounded-xl px-4 py-2 focus:ring-2 focus:ring-blue-500" placeholder="Ex: Ahmed Ben Ali" required>
                </div>
                <div>
                    <label class="block text-xs font-bold text-slate-500 mb-2">Email</label>
                    <input type="email" name="email" class="w-full border border-slate-200 rounded-xl px-4 py-2 focus:ring-2 focus:ring-blue-500" placeholder="Ex: staff@domain.com" required>
                </div>
                <div>
                    <label class="block text-xs font-bold text-slate-500 mb-2">Mot de Passe</label>
                    <input type="password" name="password" class="w-full border border-slate-200 rounded-xl px-4 py-2 focus:ring-2 focus:ring-blue-500" placeholder="******" required>
                </div>
                <div>
                    <label class="block text-xs font-bold text-slate-500 mb-2">Rôle / Accès</label>
                    <select name="role" class="w-full border border-slate-200 rounded-xl px-4 py-2 focus:ring-2 focus:ring-blue-500" required>
                        <option value="">-- Sélectionner un rôle --</option>
                        <option value="admin">livreur</option>
                        <option value="moderator">client</option>
                        <option value="viewer">admin</option>
                    </select>
                </div>
                <div class="flex gap-4 mt-6">
                    <button type="button" id="close-admin-modal" class="flex-1 py-3 bg-slate-100 rounded-2xl font-bold text-slate-500 hover:bg-slate-200">Annuler</button>
                    <button type="submit" class="flex-[2] py-3 bg-blue-600 text-white rounded-2xl font-black shadow-xl">Ajouter</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Scripts -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const openModalBtn = document.getElementById('open-admin-modal');
            const adminModal = document.getElementById('admin-modal');
            const closeModalBtns = document.querySelectorAll('#close-admin-modal');
            const newStaffForm = document.getElementById('new-staff-form');

            // Ouvrir modal
            openModalBtn.addEventListener('click', () => {
                adminModal.classList.remove('hidden');
                document.body.classList.add('overflow-hidden');
            });

            // Fermer modal
            closeModalBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    adminModal.classList.add('hidden');
                    document.body.classList.remove('overflow-hidden');
                });
            });

            // Fermer en cliquant en dehors
            adminModal.addEventListener('click', (e) => {
                if (e.target === adminModal) {
                    adminModal.classList.add('hidden');
                    document.body.classList.remove('overflow-hidden');
                }
            });

            // Soumission du formulaire (exemple console.log)
            newStaffForm.addEventListener('submit', (e) => {
                e.preventDefault();
                const formData = new FormData(newStaffForm);
                const data = Object.fromEntries(formData.entries());
                console.log("Nouveau staff :", data);
                // Ici tu peux envoyer les données à PHP via fetch
                adminModal.classList.add('hidden');
                document.body.classList.remove('overflow-hidden');
                newStaffForm.reset();
            });
        });
    </script>

</body>
</html>
