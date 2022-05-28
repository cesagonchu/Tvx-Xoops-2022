<?php
// _LANGCODE: fr
// _CHARSET : UTF-8
// Translator: équipe de traduction XOOPS

define('_XOOPS_UPGRADE_WELCOME', <<<'EOT'
<h2> L\'upgrader XOOPS </h2>

<p>
<em> La mise à niveau </em> examinera cette installation XOOPS et appliquera les correctifs nécessaires pour la rendre compatible 
avec le nouveau code XOOPS. Les correctifs peuvent inclure des modifications de la base de données, l\'ajout de paramètres par défaut pour les nouveaux
des éléments de configuration, des mises à jour de fichiers et de données, et plus encore.
<p>
Après chaque patch, l\'outil de mise à jour vous informe de son état et attend que vous continuiez à saisir vos données. À la
fin de la mise à jour, le contrôle passera à la fonction de mise à jour du module système.

<div class="alert alert-warning">
Une fois la mise à jour terminée, n\'oubliez pas de faire ceci :
<ul class="fa-ul">
 <li><span class="fa-li fa fa-folder-open-o"></span> supprimer le dossier de mise à jour</li>
 <li><span class="fa-li fa fa-refresh"></span> mettre à jour les modules qui ont changé</li>
</div>

EOT
);