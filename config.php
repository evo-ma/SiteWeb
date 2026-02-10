<?php
// Détection automatique du dossier racine
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
//$host = $_SERVER['HTTP_HOST'];
if (isset($_SERVER['HTTP_HOST'])) {
    $host = $_SERVER['HTTP_HOST'];
} else {
    $host = 'https://curious-sunburst-3855da.netlify.app/'; // Valeur par défaut pour le build Netlify
}
// Obtenir le chemin du script actuel
$script_path = dirname($_SERVER['SCRIPT_NAME']);

// Remonter au dossier racine (enlever /components/pages si nécessaire)
$root_path = preg_replace('#/components(/pages)?$#', '', $script_path);

// S'assurer qu'il y a un / à la fin
define('BASE_URL', $protocol . "://" . $host . rtrim($root_path, '/') . '/');

// Chemins des assets
//define('CSS_PATH', BASE_URL . 'css/');
define('JS_PATH', BASE_URL . 'js/');
define('BOOTSTRAP_CSS', BASE_URL . 'bootstrap/css/bootstrap.min.css');
define('BOOTSTRAP_JS', BASE_URL . 'bootstrap/js/bootstrap.bundle.min.js');
define('IMAGES_PATH', BASE_URL . 'images/');
define('FONTS_PATH', BASE_URL . 'fonts/');

// Chemins des composants
define('COMPONENTS_PATH', __DIR__ . '/components/');
define('PAGES_PATH', COMPONENTS_PATH . 'pages/');

// Fonction pour inclure les composants
function includeComponent($component) {
    $file = COMPONENTS_PATH . $component . '.php';
    if (file_exists($file)) {
        include $file;
    } else {
        echo "Erreur : composant $component introuvable";
    }
}

// Fonction pour générer les URLs
function url($path = '') {
    return BASE_URL . ltrim($path, '/');
}
?>