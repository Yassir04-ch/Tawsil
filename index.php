<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>Livreur - Opportunités</title>
</head>
<body class="bg-gray-100 font-sans">

    <nav class="bg-white shadow-md p-4 flex justify-between items-center px-10 border-b-4 border-amber-500">
        <h1 class="text-2xl font-black text-slate-800">SHIP<span class="text-amber-500">GO</span></h1>
        <div class="flex items-center gap-6">
            <div class="text-right">
                <p class="text-sm font-bold">Mohammed Livreur</p>
                <p class="text-xs text-amber-600 font-semibold">⭐ 4.8 (24 Avis)</p>
            </div>
            <div class="h-10 w-10 bg-amber-500 rounded-full flex items-center justify-center text-white font-bold">M</div>
        </div>
    </nav>

    <div class="container mx-auto p-6">
        <div class="flex flex-col md:flex-row gap-6">
            
            <aside class="w-full md:w-1/4 space-y-4">
                <div class="bg-white p-5 rounded-xl shadow-sm border border-gray-200">
                    <h3 class="font-bold mb-4 text-gray-700 underline decoration-amber-400">Filtres</h3>
                    <div class="space-y-3">
                        <label class="block text-sm">Type de Véhicule</label>
                        <select class="w-full p-2 border rounded-md text-sm bg-gray-50 outline-none">
                            <option>Tous</option>
                            <option>Moto 🏍️</option>
                            <option>Voiture 🚗</option>
                            <option>Camion 🚚</option>
                        </select>
                    </div>
                </div>
            </aside>

            <main class="w-full md:w-3/4">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-xl font-bold text-gray-800 italic">Commandes Disponibles 📦</h2>
                    <span class="bg-amber-100 text-amber-700 px-3 py-1 rounded-full text-xs font-bold">8 Nouvelles annonces</span>
                </div>

                <div class="space-y-4">
                    <div class="bg-white p-6 rounded-xl shadow-sm border-l-8 border-amber-500 flex flex-col md:flex-row justify-between items-start md:items-center hover:shadow-md transition">
                        <div class="flex-1">
                            <div class="flex items-center gap-2 mb-2 text-xs font-bold text-gray-400">
                                <span>Réf: #CMD-5541</span> • <span>Il y a 10 min</span>
                            </div>
                            <h3 class="text-lg font-bold text-gray-800 uppercase">Livraison Électroménager (Frigo)</h3>
                            <div class="flex gap-4 mt-3 text-sm text-gray-600">
                                <p><i class="fa-solid fa-location-dot text-red-500"></i> De: <b>Casablanca</b></p>
                                <p><i class="fa-solid fa-map-pin text-emerald-500"></i> À: <b>Rabat</b></p>
                            </div>
                            <div class="mt-2">
                                <span class="bg-gray-100 text-gray-600 px-2 py-1 rounded text-xs font-semibold">Fragile</span>
                                <span class="bg-gray-100 text-gray-600 px-2 py-1 rounded text-xs font-semibold">Express</span>
                            </div>
                        </div>

                        <div class="mt-4 md:mt-0 text-center md:text-right">
                            <p class="text-xs text-gray-400 mb-2">3 Offres déjà envoyées</p>
                            <button class="bg-slate-800 text-white px-6 py-3 rounded-lg font-bold hover:bg-amber-500 transition shadow-lg">
                                Faire une offre 🚀
                            </button>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-sm border-l-8 border-amber-500 flex flex-col md:flex-row justify-between items-start md:items-center">
                        <div class="flex-1">
                            <div class="flex items-center gap-2 mb-2 text-xs font-bold text-gray-400">
                                <span>Réf: #CMD-5520</span> • <span>Il y a 1 heure</span>
                            </div>
                            <h3 class="text-lg font-bold text-gray-800 uppercase">Documents Confidentiels</h3>
                            <div class="flex gap-4 mt-3 text-sm text-gray-600">
                                <p><i class="fa-solid fa-location-dot text-red-500"></i> De: <b>Marrakech</b></p>
                                <p><i class="fa-solid fa-map-pin text-emerald-500"></i> À: <b>Settat</b></p>
                            </div>
                        </div>
                        <div class="mt-4 md:mt-0">
                            <button class="bg-slate-800 text-white px-6 py-3 rounded-lg font-bold hover:bg-amber-500 transition">
                                Faire une offre 🚀
                            </button>
                        </div>
                    </div>
                </div>
            </main>

        </div>
    </div>

</body>
</html>