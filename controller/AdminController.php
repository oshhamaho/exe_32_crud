<?php
/**
<<<<<<< HEAD
 * Created by PhpStorm.
 * User: artem.tsymbalov
 * Date: 12/03/2018
 * Time: 13:51
 */
=======
 * Contrôleur gérant l'adùministration
 */

// chargement des modeles
>>>>>>> 38689189f5aec6ba045ef116569f2d24d9e2a4b3
require_once "modeles/ArticleModele.php";

// on récupère les résumés d'articles depuis arti
$articles = listeArtiAccueil($mysqli);

// on prend la vue
<<<<<<< HEAD
require_once "vues/Admin.html.php";
=======
require_once "vues/Admin.html.php";
>>>>>>> 38689189f5aec6ba045ef116569f2d24d9e2a4b3
