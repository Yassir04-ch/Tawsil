<?php
require_once 'src/Entity/Offre.php';
require_once 'src/Repository/OffreRepository.php';
session_start();

$commande_id = $_GET['id'];

$offresRep = new OffreRepository();
$offres = $offresRep->affichoffres($commande_id);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Offres - Client</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <style>
    body.modal-open {
      overflow: hidden;
    }

    .modal-animate {
      animation: slideIn 0.3s ease-out;
    }

    @keyframes slideIn {
      from {
        transform: translateY(20px);
        opacity: 0;
      }

      to {
        transform: translateY(0);
        opacity: 1;
      }
    }
  </style>
</head>

<body class="bg-slate-50 font-sans text-slate-900">

  <nav class="bg-white shadow-sm border-b border-slate-200 sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between h-16 items-center">
        <div class="flex items-center gap-3">
          <div class="bg-blue-600 p-2.5 rounded-xl text-white shadow-lg shadow-blue-100">
            <i class="fa-solid fa-tags text-lg"></i>
          </div>
          <h1 class="text-2xl font-black text-slate-800 tracking-tighter">LMSAKHER<span
              class="text-blue-600 italic">GO</span></h1>
        </div>
        <a href="profil.php"
          class="h-10 w-10 rounded-full bg-gradient-to-tr from-blue-600 to-indigo-600 flex items-center justify-center text-white font-bold shadow-md">ME</a>
      </div>
    </div>
  </nav>

  <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <h2 class="text-3xl font-black text-slate-800 mb-6">Toutes les offres disponibles</h2>

    <?php if (!empty($offres)): ?>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php foreach ($offres as $offre): ?>
          <div
            class="bg-white rounded-[2.5rem] border border-slate-200 shadow-sm p-6 flex flex-col justify-between gap-4 hover:shadow-lg transition">
            <div>
               <p class="text-sm text-slate-600 mt-1">
                <strong class="text-[10px] font-black uppercase tracking-wider text-slate-400 mr-1 italic">Name Livreur</strong>
                <span class="font-bold text-slate-900"><?= $offre['firstname']. " " . $offre['lastname']  ?></span>
              </p>
              <p class="text-sm text-slate-600 mt-1">
                <strong class="text-[10px] font-black uppercase tracking-wider text-slate-400 mr-1 italic">Durée :</strong>
                <span class="font-bold text-slate-900"><?= $offre['duree'] ?> min</span>
              </p>
              <p class="text-sm text-slate-600 mt-2"><strong class="text-[10px] font-black uppercase tracking-wider text-slate-400 mr-1 italic">Prix : </strong>: <span class="font-bold"><?= $offre['prix'] ?>
                  DH</span></p>
              <p class="text-sm text-slate-600"> <strong class="text-[10px] font-black uppercase tracking-wider text-slate-400 mr-1 italic">type_vehicule : </strong> <span
                  class="font-bold"><?= $offre['type_vehicule'] ?></span></p>
              <p class="text-sm text-slate-600"><strong class="text-[10px] font-black uppercase tracking-wider text-slate-400 mr-1 italic">options : </strong> <span
                  class="font-bold"><?= $offre['options'] ?></span></p>
              <p class="text-sm text-slate-600"><strong class="text-[10px] font-black uppercase tracking-wider text-slate-400 mr-1 italic">created_at : </strong><span
                  class="font-bold"><?= $offre['created_at'] ?></span></p>
              <p class="text-sm text-slate-600"> <strong class="text-[10px] font-black uppercase tracking-wider text-slate-400 mr-1 italic">statu : </strong><span
                  class="font-bold"><?= $offre['status_offre'] ?></span></p>
            </div>
            <?php if ($_SESSION['role'] == 'client'): ?>
              <div class="flex gap-3 mt-4">
                <form action="accepteoffre.php" method="POST" class="flex-1">
                  <input type="hidden" name="commande_id" value="<?= $commande_id ?>">
                  <input type="hidden" name="offre_id" value="<?= $offre['id'] ?>">
                  <button type="submit"
                    class="w-full bg-green-600 text-white py-3 rounded-xl font-black hover:bg-green-700 transition flex items-center justify-center">
                    <i class="fa-solid fa-check mr-2"></i> Accepter
                  </button>
                </form>
                <form action="reject_offer.php" method="POST" class="flex-1">
                  <input type="hidden" name="offre_id" value="<?= $offre['id'] ?>">
                  <button type="submit"
                    class="w-full bg-red-600 text-white py-3 rounded-xl font-black hover:bg-red-700 transition flex items-center justify-center">
                    <i class="fa-solid fa-xmark mr-2"></i> Refuser
                  </button>
                </form>
              </div>
            <?php endif; ?>
          </div>
        <?php endforeach; ?>
      </div>
    <?php else: ?>
      <p class="text-center text-slate-500 mt-20 text-lg">Aucune offre disponible pour le moment.</p>
    <?php endif; ?>
  </main>

</body>

</html>