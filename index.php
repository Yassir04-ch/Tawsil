<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>SHIPUP - Plateforme de Livraison Collaborative</title>
</head>
<body class="bg-white font-sans text-slate-900">

    <nav class="fixed w-full z-50 bg-white/80 backdrop-blur-md border-b border-slate-100">
        <div class="max-w-7xl mx-auto px-6 h-20 flex justify-between items-center">
            <div class="flex items-center gap-2">
                <div class="bg-blue-600 p-2 rounded-lg text-white">
                    <i class="fa-solid fa-paper-plane"></i>
                </div>
                           <h1 class="text-3xl font-black text-slate-900 tracking-tighter italic">Lmsakher<span class="text-blue-600">GO</span></h1>

            </div>
            
            <div class="hidden md:flex items-center gap-8 font-semibold text-slate-600">
                <a href="#comment-ca-marche" class="hover:text-blue-600 transition">Comment ça marche ?</a>
                <a href="#" class="hover:text-blue-600 transition">Tarifs</a>
                <a href="login.php" class="text-slate-900 hover:text-blue-600 transition">Connexion</a>
                <a href="register.php" class="bg-blue-600 text-white px-6 py-2.5 rounded-full hover:bg-blue-700 transition shadow-lg shadow-blue-200">S'inscrire</a>
            </div>
        </div>
    </nav>

    <section class="pt-32 pb-20 px-6">
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <span class="bg-blue-50 text-blue-600 px-4 py-1.5 rounded-full text-sm font-bold uppercase tracking-widest">🚀 Livraison 2.0</span>
                <h2 class="text-5xl lg:text-7xl font-black text-slate-900 leading-tight mt-6">
                    Expédiez tout, <br> <span class="text-blue-600">partout, par tous.</span>
                </h2>
                <p class="text-xl text-slate-500 mt-6 leading-relaxed max-w-lg">
                    Mettez en relation vos colis avec des livreurs certifiés. Simple, rapide et au meilleur prix grâce au système d'enchères.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 mt-10">
                    <a href="register.php" class="bg-blue-600 text-white px-8 py-4 rounded-2xl font-bold text-lg hover:bg-blue-700 transition text-center">
                        Expédier un colis
                    </a>
                    <a href="register.php" class="bg-slate-900 text-white px-8 py-4 rounded-2xl font-bold text-lg hover:bg-slate-800 transition text-center">
                        Devenir Livreur
                    </a>
                </div>
            </div>
            <div class="relative">
                <div class="absolute -z-10 top-10 right-10 w-72 h-72 bg-blue-200 rounded-full blur-3xl opacity-50"></div>
                <img src="https://img.freepik.com/free-vector/delivery-service-with-mask-concept_23-2148505104.jpg" alt="Livraison" class="rounded-3xl shadow-2xl">
            </div>
        </div>
    </section>

    <section id="comment-ca-marche" class="py-20 bg-slate-50">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h3 class="text-3xl font-black text-slate-900">Une plateforme, trois profils</h3>
            <p class="text-slate-500 mt-2">Tout est conçu pour faciliter le flux de livraison.</p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-16">
                <div class="bg-white p-8 rounded-3xl border border-slate-200 hover:shadow-xl transition">
                    <div class="w-16 h-16 bg-blue-100 text-blue-600 rounded-2xl flex items-center justify-center text-2xl mx-auto mb-6">
                        <i class="fa-solid fa-box"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-4">Côté Client</h4>
                    <p class="text-slate-500 text-sm leading-relaxed">
                        Créez votre commande, recevez des offres de prix de différents livreurs et choisissez la meilleure option.
                    </p>
                </div>

                <div class="bg-white p-8 rounded-3xl border border-slate-200 hover:shadow-xl transition">
                    <div class="w-16 h-16 bg-amber-100 text-amber-600 rounded-2xl flex items-center justify-center text-2xl mx-auto mb-6">
                        <i class="fa-solid fa-truck"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-4">Côté Livreur</h4>
                    <p class="text-slate-500 text-sm leading-relaxed">
                        Consultez les commandes disponibles, proposez votre prix et votre véhicule, et rentabilisez vos trajets.
                    </p>
                </div>

                <div class="bg-white p-8 rounded-3xl border border-slate-200 hover:shadow-xl transition">
                    <div class="w-16 h-16 bg-red-100 text-red-600 rounded-2xl flex items-center justify-center text-2xl mx-auto mb-6">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-4">Administration</h4>
                    <p class="text-slate-500 text-sm leading-relaxed">
                        Une supervision totale des flux, des utilisateurs et des statistiques pour garantir la sécurité.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <footer class="py-10 border-t border-slate-100 text-center">
        <p class="text-slate-400 text-sm">© 2025 SHIPUP Digital Solutions. Tous droits réservés.</p>
    </footer>

    <a href="admin.php">admin</a>
    <a href="client.php">client</a>
    <a href="livreur.php">livreur</a>
</body>
</html>