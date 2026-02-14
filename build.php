<?php
// build.php
$distDir = __DIR__ . '/dist';
$assetsToCopy = ['css', 'js', 'assets', 'images']; // Ajoutez vos dossiers ici

// 1. Création / Nettoyage du dossier dist
if (!is_dir($distDir)) mkdir($distDir, 0777, true);

// 2. Génération des fichiers HTML
$pages = ['index.php', 'about.php', 'contact.php'];

foreach ($pages as $file) {
    if (!file_exists($file)) continue;

    ob_start();
    include($file);
    $html = ob_get_clean();
    
    // Correction des liens pour le statique
    $html = str_replace('.php', '.html', $html);
    
    $outputFile = str_replace('.php', '.html', $file);
    file_put_contents($distDir . '/' . $outputFile, $html);
    echo "✔ HTML généré : $outputFile" . PHP_EOL;
}

// 3. Copie des Assets (CSS, JS, etc.)
foreach ($assetsToCopy as $folder) {
    if (is_dir(__DIR__ . '/' . $folder)) {
        copyDir(__DIR__ . '/' . $folder, $distDir . '/' . $folder);
        echo "✔ Assets copiés : /$folder" . PHP_EOL;
    }
}

/**
 * Fonction récursive pour copier un dossier
 */
function copyDir($src, $dst) {
    if (!is_dir($dst)) mkdir($dst, 0777, true);
    $dir = opendir($src);
    while (false !== ($file = readdir($dir))) {
        if (($file != '.') && ($file != '..')) {
            if (is_dir($src . '/' . $file)) {
                copyDir($src . '/' . $file, $dst . '/' . $file);
            } else {
                copy($src . '/' . $file, $dst . '/' . $file);
            }
        }
    }
    closedir($dir);
}

echo "--- Build terminé avec succès dans /dist ---" . PHP_EOL;
