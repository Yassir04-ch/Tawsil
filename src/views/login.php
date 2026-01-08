<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LmsakherGO - Connexion</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body class="bg-slate-50 flex items-center justify-center min-h-screen p-4">

    <div class="max-w-md w-full bg-white rounded-[2.5rem] shadow-2xl p-10 border border-slate-100">
        <div class="text-center mb-10">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-blue-600 rounded-2xl mb-4 rotate-3 shadow-lg shadow-blue-200">
                <i data-lucide="truck" class="text-white w-8 h-8 -rotate-3"></i>
            </div>
            <h1 class="text-3xl font-black text-slate-900 tracking-tighter italic">Lmsakher<span class="text-blue-600">GO</span></h1>
            <p class="text-slate-400 font-medium mt-2">Votre coursier en un clic.</p>
        </div>

        <form action="../Controller/loginhh.php" method="POST" class="space-y-5">
            <div>
                <label class="block text-xs font-bold uppercase tracking-widest text-slate-500 mb-2 ml-1">Email</label>
                <input name="email" type="email" class="w-full px-5 py-4 bg-slate-50 border-none rounded-2xl focus:ring-2 focus:ring-orange-500 transition outline-none" placeholder="nom@exemple.com">
            </div>
            <div>
                <label class="block text-xs font-bold uppercase tracking-widest text-slate-500 mb-2 ml-1">Mot de passe</label>
                <input type="password" class="w-full px-5 py-4 bg-slate-50 border-none rounded-2xl focus:ring-2 focus:ring-orange-500 transition outline-none"
                name="password" placeholder="••••••••">
            </div>
            <button class="w-full bg-slate-900 hover:bg-blue-600 text-white font-bold py-5 rounded-2xl transition-all duration-300 transform hover:scale-[1.02] shadow-xl"
            name="submit">
                Se connecter
            </button>
        </form>

        <div class="mt-8 text-center">
            <p class="text-sm text-slate-500">Pas encore de compte ? <a href="register.php" class="text-blue-600 font-bold underline decoration-2 underline-offset-4">S'inscrire</a></p>
        </div>
    </div>

    <script>lucide.createIcons();</script>
</body>
</html>