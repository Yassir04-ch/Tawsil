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
    <title>Mon Profil</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-slate-100 min-h-screen flex items-center justify-center">

    <div class="w-full max-w-4xl bg-white rounded-3xl shadow-xl overflow-hidden">
        
        <!-- Header -->
        <div class="bg-gradient-to-r from-blue-600 to-indigo-600 p-10 text-white relative">
            <div class="absolute right-10 top-10 opacity-20 text-8xl">
                <i class="fa-solid fa-user"></i>
            </div>
            <h1 class="text-3xl font-black tracking-tight">Mon Profil</h1>
            <p class="text-blue-100 mt-2">Gérez vos informations personnelles</p>
        </div>

        <!-- Content -->
        <div class="p-10 grid grid-cols-1 md:grid-cols-3 gap-10">

            <!-- Avatar -->
            <div class="flex flex-col items-center text-center">
                <div class="h-32 w-32 rounded-full bg-gradient-to-tr from-blue-600 to-indigo-600 flex items-center justify-center text-white text-4xl font-black shadow-lg">
                    <?php echo strtoupper(substr($_SESSION['firstname'], 0, 1)); ?>
                </div>
                <h2 class="mt-4 text-xl font-black text-slate-800">
                    <?php echo $_SESSION['firstname'] . ' ' . $_SESSION['lastname']; ?>
                </h2>
                <span class="mt-1 px-4 py-1 rounded-full bg-blue-100 text-blue-600 text-xs font-black uppercase tracking-widest">
                    <?php echo $_SESSION['role']; ?>
                </span>
            </div>

            <!-- Infos -->
            <div class="md:col-span-2 space-y-6">
                
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div>
                        <label class="text-xs font-black text-slate-400 uppercase tracking-widest">Prénom</label>
                        <div class="mt-2 p-4 bg-slate-50 rounded-xl font-bold text-slate-700">
                            <?php echo $_SESSION['firstname']; ?>
                        </div>
                    </div>

                    <div>
                        <label class="text-xs font-black text-slate-400 uppercase tracking-widest">Nom</label>
                        <div class="mt-2 p-4 bg-slate-50 rounded-xl font-bold text-slate-700">
                            <?php echo $_SESSION['lastname']; ?>
                        </div>
                    </div>
                </div>

                <div>
                    <label class="text-xs font-black text-slate-400 uppercase tracking-widest">Email</label>
                    <div class="mt-2 p-4 bg-slate-50 rounded-xl font-bold text-slate-700 flex items-center gap-3">
                        <i class="fa-solid fa-envelope text-blue-500"></i>
                        <?php echo $_SESSION['email']; ?>
                    </div>
                </div>

                <div class="flex flex-wrap gap-4 pt-4">
                    <a href="modifierpro.php" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-xl font-black shadow-lg shadow-blue-200 transition">
                        <i class="fa-solid fa-pen mr-2"></i> Modifier
                    </a>
                    <a href="deconexion.php" class="bg-slate-200 hover:bg-red-500 hover:text-white text-slate-700 px-6 py-3 rounded-xl font-black transition">
                        <i class="fa-solid fa-right-from-bracket mr-2"></i> Déconnexion
                    </a>
                </div>

            </div>
        </div>
    </div>

</body>
</html>
