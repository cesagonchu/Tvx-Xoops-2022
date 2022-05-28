<?php
/*
Vous ne pouvez pas changer ou modifier une partie de ce commentaire ou les crédits
de soutien des développeurs à partir de ce code source ou de tout code source de soutien
considéré comme protégé par le droit d'auteur (c) du commentaire original ou des auteurs de crédit.

Ce programme est distribué dans l'espoir qu'il sera utile,
mais SANS AUCUNE GARANTIE ; sans même la garantie implicite de
COMMERCIALISATION ou D'ADAPTATION À UN USAGE PARTICULIER.
*/
/**
 *  Xoops Langage
 *
 * @copyright       (c) 2000-2016 XOOPS Project (www.xoops.org)
 * @license             GNU GPL 2 (http://www.gnu.org/licenses/gpl-2.0.html)
 * @package             kernel
 * @subpackage          Xoops Mailer Local Language
 * @since               2.3.0
 * @author              Taiwen Jiang <phppp@users.sourceforge.net>
 */
defined('XOOPS_ROOT_PATH') || exit('Restricted access');
/**
 * Localiser les fonctions de courrier
 *
 * La localisation anglaise est uniquement à titre de démonstration
 */
// Do not change the class name
class XoopsMailerLocal extends XoopsMailer
{
    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        // Il n'est pas censé être nécessaire de changer le jeu de caractères
        $this->charSet = strtolower(_CHARSET);
        // Vous DEVEZ spécifier la valeur du code de langue pour que le fichier existe :  XOOPS_ROOT_PAT/class/mail/phpmailer/language/lang-["your-language-code"].php
        $this->multimailer->setLanguage('fr');
    }

    /**
     * Les langues à plusieurs octets sont encouragées à faire leur propre méthode de codage FromName
     *
     * @param $text
     *
     * @return mixed
     */
    public function encodeFromName($text)
    {
        // Activez la ligne suivante si nécessaire
        // $text = "=?{$this->charSet}?B?".base64_encode($text)."?=";
        return $text;
    }


    /**
     *Les langues à plusieurs octets sont encouragées à utiliser la méthode d'encodage qui leur est propre pour le sujet.
     *
     * @param $text
     *
     * @return mixed
     */
    public function encodeSubject($text)
    {
        // Activez la ligne suivante si nécessaire
        // $text = "=?{$this->charSet}?B?".base64_encode($text)."?=";
        return $text;
    }
}