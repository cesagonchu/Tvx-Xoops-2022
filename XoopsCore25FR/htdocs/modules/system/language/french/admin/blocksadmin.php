<?php
/**
 * @copyright       (c) 2000-2016 XOOPS Project (www.xoops.org)
 * @license         GNU GPL 2 ou supérieur (https://www.gnu.org/licenses/gpl-2.0.html)
 * _LANGCODE    fr
 * _CHARSET     UTF-8
 */
// Navigation
define('_AM_SYSTEM_BLOCKS_ADMIN', 'Administration des blocs');
define('_AM_SYSTEM_BLOCKS_MANAGMENT', 'Gérer');
define('_AM_SYSTEM_BLOCKS_ADDBLOCK', 'Ajouter un nouveau bloc');
define('_AM_SYSTEM_BLOCKS_EDITBLOCK', 'Éditer un bloc');
define('_AM_SYSTEM_BLOCKS_CLONEBLOCK', 'Cloner un bloc');
// Forms
define('_AM_SYSTEM_BLOCKS_CUSTOM', 'Bloc personnalisé');
define('_AM_SYSTEM_BLOCKS_TYPES', 'Tous les types');
define('_AM_SYSTEM_BLOCKS_GENERATOR', 'Modules');
define('_AM_SYSTEM_BLOCKS_GROUP', 'Groupes');
define('_AM_SYSTEM_BLOCKS_SVISIBLEIN', 'Page');
define('_AM_SYSTEM_BLOCKS_DISPLAY', 'Afficher le bloc');
define('_AM_SYSTEM_BLOCKS_HIDE', 'Masquer le bloc');
define('_AM_SYSTEM_BLOCKS_CLONE', 'Cloner');
define('_AM_SYSTEM_BLOCKS_SIDELEFT', 'Gauche');
define('_AM_SYSTEM_BLOCKS_SIDETOPLEFT', 'En haut à gauche');
define('_AM_SYSTEM_BLOCKS_SIDETOPCENTER', 'En haut au centre');
define('_AM_SYSTEM_BLOCKS_SIDETOPRIGHT', 'En haut à droite');
define('_AM_SYSTEM_BLOCKS_SIDERIGHT', 'Droite');
define('_AM_SYSTEM_BLOCKS_SIDEBOTTOMLEFT', 'En bas à gauche');
define('_AM_SYSTEM_BLOCKS_SIDEBOTTOMCENTER', 'En bas au centre');
define('_AM_SYSTEM_BLOCKS_SIDEBOTTOMRIGHT', 'En bas à droite');

define('_AM_SYSTEM_BLOCKS_SIDEFOOTERLEFT', 'Pied de page à gauche');
define('_AM_SYSTEM_BLOCKS_SIDEFOOTERCENTER', 'Pied de page au centre');
define('_AM_SYSTEM_BLOCKS_SIDEFOOTERRIGHT', 'Pied de page à droite');

define('_AM_SYSTEM_BLOCKS_ADD', 'Ajouter un bloc');
define('_AM_SYSTEM_BLOCKS_MANAGE', 'Gérer le bloc');
define('_AM_SYSTEM_BLOCKS_NAME', 'Nom');
define('_AM_SYSTEM_BLOCKS_TYPE', 'Type de bloc');
define('_AM_SYSTEM_BLOCKS_SBLEFT', 'Bloc latéral - gauche');
define('_AM_SYSTEM_BLOCKS_SBRIGHT', 'Bloc latéral - droit');
define('_AM_SYSTEM_BLOCKS_CBLEFT', 'Bloc central - Gauche');
define('_AM_SYSTEM_BLOCKS_CBRIGHT', 'Bloc central - Droit');
define('_AM_SYSTEM_BLOCKS_CBCENTER', 'Bloc du Centre - Centre');
define('_AM_SYSTEM_BLOCKS_CBBOTTOMLEFT', 'Bloc du Centre - En bas à gauche');
define('_AM_SYSTEM_BLOCKS_CBBOTTOMRIGHT', 'Bloc du Centre - En bas à droite');

define('_AM_SYSTEM_BLOCKS_CBFOOTERLEFT', 'Bloc de pied de page - Gauche');
define('_AM_SYSTEM_BLOCKS_CBFOOTERCENTER', 'Bloc de pied de page - Centre');
define('_AM_SYSTEM_BLOCKS_CBFOOTERRIGHT', 'Bloc de pied de page - Droite');

