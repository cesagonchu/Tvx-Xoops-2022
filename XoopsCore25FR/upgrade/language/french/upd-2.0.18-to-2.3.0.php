<?php
// _LANGCODE: fr
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define('LEGEND_XOOPS_PATHS', 'Chemin physique de XOOPS');
define('LEGEND_DATABASE', 'Jeu de caractères de la base de données');

define('XOOPS_LIB_PATH_LABEL', 'Répertoire de la bibliothèque XOOPS');
define('XOOPS_LIB_PATH_HELP', 'Chemin d\'accès physique au répertoire de la bibliothèque XOOPS SANS slash de fin, pour des raisons de compatibilité. Localisez le dossier à partir de ' . XOOPS_ROOT_PATH . 'pour le rendre sécurisé.');
define('XOOPS_DATA_PATH_LABEL', 'Répertoire de la bibliothèque XOOPS') ;
define('XOOPS_DATA_PATH_HELP', 'Chemin physique vers le répertoire des fichiers de données XOOPS (inscriptibles) SANS slash de fin, pour des raisons de compatibilité. Localisez le dossier à partir de ' . XOOPS_ROOT_PATH . ' pour le rendre sécurisé.');

define('DB_COLLATION_LABEL', 'Jeu de caractères et collation de la base de données') ;
define('DB_COLLATION_HELP', "À partir de la version 4.12, MySQL supporte les jeux de caractères personnalisés et la collation. Cependant, il est plus complexe que prévu, donc NE FAITES PAS de changements à moins d'être sûr de votre choix") ;
define('DB_COLLATION_NOCHANGE', 'Ne pas changer') ;

define('XOOPS_PATH_FOUND', 'Chemin trouvé.') ;
define('ERR_COULD_NOT_ACCESS', 'Impossible d\'accéder au dossier spécifié. Veuillez vérifier qu\'il existe et qu\'il est lisible par le serveur') ;
define('CHECKING_PERMISSIONS', 'Vérifier les permissions des fichiers et des répertoires...') ;
define('ERR_NEED_WRITE_ACCESS', 'Le serveur doit avoir un accès en écriture aux fichiers et dossiers suivants <br>(exemple : <em>chmod 777 directory_name</em> sur un serveur UNIX / LINUX)');
define('IS_NOT_WRITABLE', '%s n\'est PAS inscriptible.') ;
define('IS_WRITABLE', '%s est inscriptible.');
define('ERR_COULD_NOT_WRITE_MAINFILE', 'Erreur d\'écriture du contenu dans mainfile.php, écrire le contenu dans mainfile.php manuellement.');