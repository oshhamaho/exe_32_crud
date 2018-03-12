<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Admin du site</title>
</head>
<body>
<<<<<<< HEAD
<h1>Admin</h1>
<div id="menu"><a href="./">Retour sur l'accueil</a></div>
<div id="contenu">
   <menu>
       <ul>
           <li><a href="?admin&ajout">Ajouter un article</a></li>
       </ul>
   </menu>
    <?php
=======
<h1>Admin du site</h1>
<div id="menu">
    <a href="./">Retour sur l'accueil</a>
</div>
<div id="contenu">
        <ul>
            <li><a href="?admin&ajout">Ajouter un article</a></li>
        </ul>
    <?php


>>>>>>> 38689189f5aec6ba045ef116569f2d24d9e2a4b3
    // pas d'articles
    if ($articles == false) {
        echo "<h2>Pas encore d'articles!</h2>";
    } else {
        foreach ($articles AS $item) {
            ?>
            <h3><a href="?article=<?= $item['idarti'] ?>"><?= $item['titre'] ?></a></h3>
<<<<<<< HEAD
            <!-- ici le foreach pour les categ -->
            <p><?= $item['texte'] ?> ... <a href="?article=<?= $item['idarti'] ?>">Lire la suite</a></p>
            <p><?= $item['publie'] ?> <img width="16px" height="16px" src="vues/imgs/update.png" atl="Modifier l'article" onclick="document.location='?admin&modif=<?= $item['idarti'] ?>';"> | <img width="16px" height="16px" src="vues/imgs/delete.png" atl="Supprimer l'article" onclick="document.location='?admin&sup=<?= $item['idarti'] ?>';"></p>
=======
            <p><?= $item['texte'] ?> ... <a href="?article=<?= $item['idarti'] ?>">Lire la suite</a></p>
            <p><?= $item['publie'] ?>
               |  <img width="16px" height="16px" src="vues/img/update.png" alt="Modifier l'article" onclick="document.location='?admin&modif=<?= $item['idarti'] ?>';" /> | <img width="16px" height="16px" src="vues/img/delete.png" alt="Supprimer l'article" onclick="document.location='?admin&sup=<?= $item['idarti'] ?>';" />
            </p>
>>>>>>> 38689189f5aec6ba045ef116569f2d24d9e2a4b3
            <hr>
            <?php
        }
    }
    ?>
</div>
</body>
<<<<<<< HEAD
</html>
=======
</html>
>>>>>>> 38689189f5aec6ba045ef116569f2d24d9e2a4b3
