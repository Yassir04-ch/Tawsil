<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LmsakherGO - Espace Livreur</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-slate-50 text-slate-900 font-sans pb-24">

    <header class="bg-white/80 backdrop-blur-md sticky top-0 z-50 border-b border-slate-100 p-5">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <div class="flex items-center gap-3">
                <div class="h-10 w-10 bg-blue-600 rounded-xl flex items-center justify-center text-white shadow-lg shadow-blue-200 rotate-3">
                    <i class="fa-solid fa-motorcycle -rotate-3"></i>
                </div>
                <div>
                    <h2 class="text-lg font-black tracking-tighter italic">Lmsakhar<span class="text-blue-600">GO</span></h2>
                    <p class="text-[10px] text-green-500 font-bold uppercase"><i class="fa-solid fa-circle text-[8px] mr-1"></i> En ligne</p>
                </div>
            </div>
            <div class="flex items-center gap-4 text-slate-400">
                <i class="fa-solid fa-wallet text-xl text-blue-600/50"></i>
                <span class="text-sm font-bold text-slate-900">450 DH</span>
            </div>
        </div>
    </header>

    <main class="max-w-4xl mx-auto p-4 space-y-8">
        <div class="grid grid-cols-2 gap-4">
            <div class="bg-white p-5 rounded-[2rem] border border-slate-100 shadow-sm">
                <p class="text-slate-400 text-[10px] font-bold uppercase tracking-widest">Aujourd'hui</p>
                <h3 class="text-2xl font-black mt-1 text-slate-800">05 <span class="text-xs text-slate-400 font-normal italic">Livraisons</span></h3>
            </div>
            <div class="bg-white p-5 rounded-[2rem] border border-slate-100 shadow-sm">
                <p class="text-slate-400 text-[10px] font-bold uppercase tracking-widest">Score</p>
                <h3 class="text-2xl font-black mt-1 text-blue-600">4.9 <i class="fa-solid fa-star text-xs"></i></h3>
            </div>
        </div>

        <section class="space-y-4">
            <h3 class="text-sm font-black text-slate-400 uppercase tracking-[0.2em] ml-2">Missions Disponibles</h3>
            
            <div class="bg-white p-6 rounded-[2.5rem] border border-slate-100 shadow-sm space-y-6 hover:border-blue-500/50 transition-all group">
                <div class="flex justify-between items-start">
                    <div class="space-y-1">
                        <span class="bg-blue-50 text-blue-600 text-[10px] font-black px-3 py-1 rounded-full border border-blue-100">NOUVEAU</span>
                        <h4 class="text-xl font-bold pt-2 text-slate-800">Colis Fragile (Électronique)</h4>
                    </div>
                    <div class="text-right">
                        <p class="text-xs text-slate-400">Budget estimé</p>
                        <p class="text-xl font-black text-blue-600 italic">40 - 60 DH</p>
                    </div>
                </div>

                <div class="relative flex gap-4 pl-2">
                    <div class="flex flex-col items-center py-1">
                        <div class="h-3 w-3 rounded-full bg-blue-600 shadow-[0_0_10px_rgba(37,99,235,0.3)]"></div>
                        <div class="w-[2px] h-10 bg-slate-100 my-1"></div>
                        <div class="h-3 w-3 rounded-full border-2 border-blue-600"></div>
                    </div>
                    <div class="space-y-4">
                        <p class="text-sm font-semibold text-slate-700">Départ: <span class="text-slate-400 ml-2 font-medium italic text-xs">Derb Ghallef, Casa</span></p>
                        <p class="text-sm font-semibold text-slate-700">Arrivée: <span class="text-slate-400 ml-2 font-medium italic text-xs">Hay Hassani, Casa</span></p>
                    </div>
                </div>

                <button class="btn-propose w-full bg-slate-900 text-white py-5 rounded-2xl font-black text-sm hover:bg-blue-600 transition-all active:scale-95 shadow-xl shadow-slate-200">
                    PROPOSER UN PRIX
                </button>
            </div>
        </section>
    </main>

    <nav class="fixed bottom-0 left-0 right-0 bg-white border-t border-slate-100 p-4 flex justify-around items-center z-50 shadow-[0_-5px_20px_rgba(0,0,0,0.05)]">
        <button class="text-blue-600 flex flex-col items-center gap-1"><i class="fa-solid fa-map-location-dot text-xl"></i><span class="text-[9px] font-bold">Missions</span></button>
        <button class="text-slate-300 flex flex-col items-center gap-1 hover:text-blue-400 transition-colors"><i class="fa-solid fa-box text-xl"></i><span class="text-[9px] font-bold">Mes Colis</span></button>
        <button class="text-slate-300 flex flex-col items-center gap-1 hover:text-blue-400 transition-colors"><i class="fa-solid fa-chart-pie text-xl"></i><span class="text-[9px] font-bold">Stats</span></button>
        <button class="text-slate-300 flex flex-col items-center gap-1 hover:text-blue-400 transition-colors"><i class="fa-solid fa-user-circle text-xl"></i><span class="text-[9px] font-bold">Profil</span></button>
    </nav>

    <div id="modal-offer" class="fixed inset-0 bg-slate-900/40 backdrop-blur-sm z-[60] hidden flex items-center justify-center p-6">
        <div class="bg-white w-full max-w-sm rounded-[2.5rem] p-8 border border-slate-100 shadow-2xl space-y-6">
            <h3 class="text-xl font-black italic text-slate-900">Votre Offre</h3>
            <div>
                <label class="text-[10px] font-bold text-slate-400 uppercase block mb-2 ml-1">Prix proposé (DH)</label>
                <input type="number" id="input-price" class="w-full bg-slate-50 border-none rounded-2xl p-5 text-2xl font-black focus:ring-2 focus:ring-blue-600 outline-none text-center text-blue-600" placeholder="0.00">
            </div>
            <div class="flex gap-3">
                <button id="close-offer" class="flex-1 bg-slate-100 py-4 rounded-2xl font-bold text-slate-600 hover:bg-slate-200 transition-colors">Annuler</button>
                <button id="send-offer" class="flex-[2] bg-blue-600 py-4 rounded-2xl font-black text-white shadow-lg shadow-blue-200 hover:bg-blue-700 transition-colors">ENVOYER</button>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const offerModal = document.getElementById('modal-offer');
            const openOfferBtns = document.querySelectorAll('.btn-propose');
            const sendOfferBtn = document.getElementById('send-offer');
            const closeOfferBtn = document.getElementById('close-offer');

            openOfferBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    offerModal.classList.remove('hidden');
                });
            });

            closeOfferBtn?.addEventListener('click', () => {
                offerModal.classList.add('hidden');
            });

            sendOfferBtn?.addEventListener('click', () => {
                const price = document.getElementById('input-price').value;
                if(!price) return alert("Entrez un prix");
                console.log(`Offre envoyée: ${price} DH`);
                offerModal.classList.add('hidden');
            });
        });
    </script>
</body>
</html>