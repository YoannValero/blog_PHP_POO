<?php 
// Autoload.php doit être appelé sur tout les fichiers d'actions Controllers
spl_autoload_register( function($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className); // remplacement des anti-slash pour avoir le bon chemin de dossier lors de l'autoload
    require_once("libraries/$className.php");
});

?>