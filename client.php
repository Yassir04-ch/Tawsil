
<?php session_start();
 ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LmsakherGO - Client Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .modal-animate { animation: slideIn 0.3s ease-out; }
        @keyframes slideIn { from { transform: translateY(20px); opacity: 0; } to { transform: translateY(0); opacity: 1; } }
        body.modal-open { overflow: hidden; }
    </style>
</head>
<body class="bg-slate-50 font-sans text-slate-900">

    <nav class="bg-white shadow-sm border-b border-slate-200 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex items-center gap-3">
                    <div class="bg-blue-600 p-2.5 rounded-xl text-white shadow-lg shadow-blue-100">
                        <i class="fa-solid fa- rocket text-lg"></i>
                    </div>
                    <h1 class="text-2xl font-black text-slate-800 tracking-tighter">LMSAKHER<span class="text-blue-600 italic">GO</span></h1>
                </div>
                
                <div class="flex items-center gap-4">
                    <button class="relative p-2 text-slate-400 hover:bg-slate-50 rounded-full transition" id="notif-btn">
                        <i class="fa-solid fa-bell text-xl"></i>
                        <span class="absolute top-1.5 right-1.5 bg-red-500 w-2 h-2 rounded-full border-2 border-white"></span>
                    </button>
                    <a href="profil.php"><div class="h-10 w-10 rounded-full bg-gradient-to-tr from-blue-600 to-indigo-600 flex items-center justify-center text-white font-bold shadow-md">
                        ME
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-10 gap-6">
            <div>
                <h2 class="text-3xl font-black text-slate-800 tracking-tight">Bonjour, <?php echo $_SESSION['firstname'] ?> 👋</h2>
                <p class="text-slate-500 mt-1">Voici l'état actuel de vos livraisons aujourd'hui.</p>
            </div>
            <button id="open-order-modal" class="w-full md:w-auto bg-blue-600 hover:bg-blue-700 text-white px-8 py-4 rounded-2xl font-bold flex items-center justify-center shadow-xl shadow-blue-200 transition-all hover:-translate-y-1 active:scale-95">
                <i class="fa-solid fa-plus-circle mr-3 text-lg"></i> Créer une expédition
            </button>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
            <div class="bg-white p-6 rounded-[2rem] border border-slate-100 shadow-sm group hover:border-blue-200 transition">
                <div class="flex justify-between items-start">
                    <div class="p-3 bg-blue-50 text-blue-600 rounded-2xl group-hover:bg-blue-600 group-hover:text-white transition">
                        <i class="fa-solid fa-bullhorn text-xl"></i>
                    </div>
                    <span class="text-green-500 text-xs font-bold">+2 New</span>
                </div>
                <h3 class="text-3xl font-black text-slate-800 mt-4 italic">03</h3>
                <p class="text-slate-400 text-xs font-bold uppercase tracking-widest mt-1">Offres Reçues</p>
            </div>
            </div>

        <div class="bg-white rounded-[2.5rem] border border-slate-200 shadow-sm overflow-hidden">
            <div class="p-8 border-b border-slate-100 flex flex-col md:flex-row justify-between items-start md:items-center gap-4 bg-slate-50/50">
                <h3 class="font-black text-slate-800 uppercase tracking-tighter text-lg italic">Suivi des commandes</h3>
                <div class="flex gap-3 w-full md:w-auto">
                    <div class="relative flex-1 md:w-64">
                        <i class="fa-solid fa-search absolute left-4 top-1/2 -translate-y-1/2 text-slate-400"></i>
                        <input type="text" placeholder="Rechercher un colis..." class="w-full pl-10 pr-4 py-2.5 bg-white border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-blue-500 outline-none">
                    </div>
                </div>
            </div>

            <div class="divide-y divide-slate-100">
                <div class="p-8 hover:bg-slate-50/80 transition-all group">
                    <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center gap-8">
                        <div class="flex gap-6 items-start">
                            <div class="hidden sm:flex h-14 w-14 bg-blue-50 rounded-2xl items-center justify-center text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition">
                                <i class="fa-solid fa-box-open text-2xl"></i>
                            </div>
                            <div class="space-y-3">
                                <div class="flex items-center gap-3 flex-wrap">
                                    <span class="text-xs font-mono font-black text-slate-300">#LGO-9920</span>
                                    <span class="bg-amber-100 text-amber-700 text-[10px] font-black px-3 py-1 rounded-lg uppercase tracking-widest border border-amber-200">En attente d'offres</span>
                                </div>
                                <h4 class="text-xl font-bold text-slate-800">Canapé d'angle (Luxury Edition)</h4>
                                <div class="flex flex-col sm:flex-row sm:items-center gap-4 text-sm text-slate-500 font-medium">
                                    <span class="flex items-center gap-2 bg-slate-100 px-3 py-1 rounded-full"><i class="fa-solid fa-location-dot text-blue-500"></i> Tanger, Ville</span>
                                    <i class="fa-solid fa-arrow-right text-slate-300 hidden sm:block"></i>
                                    <span class="flex items-center gap-2 bg-slate-100 px-3 py-1 rounded-full"><i class="fa-solid fa-flag-checkered text-red-500"></i> Agadir, Centre</span>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-wrap gap-3 w-full lg:w-auto">
                            <button class="view-offers-btn flex-1 lg:flex-none bg-blue-600 text-white px-6 py-3 rounded-xl font-bold text-sm shadow-lg shadow-blue-100 hover:bg-slate-900 transition flex items-center justify-center">
                                <i class="fa-solid fa-tags mr-2"></i> Voir les offres (3)
                            </button>
                            <button title="Modifier" class="p-3 text-slate-400 hover:text-blue-600 bg-white border border-slate-200 rounded-xl transition hover:shadow-md">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </button>
                            <button title="Annuler" class="p-3 text-slate-400 hover:text-red-500 bg-white border border-slate-200 rounded-xl transition hover:shadow-md">
                                <i class="fa-solid fa-trash-can"></i>
                            </button>
                        </div>
                    </div>
                </div>
                </div>
        </div>
    </main>

    <div id="modal-backdrop" class="fixed inset-0 bg-slate-900/40 backdrop-blur-sm z-[60] hidden flex items-center justify-center p-4">
        <div id="modal-box" class="bg-white w-full max-w-xl rounded-[2.5rem] shadow-2xl overflow-hidden modal-animate">
            <div class="p-8 border-b border-slate-100 flex justify-between items-center">
                <h2 class="text-2xl font-black italic tracking-tighter">Détails de l'expédition</h2>
                <button id="close-modal" class="h-10 w-10 bg-slate-100 rounded-full flex items-center justify-center text-slate-500 hover:bg-red-50 hover:text-red-500 transition">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            
            <form id="order-form" class="p-8 space-y-6">
                <div class="grid grid-cols-1 gap-6">
                    <div>
                        <label class="block text-xs font-black text-slate-400 uppercase tracking-widest mb-2 ml-1">Quoi expédier ?</label>
                        <div class="relative">
                            <i class="fa-solid fa-box absolute left-4 top-1/2 -translate-y-1/2 text-blue-500"></i>
                            <input type="text" name="colis" required class="w-full pl-12 pr-4 py-4 bg-slate-50 border-2 border-transparent rounded-2xl focus:border-blue-500 focus:bg-white outline-none transition-all font-bold" placeholder="Ex: Ordinateur, Meuble...">
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-black text-slate-400 uppercase tracking-widest mb-2 ml-1">Ville de départ</label>
                            <input type="text" name="depart" required class="w-full px-5 py-4 bg-slate-50 border-2 border-transparent rounded-2xl focus:border-blue-500 focus:bg-white outline-none transition-all font-bold" placeholder="Casablanca">
                        </div>
                        <div>
                            <label class="block text-xs font-black text-slate-400 uppercase tracking-widest mb-2 ml-1">Ville d'arrivée</label>
                            <input type="text" name="arrivee" required class="w-full px-5 py-4 bg-slate-50 border-2 border-transparent rounded-2xl focus:border-blue-500 focus:bg-white outline-none transition-all font-bold" placeholder="Marrakech">
                        </div>
                    </div>
                </div>

                <button type="submit" class="w-full bg-slate-900 text-white py-5 rounded-2xl font-black shadow-xl shadow-slate-200 hover:bg-blue-600 transition-all active:scale-95">
                    LANCER L'APPEL D'OFFRE
                </button>
            </form>
        </div>
    </div>

    <div class="lg:hidden fixed bottom-6 left-6 right-6 bg-slate-900 text-white p-5 rounded-[2rem] flex justify-around shadow-2xl z-50">
        <button class="text-blue-500"><i class="fa-solid fa-house-chimney text-xl"></i></button>
        <button class="text-slate-500"><i class="fa-solid fa-clipboard-list text-xl"></i></button>
        <button class="text-slate-500"><i class="fa-solid fa-message text-xl"></i></button>
        <button class="text-slate-500"><i class="fa-solid fa-user-circle text-xl"></i></button>
    </div>

<script>
const openModalBtn = document.getElementById('open-order-modal');
const modalBackdrop = document.getElementById('modal-backdrop');
const closeModalBtn = document.getElementById('close-modal');

openModalBtn.addEventListener('click', () => {
    modalBackdrop.classList.remove('hidden');
    document.body.classList.add('modal-open');  
});

closeModalBtn.addEventListener('click', () => {
    modalBackdrop.classList.add('hidden');
    document.body.classList.remove('modal-open');
});

modalBackdrop.addEventListener('click', (e) => {
    if (e.target === modalBackdrop) {
        modalBackdrop.classList.add('hidden');
        document.body.classList.remove('modal-open');
    }
});
</script>

</body>
</html>