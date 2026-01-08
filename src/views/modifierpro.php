<?php
session_start();
if (!isset($_SESSION['role'])) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier Profil</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-slate-100 min-h-screen flex items-center justify-center">

    <div class="w-full max-w-3xl bg-white rounded-3xl shadow-xl overflow-hidden">
        
        <!-- Header -->
        <div class="bg-gradient-to-r from-blue-600 to-indigo-600 p-8 text-white">
            <h1 class="text-3xl font-black tracking-tight">
                <i class="fa-solid fa-user-pen mr-2"></i>
                Modifier le profil
            </h1>
            <p class="text-blue-100 mt-2">Mettez à jour vos informations personnelles</p>
        </div>

        <!-- Form -->
        <form action="../Controller/update-profile.php" method="POST" class="p-10 space-y-6">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Firstname -->
                <div>
                    <label class="text-xs font-black text-slate-400 uppercase tracking-widest">
                        Prénom
                    </label>
                    <input 
                        type="text" 
                        name="firstname"
                        value="<?php echo $_SESSION['firstname']; ?>"
                        class="mt-2 w-full px-5 py-4 bg-slate-50 border-2 border-transparent rounded-2xl focus:border-blue-500 focus:bg-white outline-none font-bold"
                        required
                    >
                </div>

                <!-- Lastname -->
                <div>
                    <label class="text-xs font-black text-slate-400 uppercase tracking-widest">
                        Nom
                    </label>
                    <input 
                        type="text" 
                        name="lastname"
                        value="<?php echo $_SESSION['lastname']; ?>"
                        class="mt-2 w-full px-5 py-4 bg-slate-50 border-2 border-transparent rounded-2xl focus:border-blue-500 focus:bg-white outline-none font-bold"
                        required
                    >
                </div>
            </div>

            <!-- Email -->
            <div>
                <label class="text-xs font-black text-slate-400 uppercase tracking-widest">
                    Email
                </label>
                <input 
                    type="email" 
                    name="email"
                    value="<?php echo $_SESSION['email']; ?>"
                    class="mt-2 w-full px-5 py-4 bg-slate-50 border-2 border-transparent rounded-2xl focus:border-blue-500 focus:bg-white outline-none font-bold"
                    required
                >
            </div>

            <!-- Password -->
            <div>
                <label class="text-xs font-black text-slate-400 uppercase tracking-widest">
                    Nouveau mot de passe
                </label>
                <input 
                    type="password" 
                    name="password"
                    placeholder="Laissez vide si inchangé"
                    class="mt-2 w-full px-5 py-4 bg-slate-50 border-2 border-transparent rounded-2xl focus:border-blue-500 focus:bg-white outline-none font-bold"
                >
            </div>

            <!-- Buttons -->
            <div class="flex flex-wrap gap-4 pt-6">
                <button 
                    type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-4 rounded-2xl font-black shadow-lg shadow-blue-200 transition"
                >
                    <i class="fa-solid fa-floppy-disk mr-2"></i>
                    Enregistrer
                </button>

                <a href="profile.php"
                    class="bg-slate-200 hover:bg-slate-300 text-slate-700 px-8 py-4 rounded-2xl font-black transition"
                >
                    Annuler
                </a>
            </div>

        </form>
    </div>

</body>
</html>
