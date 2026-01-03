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
            <a href="#" class="flex items-center gap-4 text-slate-500 hover:bg-slate-50 p-4 rounded-2xl font-bold transition">
                <i class="fa-solid fa-users w-5"></i> Utilisateurs
            </a>
            <a href="#" class="flex items-center gap-4 text-slate-500 hover:bg-slate-50 p-4 rounded-2xl font-bold transition">
                <i class="fa-solid fa-truck-fast w-5"></i> Livreurs
            </a>
            <a href="#" class="flex items-center gap-4 text-slate-500 hover:bg-slate-50 p-4 rounded-2xl font-bold transition">
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
                    <p class="text-xs font-black text-white truncate">Admin Root</p>
                    <p class="text-[10px] text-slate-400 truncate">admin@lmsakher.go</p>
                </div>
                <a href="deconexion.php"><button class="text-slate-500 hover:text-red-400"><i class="fa-solid fa-right-from-bracket"></i></button></a>
            </div>
        </div>
    </aside>

    <main class="flex-1 flex flex-col overflow-y-auto bg-[#F8FAFC]">
        
        <header class="h-20 bg-white/80 backdrop-blur-md border-b border-slate-200 px-10 flex items-center justify-between sticky top-0 z-40">
            <h2 class="text-xl font-black text-slate-800">Dashboard <span class="text-slate-400 font-medium">/ Statistiques</span></h2>
            
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

            <div class="bg-white rounded-[2.5rem] border border-slate-200 shadow-xl overflow-hidden">
                <div class="p-8 border-b border-slate-100 flex flex-col md:flex-row justify-between items-center gap-4 bg-slate-50/50">
                    <div>
                        <h3 class="text-lg font-black text-slate-800 italic uppercase tracking-tighter">Modération & Surveillance</h3>
                        <p class="text-xs text-slate-500 font-medium">Gestion des comptes et des accès système.</p>
                    </div>
                    <div class="flex gap-3">
                        <button class="bg-slate-900 text-white px-6 py-2.5 rounded-xl font-bold text-xs hover:bg-blue-600 transition flex items-center gap-2">
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

    <div id="admin-modal" class="fixed inset-0 bg-slate-900/60 backdrop-blur-md z-[100] hidden flex items-center justify-center p-4">
        <div class="bg-white w-full max-w-lg rounded-[3rem] p-10 shadow-2xl scale-in">
            <h2 class="text-2xl font-black italic mb-6">Modifier l'utilisateur</h2>
            <div id="modal-content-area" class="space-y-6">
                </div>
            <div class="flex gap-4 mt-10">
                <button id="close-admin-modal" class="flex-1 py-4 bg-slate-100 rounded-2xl font-bold text-slate-500 hover:bg-slate-200">Fermer</button>
                <button class="flex-[2] py-4 bg-blue-600 text-white rounded-2xl font-black shadow-xl">SAUVEGARDER</button>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
    // Actions de modération
    document.addEventListener('click', async (e) => {
        
        // Bouton Bannir
        if (e.target.closest('.btn-ban')) {
            const userId = e.target.closest('.btn-ban').dataset.userId;
            if (confirm("Voulez-vous vraiment bannir cet utilisateur ?")) {
                // --- BLASA DYAL PHP ---
                // await fetch(`api/admin_action.php?action=ban&id=${userId}`);
                console.log("Utilisateur banni:", userId);
            }
        }

        // Bouton Modifier (Ouvrir Modal)
        if (e.target.closest('.btn-edit')) {
            const userId = e.target.closest('.btn-edit').dataset.userId;
            // Fetch user info from PHP then open modal
            console.log("Chargement info utilisateur:", userId);
        }
    });

    // Filtres de recherche
    const searchInput = document.getElementById('admin-search');
    searchInput?.addEventListener('input', (e) => {
        const query = e.target.value;
        console.log("Recherche en cours pour:", query);
        // Hna tqder t-dir Live Search m3a PHP
    });
 });
    </script>
</body>
</html>