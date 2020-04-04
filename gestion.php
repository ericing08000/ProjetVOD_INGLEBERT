<!-------------------------------->
<!-- Vérification de la session -->
<!-------------------------------->
<?php
    session_start();
    // if(isset($_SESSION['nom']))
    if($_SESSION['nom'])
    {
        //echo $_SESSION['nom'];
    }
    else
    {
        header("location:identifier.php");
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

    <!------------------------------>
    <!--  Gestion mono page -->
    <!------------------------------>
    <div id="gestion_film" class="gestion_film">
        <!------------------------------>
        <!-- Barre de navigation -->
        <!------------------------------>
        <div class="nav">
            <div>
                <h3>GESTION</h3>
            </div>
            <div class="logout">
                <a href="traitement/logout.php">SE DECONNECTER</a>
            </div>
        </div>

        <!------------------------------>
        <!-- Boutons -->
        <!------------------------------>
        <div class="btn_gestion_film">
            <div class="active1"><a href="#">Film</a></div>
            <div class="active2"><a href="#">Type de film</a></div>
            <div class="active2"><a href="#">Catégorie</a></div>
            <div class="active3"><a href="#">Compte</a></div>
            <div class="active3"><a href="#">Type de compte</a></div>
        </div>

        <!------------------------------>
        <!-- La table film -->
        <!------------------------------>
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
            
                <?php
                    include ('include/connect_local.php');
                    
                    //------ Requête pour la suppression
                    if(isset($_GET['supp'])) 
                    $bdd -> exec ("DELETE FROM film WHERE nom_film ='".$_GET['nom_film']."'");         

                    //------ Requête de liste
                    $req = $bdd->prepare("SELECT f.nom_film, r.nom_realisateur,t.type_film,f.date_sortie_film, f.photo_film FROM film as f,realisateur as r, type_film as t WHERE f.id_realisateur = r.id_realisateur AND f.id_typefilm = t.id_typefilm ORDER BY nom_film");
                    $req -> execute();

                    while($donnees = $req->fetch()){
                    //Afficher le résultat de la requête   
                    //echo $donnees['nom_film'];
                ?>

                <tr>
                    <td class="titre_film"><?= $donnees['nom_film']; ?></td>
                    <td><?= $donnees['type_film']; ?></td>
                    <td><?= $donnees['date_sortie_film']; ?></td>
                    <td><img class="photo_film" src="image/<?= $donnees['photo_film']; ?>" alt="photo film"> </td>
                    <td><?= $donnees['nom_realisateur']; ?></td>
                    <td><a href="view/fiche_film.php?nom_film=<?php echo $donnees['nom_film'] ?>" title="Éditer le film"><img class="edit_film" src="image/edit.png" alt="Editer le film"></a></td>
                    <td><a href="gestion.php?nom_film=<?php echo $donnees['nom_film']; ?> &supp=ok" title="Supprimer le film"><img class="delete_film" src="image/delete.png" alt="Supprimer le film"></a></td>
                </tr>
                

                <?php   }   ?>

            </table>
            
        </div>

        <!------------------------------>
        <!-- Bouton Ajouter un film -->
        <!------------------------------>
        <div class="btn_add_gestion">
            <div>
            <a href="#">Ajouter un film</a>
            </div>
        </div>
        
        <!------------------------------>
        <!-- Footer -->
        <!------------------------------>
        <footer></footer>
    
    </div> 
</body>
</html>

