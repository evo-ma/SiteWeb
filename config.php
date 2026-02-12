<?php
// Détection du mode (CLI/Build vs Navigateur)
$is_build = (php_sapi_name() === 'cli');

if ($is_build) {
    // Pendant le build Netlify
    $protocol = 'https';
    $host = 'curious-sunburst-3855da.netlify.app';
    $root_path = ''; 
} else {
    // En local ou sur un serveur classique
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
    $host = $_SERVER['HTTP_HOST'] ?? 'localhost';
    $script_path = dirname($_SERVER['SCRIPT_NAME'] ?? '');
    $root_path = preg_replace('#/components(/pages)?$#', '', $script_path);
}

// Construction de la BASE_URL propre
$clean_root = ($root_path === '/' || $root_path === '.') ? '' : rtrim($root_path, '/');
define('BASE_URL', $protocol . "://" . $host);

// Chemins des assets
define('CSS_PATH', BASE_URL . 'css/');
define('JS_PATH', BASE_URL . 'js/');
define('BOOTSTRAP_CSS', BASE_URL . 'bootstrap/css/bootstrap.min.css');
define('BOOTSTRAP_JS', BASE_URL . 'bootstrap/js/bootstrap.bundle.min.js');
define('IMAGES_PATH', BASE_URL . 'images/');
define('FONTS_PATH', BASE_URL . 'fonts/');

// Chemins des composants (Chemins système, ne pas changer)
define('COMPONENTS_PATH', __DIR__ . '/components/');
define('PAGES_PATH', COMPONENTS_PATH . 'pages/');

function includeComponent($component) {
    $file = COMPONENTS_PATH . $component . '.php';
    if (file_exists($file)) {
        include $file;
    } else {
        echo "Erreur : composant $component introuvable";
    }
}

function url($path = '') {
    return BASE_URL . ltrim($path, '/');
}
?>
