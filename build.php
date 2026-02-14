<?php
// build.php
$distDir = __DIR__ . '/dist';
$staticAssets = ['bootstrap', 'css', 'fonts', 'images', 'js'];
$phpFolders = ['components', '.']; 

// Fichiers à NE PAS transformer en pages HTML individuelles
$excludeFromHTML = ['header.php', 'footer.php', 'nav.php', 'config.php', 'build.php'];

/**
 * 1. Nettoyage du dossier dist
 */
if (is_dir($distDir)) {
    exec(PHP_OS_FAMILY === 'Windows' ? "rd /s /q \"$distDir\"" : "rm -rf \"$distDir\"");
}
mkdir($distDir, 0777, true);

/**
 * 2. Compilation PHP -> HTML
 */
$rootPath = __DIR__;

foreach ($phpFolders as $folder) {
    $dirPath = $rootPath . '/' . $folder;
    if (!is_dir($dirPath)) continue;

    $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dirPath));
    foreach ($iterator as $file) {
        if ($file->getExtension() === 'php') {
            $filename = $file->getFilename();
            if (in_array($filename, $excludeFromHTML)) continue;

            $filePath = $file->getRealPath();
            $fileDir = dirname($filePath);
            $relativePath = str_replace($rootPath, '', $filePath);
            
            $targetFile = $distDir . str_replace('.php', '.html', $relativePath);
            $targetDir = dirname($targetFile);
            if (!is_dir($targetDir)) mkdir($targetDir, 0777, true);

            // --- SOLUTION AUX ERREURS D'INCLUDE ---
            chdir($fileDir); // On se déplace dans le dossier du fichier PHP
            
            ob_start();
            try {
                include $filePath;
                $html = ob_get_clean();
                
                // Correction des liens
                $html = str_replace('.php', '.html', $html);
                
                file_put_contents($targetFile, $html);
                echo "✔ Compilé : $relativePath" . PHP_EOL;
            } catch (Throwable $e) {
                if (ob_get_level() > 0) ob_end_clean();
                echo "❌ Erreur sur $filename : " . $e->getMessage() . PHP_EOL;
            }
            
            chdir($rootPath); // On revient à la racine pour la suite
            // --------------------------------------
        }
    }
}

/**
 * 3. Copie des Assets
 */
function copyDir($src, $dst) {
    if (!is_dir($src)) return;
    @mkdir($dst, 0777, true);
    foreach (scandir($src) as $file) {
        if ($file != '.' && $file != '..') {
            is_dir("$src/$file") ? copyDir("$src/$file", "$dst/$file") : copy("$src/$file", "$dst/$file");
        }
    }
}

foreach ($staticAssets as $asset) {
    copyDir($rootPath . "/$asset", "$distDir/$asset");
}

echo "\n🚀 Build terminé !\n";
