<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>Inscription - LmsakherGO</title>
</head>
<body class="bg-slate-50 min-h-screen">
    <div class="flex flex-col items-center justify-center pt-20 pb-12 px-6">
        <div class="max-w-md w-full bg-white rounded-3xl shadow-xl border border-slate-100 overflow-hidden">
            <div class="p-8">
                <div class="text-center mb-8">
                 <h1 class="text-3xl font-black text-slate-900 tracking-tighter italic">Lmsakher<span class="text-blue-600">GO</span></h1>
                    <p class="text-slate-500 mt-2 font-medium">Rejoignez la communauté de livraison</p>
            <?php if (isset(($_SESSION['error']))):?>
             <p class='text-red-600 text-center font-medium mt-4'><?=$_SESSION['error'];?></p>
          <?php endif;?>
                </div>
  
<form action="../Controller/registerhh.php" method="POST" class="space-y-5">

    <!-- Prénom et Nom -->
    <div class="grid grid-cols-2 gap-4">
        <div>
            <label class="block text-sm font-bold text-slate-700 mb-2">Prénom</label>
            <input type="text" name="firstname" required placeholder="Ex: Yassine"
                class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-500 outline-none transition">
        </div>
        <div>
            <label class="block text-sm font-bold text-slate-700 mb-2">Nom</label>
            <input type="text" name="lastname" required placeholder="Ex: Elamri"
                class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-500 outline-none transition">
        </div>
    </div>

    <!-- Email -->
    <div>
        <label class="block text-sm font-bold text-slate-700 mb-2">Email</label>
        <input type="email" name="email" required placeholder="nom@exemple.com"
            class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-500 outline-none transition">
    </div>

    <!-- Rôle -->
    <div>
        <label class="block text-sm font-bold text-slate-700 mb-2">Vous êtes ?</label>
        <div class="grid grid-cols-2 gap-4">
            <label class="cursor-pointer group">
                <input type="radio" name="role" value="client" class="peer hidden" checked>
                <div class="text-center p-4 border-2 border-slate-100 rounded-2xl peer-checked:border-blue-600 peer-checked:bg-blue-50 group-hover:bg-slate-50 transition">
                    <i class="fa-solid fa-box text-2xl mb-2 block text-slate-400 peer-checked:text-blue-600"></i>
                    <span class="text-xs font-black uppercase">Client</span>
                </div>
            </label>
            <label class="cursor-pointer group">
                <input type="radio" name="role" value="livreur" class="peer hidden">
                <div class="text-center p-4 border-2 border-slate-100 rounded-2xl peer-checked:border-amber-500 peer-checked:bg-amber-50 group-hover:bg-slate-50 transition">
                    <i class="fa-solid fa-truck text-2xl mb-2 block text-slate-400 peer-checked:text-amber-500"></i>
                    <span class="text-xs font-black uppercase">Livreur</span>
                </div>
            </label>
        </div>
    </div>

    <!-- Mot de passe -->
    <div>
        <label class="block text-sm font-bold text-slate-700 mb-2">Mot de passe</label>
        <input type="password" name="password" required placeholder="••••••••"
            class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-500 outline-none transition">
    </div>

    <button type="submit" name="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-black py-4 rounded-xl shadow-lg shadow-blue-100 transition-all hover:-translate-y-1 mt-4">
        S'INSCRIRE MAINTENANT
    </button>
</form>


                <p class="text-center mt-8 text-slate-500 text-sm font-medium">
                    Déjà inscrit ? <a href="login.php" class="text-blue-600 font-bold hover:underline">Se connecter</a>
                </p>
            </div>
        </div>
        
        <a href="../../index.php" class="mt-8 text-slate-400 hover:text-slate-600 text-sm font-bold transition">
            <i class="fa-solid fa-arrow-left mr-2"></i> Retour à l'accueil
        </a>

    </div>

</body>
</html>