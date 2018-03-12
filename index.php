<?php
/**
 * Contrôleur frontal
 */

// appel du fichier de configuration
require_once "mysqliconfig.php";

// appel du modèle contenant une connexion mysql nécessaire à toutes les pages => $mysqli
require_once "modeles/mysqliconnect.php";


if(empty($_GET)){
    require_once "controller/AccueilController.php";

// sinon si il existe une variable GET qui s'apelle c => catégorie

}elseif (isset($_GET['article'])){
    require_once "controller/ArticleController.php";

<<<<<<< HEAD
}elseif (isset($_GET['admin'])){
    require_once "controller/AdminController.php";
=======
// si on est dans l'administration
}elseif (isset($_GET['admin'])){
    require_once "controller/AdminController.php";

>>>>>>> 38689189f5aec6ba045ef116569f2d24d9e2a4b3
// sinon (existence d'une autre autre variable get que celles attendues) => Accueil
}else{
    require_once "controller/AccueilController.php";
}