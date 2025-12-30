<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>Admin - Contrôle Total</title>
</head>
<body class="bg-gray-900 text-gray-100 font-sans">

    <div class="flex h-screen">
        <aside class="w-64 bg-black border-r border-gray-800 flex flex-col">
            <div class="p-6">
                <h1 class="text-2xl font-black text-red-600 tracking-tighter">ADMIN<span class="text-white">PANEL</span></h1>
            </div>
            <nav class="flex-1 px-4 space-y-2 mt-4">
                <a href="#" class="flex items-center p-3 bg-red-600/10 text-red-500 rounded-lg border border-red-600/20">
                    <i class="fa-solid fa-chart-line mr-3"></i> Statistiques
                </a>
                <a href="#" class="flex items-center p-3 text-gray-400 hover:bg-gray-800 hover:text-white rounded-lg transition">
                    <i class="fa-solid fa-users mr-3"></i> Utilisateurs
                </a>
                <a href="#" class="flex items-center p-3 text-gray-400 hover:bg-gray-800 hover:text-white rounded-lg transition">
                    <i class="fa-solid fa-truck-ramp-box mr-3"></i> Flux Commandes
                </a>
            </nav>
        </aside>

        <main class="flex-1 overflow-y-auto bg-gray-900">
            <header class="p-6 border-b border-gray-800 flex justify-between items-center bg-gray-900/50 backdrop-blur-md sticky top-0">
                <h2 class="text-xl font-bold uppercase tracking-widest">Supervision Globale</h2>
                <button class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded font-bold text-sm transition">Exporter CSV <i class="fa-solid fa-download ml-2"></i></button>
            </header>

            <div class="p-8">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-10">
                    <div class="bg-gray-800 p-6 rounded-2xl border border-gray-700">
                        <p class="text-gray-400 text-sm">Total Commandes</p>
                        <h3 class="text-3xl font-black mt-1">1,284</h3>
                    </div>
                    <div class="bg-gray-800 p-6 rounded-2xl border border-gray-700">
                        <p class="text-gray-400 text-sm text-green-400">Terminées</p>
                        <h3 class="text-3xl font-black mt-1">942</h3>
                    </div>
                    <div class="bg-gray-800 p-6 rounded-2xl border border-gray-700">
                        <p class="text-gray-400 text-sm text-red-400">Annulées</p>
                        <h3 class="text-3xl font-black mt-1">56</h3>
                    </div>
                    <div class="bg-gray-800 p-6 rounded-2xl border border-gray-700">
                        <p class="text-gray-400 text-sm text-blue-400">Livreurs Actifs</p>
                        <h3 class="text-3xl font-black mt-1">128</h3>
                    </div>
                </div>

                <div class="bg-gray-800 rounded-2xl border border-gray-700 overflow-hidden">
                    <div class="p-6 border-b border-gray-700">
                        <h3 class="font-bold text-lg">Derniers Utilisateurs Inscrits</h3>
                    </div>
                    <table class="w-full text-left">
                        <thead class="bg-gray-800/50 text-gray-500 text-xs">
                            <tr>
                                <th class="px-6 py-4">Utilisateur</th>
                                <th class="px-6 py-4">Rôle</th>
                                <th class="px-6 py-4">Statut</th>
                                <th class="px-6 py-4">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-700">
                            <tr>
                                <td class="px-6 py-4 font-medium">Yassine Elamri</td>
                                <td class="px-6 py-4"><span class="text-amber-500 font-bold text-xs uppercase">Livreur</span></td>
                                <td class="px-6 py-4"><span class="bg-green-500/10 text-green-500 px-2 py-1 rounded-full text-[10px] font-bold">ACTIF</span></td>
                                <td class="px-6 py-4">
                                    <button class="text-xs bg-red-500/20 text-red-500 px-3 py-1 rounded hover:bg-red-500 hover:text-white transition italic font-bold text-[10px]">DÉSACTIVER</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 font-medium">Sara Bennani</td>
                                <td class="px-6 py-4"><span class="text-blue-500 font-bold text-xs uppercase">Client</span></td>
                                <td class="px-6 py-4"><span class="bg-gray-700 text-gray-400 px-2 py-1 rounded-full text-[10px] font-bold">SUSPENDU</span></td>
                                <td class="px-6 py-4">
                                    <button class="text-xs bg-green-500/20 text-green-500 px-3 py-1 rounded hover:bg-green-500 hover:text-white transition italic font-bold text-[10px]">ACTIVER</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>

</body>
</html>