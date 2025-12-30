<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>Client - Mes Livraisons</title>
</head>
<body class="bg-slate-50 font-sans text-slate-900">

    <nav class="bg-white shadow-sm border-b border-blue-100 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex items-center gap-2">
                    <div class="bg-blue-600 p-2 rounded-lg text-white">
                        <i class="fa-solid fa-box-archive text-xl"></i>
                    </div>
                    <h1 class="text-2xl font-black text-blue-900 tracking-tight">LMSAKHAR<span class="text-blue-600">GO</span></h1>
                </div>
                
                <div class="flex items-center gap-5">
                    <div class="relative cursor-pointer hover:bg-slate-100 p-2 rounded-full transition">
                        <i class="fa-solid fa-bell text-slate-500 text-xl"></i>
                        <span class="absolute top-1 right-1 bg-red-500 text-white text-[10px] font-bold px-1.5 py-0.5 rounded-full border-2 border-white">2</span>
                    </div>
                    <div class="h-10 w-10 bg-blue-100 border border-blue-200 rounded-full flex items-center justify-center text-blue-700 font-bold shadow-sm">
                        JD
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-10 gap-4">
            <div>
                <h2 class="text-3xl font-extrabold text-slate-800 tracking-tight">Tableau de bord <span class="text-blue-600 italic text-lg font-medium">Client</span></h2>
                <p class="text-slate-500 mt-1">Gérez vos expéditions et suivez vos colis en temps réel.</p>
            </div>
            <button class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-xl font-bold flex items-center shadow-lg shadow-blue-200 transition-all hover:-translate-y-1">
                <i class="fa-solid fa-plus mr-2"></i> Nouvelle commande
            </button>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
            <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm">
                <p class="text-slate-400 text-xs font-bold uppercase tracking-wider">En attente d'offres</p>
                <div class="flex items-center justify-between mt-2">
                    <h3 class="text-3xl font-black text-slate-800">03</h3>
                    <i class="fa-solid fa-clock-rotate-left text-amber-500 text-2xl"></i>
                </div>
            </div>
            <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm">
                <p class="text-slate-400 text-xs font-bold uppercase tracking-wider">Livraisons en cours</p>
                <div class="flex items-center justify-between mt-2">
                    <h3 class="text-3xl font-black text-slate-800">01</h3>
                    <i class="fa-solid fa-truck-fast text-blue-500 text-2xl"></i>
                </div>
            </div>
            <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm border-l-4 border-l-green-500">
                <p class="text-slate-400 text-xs font-bold uppercase tracking-wider">Total Terminé</p>
                <div class="flex items-center justify-between mt-2">
                    <h3 class="text-3xl font-black text-slate-800">12</h3>
                    <i class="fa-solid fa-circle-check text-green-500 text-2xl"></i>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-3xl border border-slate-200 shadow-sm overflow-hidden">
            <div class="p-6 border-b border-slate-100 flex justify-between items-center bg-slate-50/50">
                <h3 class="font-black text-slate-700 uppercase tracking-widest text-sm">Mes dernières commandes</h3>
                <div class="flex gap-2">
                    <button class="text-xs font-bold px-3 py-1 bg-white border rounded-lg hover:bg-slate-50 transition">Filtrer</button>
                </div>
            </div>

            <div class="divide-y divide-slate-100">
                
                <div class="p-6 hover:bg-slate-50 transition group">
                    <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-6">
                        <div class="space-y-2">
                            <div class="flex items-center gap-3">
                                <span class="text-xs font-mono font-bold text-slate-400">#CMD-9902</span>
                                <span class="bg-amber-100 text-amber-700 text-[10px] font-black px-2 py-0.5 rounded-full uppercase">Attente d'offres</span>
                            </div>
                            <h4 class="text-lg font-bold text-slate-800 group-hover:text-blue-600 transition">Canapé d'angle (3 places)</h4>
                            <div class="flex items-center gap-4 text-sm text-slate-500">
                                <span><i class="fa-solid fa-location-arrow text-slate-400 mr-1"></i> Tanger</span>
                                <i class="fa-solid fa-arrow-right-long text-slate-300"></i>
                                <span><i class="fa-solid fa-location-dot text-red-400 mr-1"></i> Agadir</span>
                            </div>
                        </div>

                        <div class="flex flex-wrap gap-2 w-full md:w-auto">
                            <button class="flex-1 md:flex-none bg-blue-50 text-blue-600 px-4 py-2 rounded-lg font-bold text-sm hover:bg-blue-600 hover:text-white transition">
                                <i class="fa-solid fa-tags mr-2"></i> Voir les offres (3)
                            </button>
                            <button title="Modifier" class="p-2 text-slate-400 hover:text-blue-500 hover:bg-white rounded-lg border border-transparent hover:border-slate-200 transition">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </button>
                            <button title="Annuler" class="p-2 text-slate-400 hover:text-red-500 hover:bg-white rounded-lg border border-transparent hover:border-slate-200 transition">
                                <i class="fa-solid fa-ban"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="p-6 hover:bg-slate-50 transition group">
                    <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-6">
                        <div class="space-y-2">
                            <div class="flex items-center gap-3">
                                <span class="text-xs font-mono font-bold text-slate-400">#CMD-8812</span>
                                <span class="bg-blue-600 text-white text-[10px] font-black px-2 py-0.5 rounded-full uppercase italic">Expédiée</span>
                            </div>
                            <h4 class="text-lg font-bold text-slate-800">Ordinateur Portable Gamer</h4>
                            <div class="flex items-center gap-4 text-sm text-slate-500">
                                <p><i class="fa-solid fa-user-gear mr-1 text-slate-400"></i> Livreur : <b>Ahmed Pro</b></p>
                            </div>
                        </div>

                        <div class="flex flex-col items-end gap-2">
                            <button class="w-full md:w-auto bg-green-500 hover:bg-green-600 text-white px-6 py-2 rounded-lg font-bold text-sm shadow-md shadow-green-100 transition">
                                Confirmer la réception
                            </button>
                            <p class="text-[10px] text-slate-400 italic">Cliquez ici une fois le colis en main</p>
                        </div>
                    </div>
                </div>

                <div class="p-6 bg-slate-50/30 opacity-75">
                    <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-6">
                        <div class="space-y-2">
                            <div class="flex items-center gap-3">
                                <span class="text-xs font-mono font-bold text-slate-300">#CMD-7540</span>
                                <span class="bg-slate-200 text-slate-500 text-[10px] font-black px-2 py-0.5 rounded-full uppercase">Terminée</span>
                            </div>
                            <h4 class="text-lg font-bold text-slate-600 italic line-through decoration-slate-300">Kit de jardinage</h4>
                        </div>
                        <div class="text-right">
                            <p class="text-sm font-bold text-slate-500">Livré le 28/12/2025</p>
                            <div class="text-amber-400 text-xs mt-1">
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>

    <div class="md:hidden fixed bottom-0 left-0 right-0 bg-white border-t border-slate-200 p-4 flex justify-around">
        <i class="fa-solid fa-house text-blue-600 text-xl"></i>
        <i class="fa-solid fa-plus-circle text-slate-400 text-xl"></i>
        <i class="fa-solid fa-comment-dots text-slate-400 text-xl"></i>
        <i class="fa-solid fa-user text-slate-400 text-xl"></i>
    </div>

</body>
</html>