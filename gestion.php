<?php
session_start();
if(!isset($_SESSION['nom']))
{
header("Location:identifier.php");
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/gestion.css">
    <title>Gestion : <?php echo "Bienvenue ".$_SESSION['nom'];?></title>
</head>
<body>
<?/*php echo $_SESSION['nom'];*/?>
<!--  gestion mono page -->
<div id="gestion" class="gestion">
    <!-- Header -->
    <div class="nav">
        <div>
            <h3>GESTION</h3>
        </div>
        <div>
            <a href="javascript:window.close();" title="Fermer Gestion et revenir à l'accueil"><img class="close" src="image/close.png" alt="fermer fenêtre"></a>
        <?php if(isset($_SESSION['nom'])){unset($_SESSION['nom']);} ?>    
        </div>
    </div>

    <!-- Boutons -->
    <div class="button_gestion">

        <div class="active1"><a href="#">FILMS</a></div>
        <div class="active2"><a href="#">CATEGORIE</a></div>
        <div class="active3"><a href="#">COMPTE</a></div>

    </div>

    <!-- la table film -->
    <div class="table_gestion_film">
        <table border="1px" cellspacing="0" cellpadding="5">
            <tr>
                <th class="item1_film">Nom du film</th>
                <th class="item2_film">Type du film</th>
                <th class="item3_film">Date de sortie</th>
                <th class="item4_film">Affiche</th>
                <th class="item5_film">Réalisateur</th>
                <th class="item6_film">Editer</th>
                <th class="item7_film">Supprimer</th>
            </tr>
            <tr>
                <td class="titre_film">Les gumeaux</td>
                <td>Comédie</td>
                <td>2016</td>
                <td></td>
                <td>Lucas Georges</td>
                <td><a href="" title="Éditer le film"><img class="edit_film" src="image/edit.png" alt="Editer le film"></a></td>
                <td><a href="" title="Supprimer le film"><img class="delete_film" src="image/delete.png" alt="Supprimer le film"></a></td>
            </tr>
        </table>
    </div>

    <!-- btn_add -->
    <div class="btn_add_gestion">
    <div><a href="#">Ajouter un film</a></div>
    </div>
    
    <footer></footer>
</div>    
</body>
</html>

