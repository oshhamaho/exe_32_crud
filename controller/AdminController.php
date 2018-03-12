<?php
/**
 * Created by PhpStorm.
 * User: artem.tsymbalov
 * Date: 12/03/2018
 * Time: 13:51
 */
require_once "modeles/ArticleModele.php";

// on récupère les résumés d'articles depuis arti
$articles = listeArtiAccueil($mysqli);

// on prend la vue
require_once "vues/Admin.html.php";