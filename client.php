<?php
require_once 'src/Entity/Commande.php';
require_once 'src/Repository/CommandeRepository.php';
require_once 'src/Service/CommandeService.php';
session_start();

if (!isset($_SESSION['id'])) {
    header('location:index.php');
    exit;
}

$commanderep = new CommandeRepository();
$commandes = $commanderep->affichCommandes($_SESSION['id']);

$statusSettings = [
    'En attente' => ['class' => 'bg-amber-100 text-amber-700 border-amber-200', 'label' => 'En attente'],
    'EN_cours'   => ['class' => 'bg-blue-100 text-blue-700 border-blue-200',   'label' => 'En cours'],
    'Commande livrée'  => ['class' => 'bg-emerald-100 text-emerald-700 border-emerald-200', 'label' => 'Livrée'],
];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LmsakherGO - Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .modal-animate { animation: slideIn 0.3s ease-out; }
        @keyframes slideIn { from { transform: translateY(20px); opacity: 0; } to { transform: translateY(0); opacity: 1; } }
        body.modal-open { overflow: hidden; }
        .route-line::before {
            content: '';
            position: absolute;
            left: 11px;
            top: 24px;
            bottom: 24px;
            width: 2px;
            background: #e2e8f0;
            z-index: 0;
        }
    </style>
</head>
<body class="bg-slate-50 font-sans text-slate-900">

<nav class="bg-white shadow-sm border-b border-slate-200 sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            <div class="flex items-center gap-3">
                <div class="bg-blue-600 p-2.5 rounded-xl text-white shadow-lg shadow-blue-100">
                    <i class="fa-solid fa-rocket text-lg"></i>
                </div>
                <h1 class="text-2xl font-black text-slate-800 tracking-tighter">LMSAKHER<span class="text-blue-600 italic">GO</span></h1>
            </div>
            <div class="flex items-center gap-4">
                <a href="profil.php">
                    <div class="h-10 w-10 rounded-full bg-gradient-to-tr from-blue-600 to-indigo-600 flex items-center justify-center text-white font-bold shadow-md uppercase">
                        <?= substr($_SESSION['firstname'], 0, 2) ?>
                    </div>
                </a>
            </div>
        </div>
    </div>
</nav>

<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-10 gap-6">
        <div>
            <h2 class="text-3xl font-black text-slate-800 tracking-tight">Bonjour, <?= $_SESSION['firstname'] ?> 👋</h2>
            <p class="text-slate-500 mt-1">Gérez vos expéditions et suivez vos colis en temps réel.</p>
        </div>
        <button id="open-order-modal" class="w-full md:w-auto bg-blue-600 hover:bg-slate-900 text-white px-8 py-4 rounded-2xl font-black flex items-center justify-center shadow-xl shadow-blue-100 transition-all hover:-translate-y-1 active:scale-95 uppercase tracking-tighter">
            <i class="fa-solid fa-plus-circle mr-3 text-lg"></i> Créer une expédition
        </button>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8">
        <div class="bg-white p-6 rounded-3xl border border-slate-200 shadow-sm flex items-center gap-4">
            <div class="h-12 w-12 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center text-xl"><i class="fa-solid fa-box"></i></div>
            <div><p class="text-xs font-black text-slate-400 uppercase tracking-widest">Total Commandes</p><p class="text-xl font-black"><?= count($commandes) ?></p></div>
        </div>
    </div>

    <div class="flex items-center justify-between mb-6 px-2">
        <h3 class="font-black text-slate-800 uppercase tracking-tighter text-lg italic">Suivi des commandes</h3>
    </div>

    <div class="space-y-6">
        <?php if(!empty($commandes)): ?>
            <?php foreach($commandes as $commande): 
 
              $statu = $statusSettings[$commande['status']] ;
            ?>
                <div class="bg-white rounded-[2rem] border border-slate-200 shadow-sm hover:shadow-md transition-all group overflow-hidden">
                    <div class="p-6 md:p-8">
                        <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center gap-8">
                            
                            <div class="flex-1 w-full">
                                <div class="flex items-center gap-3 mb-4 flex-wrap">
                                    <span class="<?= $statu['class'] ?> text-[10px] font-black px-3 py-1 rounded-full uppercase tracking-widest border">
                                        <?= $statu['label'] ?>
                                    </span>
                                </div> 
                                
                                <h4 class="text-2xl font-black text-slate-800 mb-6 group-hover:text-blue-600 transition-colors">
                                    <?= $commande['description'] ?>
                                </h4>

                                <div class="relative space-y-5 route-line">
                                    <div class="flex items-start gap-4 relative z-10">
                                        <div class="h-6 w-6 rounded-full bg-white border-4 border-blue-500 flex-shrink-0"></div>
                                        <div class="flex flex-col">
                                            <span class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Lieu de retrait</span>
                                            <span class="text-sm font-bold text-slate-700 italic"><?= $commande['adresse'] ?></span>
                                        </div>
                                    </div>
                                    <div class="flex items-start gap-4 relative z-10">
                                        <div class="h-6 w-6 rounded-full bg-white border-4 border-red-500 flex-shrink-0"></div>
                                        <div class="flex flex-col">
                                            <span class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Destination</span>
                                            <span class="text-sm font-bold text-slate-700 italic"><?= $commande['address_delivery'] ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex flex-wrap lg:flex-col gap-3 w-full lg:w-auto border-t lg:border-t-0 pt-6 lg:pt-0 border-slate-100">
                                <?php if($commande['status'] === 'En attente'): ?>
                                    <a href="ofrecommand.php?id=<?= $commande['id']?>" class="flex-1 lg:w-48">
                                        <button class="w-full bg-blue-600 text-white px-6 py-4 rounded-2xl font-black text-xs shadow-lg shadow-blue-100 hover:bg-slate-900 transition flex items-center justify-center gap-2">
                                            <i class="fa-solid fa-tags"></i> VOIR LES OFFRES
                                        </button>
                                    </a>
                                    <div class="flex gap-2 w-full">
                                        <a href="modifiercomm.php?id=<?=$commande['id']?>" class="flex-1">
                                            <button title="Modifier" class="w-full p-4 text-slate-400 hover:text-blue-600 bg-slate-50 border border-slate-200 rounded-2xl transition hover:bg-white hover:shadow-md">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </button>
                                        </a>
                                        <a href="deletecomm.php?id=<?=$commande['id']?>" class="flex-1">
                                            <button title="Annuler" class="w-full p-4 text-slate-400 hover:text-red-500 bg-slate-50 border border-slate-200 rounded-2xl transition hover:bg-white hover:shadow-md">
                                                <i class="fa-solid fa-trash-can"></i>
                                            </button>
                                        </a>
                                    </div>
                                <?php endif ;?>

                                <?php if($commande['status'] === 'EN_cours'): ?>
                                    <div class="lg:w-48 text-center p-4 bg-slate-50 rounded-2xl border border-slate-100 mb-2">
                                        <p class="text-xs font-black text-slate-400 uppercase tracking-widest">Livraison en cours</p>
                                    </div>
                                    <a href="validercommande.php?id=<?= $commande['id'] ?>" class="flex-1 lg:w-48">
                                        <button class="w-full bg-emerald-500 hover:bg-emerald-600 text-white px-6 py-4 rounded-2xl font-black text-xs shadow-xl shadow-emerald-100 transition-all hover:-translate-y-1 flex items-center justify-center gap-2 uppercase tracking-tighter">
                                            <i class="fa-solid fa-check-circle text-lg"></i>
                                            Valider la réception
                                        </button>
                                    </a>
                                <?php endif ;?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="bg-white rounded-[2.5rem] p-16 text-center border-2 border-dashed border-slate-200">
                <div class="h-20 w-20 bg-slate-50 text-slate-300 rounded-full flex items-center justify-center mx-auto mb-4 text-4xl">
                    <i class="fa-solid fa-box-open"></i>
                </div>
                <h4 class="text-xl font-bold text-slate-800">Aucune commande</h4>
                <p class="text-slate-500">Vous n'avez pas encore créé d'expédition aujourd'hui.</p>
            </div>
        <?php endif; ?>
    </div>