define('_AM_SYSTEM_BLOCKS_CBBOTTOM', 'Bloc central - Bas');
define('_AM_SYSTEM_BLOCKS_WEIGHT', 'Poids');
define('_AM_SYSTEM_BLOCKS_VISIBLE', 'Visible');
define('_AM_SYSTEM_BLOCKS_VISIBLEIN', 'Visible dans');
define('_AM_SYSTEM_BLOCKS_TOPPAGE', 'Haut de la page');
define('_AM_SYSTEM_BLOCKS_ALLPAGES', 'Toutes les pages');
define('_AM_SYSTEM_BLOCKS_UNASSIGNED', 'Non assigné');
define('_AM_SYSTEM_BLOCKS_TITLE', 'Titre');
define('_AM_SYSTEM_BLOCKS_CONTENT', 'Contenu');
define('_AM_SYSTEM_BLOCKS_USEFULTAGS', 'Mots-clés utiles :');
define('_AM_SYSTEM_BLOCKS_BLOCKTAG', '%s affichera %s');
define('_AM_SYSTEM_BLOCKS_CTYPE', 'Type de contenu');
define('_AM_SYSTEM_BLOCKS_HTML', 'HTML');
define('_AM_SYSTEM_BLOCKS_PHP', 'Script PHP');
define('_AM_SYSTEM_BLOCKS_AFWSMILE', 'Format automatique (émoticônes activées)');
define('_AM_SYSTEM_BLOCKS_AFNOSMILE', 'Format automatique (émoticônes désactivées)');
define('_AM_SYSTEM_BLOCKS_BCACHETIME', 'Durée du cache');
define('_AM_SYSTEM_BLOCKS_CUSTOMHTML', 'Bloc personnalisé (HTML)');
define('_AM_SYSTEM_BLOCKS_CUSTOMPHP', 'Bloc personnalisé (PHP)');
define('_AM_SYSTEM_BLOCKS_CUSTOMSMILE', 'Bloc personnalisé (format Auto + émoticônes)');
define('_AM_SYSTEM_BLOCKS_CUSTOMNOSMILE', 'Bloc personnalisé (format Auto)');
define('_AM_SYSTEM_BLOCKS_EDITTPL', 'Modifier un modèle');
define('_AM_SYSTEM_BLOCKS_OPTIONS', 'Options :&nbsp;');
define('_AM_SYSTEM_BLOCKS_DRAG', 'Faites glisser ou triez le bloc');
// Messages
define('_AM_SYSTEM_BLOCKS_DBUPDATED', _AM_SYSTEM_DBUPDATED);
define('_AM_SYSTEM_BLOCKS_RUSUREDEL', 'Êtes-vous sûr de vouloir supprimer le bloc <strong>%s</strong>?');
define('_AM_SYSTEM_BLOCKS_SYSTEMCANT', 'Les blocs système ne peuvent pas être supprimés !');
define('_AM_SYSTEM_BLOCKS_MODULECANT', 'Ce bloc ne peut pas être supprimé directement ! Si vous souhaitez désactiver ce bloc, désactivez le module.');
// Tips
define('_AM_SYSTEM_BLOCKS_TIPS', '<ul>
<li>Vous pouvez facilement changer de côté ou d\'ordre de position avec la fonction glisser-déposer, cliquez sur <img class="tooltip" src="%s" alt="' . _AM_SYSTEM_BLOCKS_DRAG . '" title="' . _AM_SYSTEM_BLOCKS_DRAG . '" /> cette image et configurez votre site comme vous le souhaitez.</li>
<li>Ajouter un nouveau bloc personnalisé</li>
<li>Définissez le bloc en ligne ou hors ligne en cliquant sur <img class="tooltip" width="16" src="%s" alt="' . _AM_SYSTEM_BLOCKS_DISPLAY . '" title="' . _AM_SYSTEM_BLOCKS_DISPLAY . '"/> ou <img class="tooltip" width="16" src="%s" alt="' . _AM_SYSTEM_BLOCKS_HIDE . '" title="' . _AM_SYSTEM_BLOCKS_HIDE . '" /></li>
</ul>');

define('_AM_SYSTEM_BLOCKS_FOOTER_LEFT', 'Pied de page à gauche');
define('_AM_SYSTEM_BLOCKS_FOOTER_CENTER', 'Pied de page au centre');
define('_AM_SYSTEM_BLOCKS_FOOTER_RIGHT', 'Pied de page à droite');