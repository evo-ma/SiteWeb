<?php
$base_url = '/Evo'; 
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EVO</title>



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>css/theme.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>css/theme.css">


</head>
<?php
// Déterminer le niveau de profondeur
if (!isset($depth)) {
    $depth = ''; // Par défaut, on est à la racine
}
?>

<body class="text-white main ">
    <div class="container">
        <!-- Nav secondaire (top) : CACHÉ sur mobile -->
        <nav class="secondary-nav navbar navbar-expand-lg d-none ">
            <ul class="navbar-nav ms-4 align-items-center gap-4">
                <li class="nav-item">
                    <a class="nav-link fw-bold" href="#">Connexion</a>
                </li>
                <li class="nav-item d-flex align-items-center gap-1">
                    <span class="text-white">Français</span>
                    <span class="text-white fs-5"><i class="bi bi-globe"></i></span>
                </li>
            </ul>
        </nav>

        <!-- Nav principale : Logo + Menu -->
        <nav class="primary-nav navbar navbar-expand-lg mt-4" style="border-radius: 9999px;">

            <a class="navbar-brand d-flex align-items-center" href="<?php echo $base_url; ?>">
                <img src="https://static.wixstatic.com/media/f57006_f39c5e57be894c26ab188b5bbe527401~mv2.png/v1/fill/w_528,h_424,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/f57006_f39c5e57be894c26ab188b5bbe527401~mv2.png"
                    alt="Logo" class="logo-img me-2" width="90" height="60">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center" id="mainMenu">
                <ul class="navbar-nav align-items-lg-center gap-3">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $base_url; ?>/components/pages/solution.php"
                            data-page="solutions">Solutions</a>
                    </li>
                    
                    <li class="nav-item"><a class="nav-link"
                            href="<?php echo $base_url; ?>/components/pages/contact.php">Contact</a></li>
                    <li class="nav-item"><a class="nav-link"
                            href="<?php echo $base_url; ?>/components/pages/pour-quoi-evo.php">
                            Pourquoi EVO</a></li>
                    <li class="nav-item d-none"><a class="nav-link"
                            href="<?php echo $base_url; ?>/components/pages/pricing.php">
                            Prix</a></li>
                            <li class="nav-item"><a class="nav-link"
                            href="<?php echo $base_url; ?>/components/pages/carriere.php">Carrières</a></li>

                    <!-- Connexion + Langue : VISIBLE uniquement sur mobile -->
                    <li class="nav-item d-lg-none">
                        <a class="nav-link fw-bold" href="#">Connexion</a>
                    </li>
                    <li class="nav-item d-lg-none d-flex align-items-center gap-1">
                        <span>Français</span>
                        <i class="bi bi-globe"></i>
                    </li>
                </ul>
            </div>
            <div class="justify-content-end d-none d-sm-flex">
                <button class="btn primary-btn"> S'inscrire
                </button>
            </div>

        </nav>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>