</main>

<div id="modal-backdrop" class="fixed inset-0 bg-slate-900/60 backdrop-blur-md z-[60] hidden flex items-center justify-center p-4">
    <div id="modal-box" class="bg-white w-full max-w-xl rounded-[2.5rem] shadow-2xl overflow-hidden modal-animate">
        <div class="p-8 border-b border-slate-100 flex justify-between items-center bg-slate-50/50">
            <div>
                <h2 class="text-2xl font-black italic tracking-tighter uppercase">Nouvelle Expédition</h2>
                <p class="text-xs font-bold text-slate-400 tracking-widest uppercase">Remplissez les détails</p>
            </div>
            <button id="close-modal" class="h-10 w-10 bg-white rounded-full flex items-center justify-center text-slate-500 hover:text-red-500 shadow-sm transition">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>
        <form method="POST" action="addcommande.php" class="p-8 space-y-6">
            <div class="space-y-5">
                <div>
                    <label class="block text-xs font-black text-slate-400 uppercase tracking-widest mb-2 ml-1">Quoi expédier ?</label>
                    <input type="text" name="description" placeholder="Ex: Panier de courses" required class="w-full px-6 py-4 bg-slate-50 border-2 border-transparent rounded-2xl font-bold outline-none focus:border-blue-500 focus:bg-white transition-all shadow-inner">
                </div>
                <div>
                    <label class="block text-xs font-black text-slate-400 uppercase tracking-widest mb-2 ml-1">Adresse de retrait</label>
                    <input type="text" name="adresse" placeholder="D'où part le colis ?" required class="w-full px-6 py-4 bg-slate-50 border-2 border-transparent rounded-2xl font-bold outline-none focus:border-blue-500 focus:bg-white transition-all shadow-inner">
                </div>
                <div>
                    <label class="block text-xs font-black text-slate-400 uppercase tracking-widest mb-2 ml-1">Adresse de livraison</label>
                    <input type="text" name="address_delivery" placeholder="Où va le colis ?" required class="w-full px-6 py-4 bg-slate-50 border-2 border-transparent rounded-2xl font-bold outline-none focus:border-red-500 focus:bg-white transition-all shadow-inner">
                </div>
            </div>
            <button name="submit" type="submit" class="w-full bg-slate-900 text-white py-5 rounded-2xl font-black hover:bg-blue-600 shadow-xl transition-all hover:-translate-y-1 uppercase tracking-tighter">LANCER L'APPEL D'OFFRE</button>
        </form>
    </div>
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