<?php
/*
Vous ne pouvez pas changer ou modifier une partie de ce commentaire ou les crédits
de soutien des développeurs à partir de ce code source ou de tout code source de soutien
considéré comme protégé par le droit d\'auteur (c) du commentaire original ou des auteurs de crédit.

Ce programme est distribué dans l\'espoir qu\'il sera utile,
mais SANS AUCUNE GARANTIE ; sans même la garantie implicite de
COMMERCIALISATION ou D'\ADAPTATION À UN USAGE PARTICULIER.
*/

/**
 * Xoops locale
 *
 * @copyright       (c) 2000-2016 Projet XOOPS (www.xoops.org)
 * @licence             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package             kernel
 * @since               2.3.0
 * @author              Taiwen Jiang <phppp@users.sourceforge.net>
 * @todo                To be handled by i18n/l10n
 */
defined('XOOPS_ROOT_PATH') || exit('Restricted access');

setlocale(LC_ALL, 'fr_FR');

// !!IMPORTANT!! insérez '\' avant tout caractère parmi les caractères réservés : "a","A","B","c","d","D","e","F","g","G","h","H","i","I","j","l","L","m","M","n","O","r","s","S","t","T","U","w","W","Y","y","z","Z"
// insérez le double '\' avant 't','r','n'
define('_TODAY', "\A\u\j\o\u\\r\d\'\h\u\i G:i");
define('_YESTERDAY', "\H\i\\e\\r G:i");
define('_MONTHDAY', 'd/m H:i');
define('_YEARMONTHDAY', 'd/m/Y H:i');
define('_ELAPSE', 'Il y a %s');
define('_TIMEFORMAT_DESC', "Formats valides : \"s\" - " . _SHORTDATESTRING . "; \"m\" - " . _MEDIUMDATESTRING . "; \"l\" - " . _DATESTRING . ';<br>' . "\"c\" ou \"custom\" - Le format est déterminé en fonction de l'intervalle à présenter ; \"e\" - Temps écoulé; \"mysql\" - d-m-Y H:i:s;<br>" . "chaîne de caractères spécifique - Voir <a href=\"http://php.net/manual/en/function.date.php\" rel=\"external\">le manuel PHP</a>.");

if (!class_exists('XoopsLocalAbstract')) {
    include_once XOOPS_ROOT_PATH . '/class/xoopslocal.php';
}

/**
 * A Xoops Local
 *
 * @package             kernel
 * @subpackage          Language
 *
 * @author              Taiwen Jiang <phppp@users.sourceforge.net>
 * @copyright       (c) 2000-2016 Projet XOOPS (www.xoops.org)
 */
class XoopsLocal extends XoopsLocalAbstract
{
    /**
     * Number Formats
     *
     * @param  unknown_type $number
     * @return mixed
     */
    public function number_format($number)
    {
        return number_format($number, 2, '.', ',');
    }

    /**
     * Money Format
     *
     * @param  string $format
     * @param  string $number
     * @return money  format
     */
    public function money_format($format, $number)
    {
        setlocale(LC_MONETARY, 'fr_FR');

        return money_format($format, $number);
    }
}