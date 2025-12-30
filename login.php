<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>Connexion - SHIPUP</title>
</head>
<body class="bg-slate-50 min-h-screen flex flex-col items-center justify-center py-12 px-6">

    <div class="max-w-md w-full bg-white rounded-3xl shadow-xl border border-slate-100 overflow-hidden mt-8">
        <div class="p-8">
            <div class="text-center mb-10">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-blue-600 text-white rounded-2xl mb-4 shadow-lg shadow-blue-200">
                    <i class="fa-solid fa-fingerprint text-3xl"></i>
                </div>
                <h1 class="text-3xl font-black text-slate-900 tracking-tight">Bon retour !</h1>
                <p class="text-slate-500 mt-2">Heureux de vous revoir sur SHIPUP</p>
            </div>

            <form action="process_login.php" method="POST" class="space-y-6">
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Votre Email</label>
                    <input type="email" name="email" required placeholder="nom@exemple.com" 
                        class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-500 outline-none transition">
                </div>

                <div>
                    <div class="flex justify-between mb-2">
                        <label class="text-sm font-bold text-slate-700">Mot de passe</label>
                        <a href="#" class="text-xs font-bold text-blue-600">Oublié ?</a>
                    </div>
                    <input type="password" name="password" required placeholder="••••••••" 
                        class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-500 outline-none transition">
                </div>

                <button type="submit" class="w-full bg-slate-900 hover:bg-black text-white font-black py-4 rounded-xl shadow-lg transition-all hover:-translate-y-1">
                    SE CONNECTER
                </button>
            </form>

            <p class="text-center mt-10 text-slate-500 text-sm">
                Pas encore de compte ? <a href="register.php" class="text-blue-600 font-bold hover:underline">Inscrivez-vous</a>
            </p>
        </div>
    </div>

</body>
</html>