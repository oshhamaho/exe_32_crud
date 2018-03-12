<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Admin du site</title>
</head>
<body>
<h1>Admin</h1>
<div id="menu"><a href="./">Retour sur l'accueil</a></div>
<div id="contenu">
   <menu>
       <ul>
           <li><a href="?admin&ajout">Ajouter un article</a></li>
       </ul>
   </menu>
    <?php
    // pas d'articles
    if ($articles == false) {
        echo "<h2>Pas encore d'articles!</h2>";
    } else {
        foreach ($articles AS $item) {
            ?>
            <h3><a href="?article=<?= $item['idarti'] ?>"><?= $item['titre'] ?></a></h3>
            <!-- ici le foreach pour les categ -->
            <p><?= $item['texte'] ?> ... <a href="?article=<?= $item['idarti'] ?>">Lire la suite</a></p>
            <p><?= $item['publie'] ?> <img width="16px" height="16px" src="vues/imgs/update.png" atl="Modifier l'article" onclick="document.location='?admin&modif=<?= $item['idarti'] ?>';"> | <img width="16px" height="16px" src="vues/imgs/delete.png" atl="Supprimer l'article" onclick="document.location='?admin&sup=<?= $item['idarti'] ?>';"></p>
            <hr>
            <?php
        }
    }
    ?>
</div>
</body>
</html>