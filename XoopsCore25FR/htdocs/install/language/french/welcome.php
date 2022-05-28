<?php
//
// _LANGCODE: fr
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

$content .= '
<p>
<abbr title="Script de portail OO (Orienté Objet)">XOOPS</abbr> est un script de portail OO (Orienté Objet) open-source 
Système de publication Internet orienté objet écrit en PHP. Il s\'agit d\'un outil idéal pour
développer des sites internet communautaires dynamiques de petite à grande taille, des portails intra-entreprise, des portails d\'entreprise, des weblogs et bien plus encore.
</p>
<p>
XOOPS est publié sous les termes de 
    <a href="https://www.gnu.org/licenses/gpl-2.0.html" rel="external">GNU General Public License (GPL)</a>
version 2 ou supérieure, et est libre d\'utilisation et de modification.
Il est possible de le redistribuer à condition de respecter les termes de distribution de la licence.
</p>
<h3>Pré-requis</h3>
<ul>
    <li>WWW Server (<a href="https://www.apache.org/" rel="external">Apache</a>, <a href="https://www.nginx.com/" rel="external">NGINX</a>, IIS, etc)</li>
    <li><a href="https://www.php.net/" rel="external">PHP</a> 5.3.9 ou supérieur, 7.3+ recommandé</li>
    <li><a href="https://www.mysql.com/" rel="external">MySQL</a> 5.5 ou supérieur, 5.7+ recommandé </li>
</ul>
<h3>Avant de procéder à l\'installation</h3>
<ol>
<li>Installez correctement le serveur WWW, PHP et le serveur de base de données.</li>
<li>Préparez une base de données pour votre site XOOPS</li>
<li>Préparez un compte utilisateur et accordez lui des droits d\'administrateur (lecture, écriture et exécution).</li>
<li>Rendre ces répertoires et fichiers accessibles en écriture: %s</li>
<li>Pour des raisons de sécurité, nous vous invitons à déplacer en dehors <a href="http://phpsec.org/projects/guide/3.html" rel="external">de la racine de votre site</a>, et de changer le nom des répertoires suivants : %s</li>
<li>Créez (si il n\'existe pas) et ouvrez en écriture le répertoire suivant: %s</li>
<li>Veillez à autoriser l\'écriture des cookies et l\'exécution du Javascript dans votre navigateur internet.</li>
</ol>
<h3>Notes spéciales</h3>
<p>Certaines combinaisons de logiciels de systèmes spécifiques peuvent nécessiter des configurations supplémentaires pour fonctionner
 avec XOOPS. Si l\'un de ces sujets s\'applique à votre environnement, veuillez consulter la version complète
 <a href="https://xoops.gitbook.io/xoops-install-upgrade/" rel="external">Manuel 
 d\'installation de Xoops</a> pour plus d\'informations.
</p>
<p>MySQL 8.0 n\'est pas pris en charge par toutes les versions de PHP. Même dans les versions supportées, des problèmes avec
 la bibliothèque PHP <em>mysqlnd</em> peut nécessiter le plugin d\' <em>authentification par défaut</em> du serveur MySQL.
 à définir sur <em>mysql_native_password</em> pour fonctionner correctement.
</p>
<p>Les systèmes compatibles SELinux (tels que CentOS et RHEL) peuvent nécessiter des modifications du contexte de sécurité
 pour les répertoires XOOPS en plus des autorisations normales de fichiers pour rendre les répertoires accessibles en écriture.
 Consultez la documentation de votre système ou votre administrateur de système.
</p>
';