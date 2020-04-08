<!-------------------------------->
<!-- Vérification du film -->
<!-------------------------------->
<?php 
    include ('../include/connect_local.php');

    if(isset($_GET["nom_film"]))
    // echo $_GET['nom_film'];

    //-------------------------------------
    //Requête avec alias et GET=nom_film---
    //-------------------------------------
    $req = $bdd->prepare("SELECT f.nom_film,f.date_sortie_film,f.synopsie_film, f.photo_film,r.nom_realisateur,t.type_film  FROM film as f,realisateur as r,type_film as t WHERE nom_film='".$_GET["nom_film"]."' AND f.id_realisateur = r.id_realisateur AND f.id_typefilm = t.id_typefilm ");
    $req -> execute();

        $donnees = $req->fetch();
        //Afficher le résultat de la requête  
        
        // echo"<pre>";
        // print_r($donnees);
        // echo"</pre>";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/fiche_film.css">
        <title>Fiche film : </title>
    </head>
<body>
    <!-------------------------------->
    <!--  Fiche du film -->
    <!-------------------------------->
    <div id="fiche_film" class="fiche_film">
        <!-------------------------------->
        <!-- Barre de navigation -->
        <!-------------------------------->
        <div class="nav_fiche_film">
            <div>
                <h3>Fiche : <?php echo $donnees['nom_film'];?></h3>
            </div>
            <div>
                <a class="close_fiche_film" href="../gestion.php" title="Fermer la fiche et revenir à Gestion"><img src="../image/close.png" alt="fermer fenêtre"></a>
            </div>
        </div>

        <!-------------------------------->
        <!-- Formulaire -->
        <!-------------------------------->
        <div class="form_fiche_film">

            <!-------------------------------->
            <!-- Photo du film -->
            <!-------------------------------->
            <div>
                <img src="../image/<?php echo $donnees['photo_film'];?>" alt="image du film">
            </div>

            <!-------------------------------->
            <!-- Caractéristques du film -->
            <!-------------------------------->
            <div>
                <form action="" method="post">
                    <label>Date de sortie :</label><input type="text" name="date_sortie" id="date_sortie" value="<?php echo $donnees['date_sortie_film'];?>">
                    <label>Type de film :</label><input type="text" name="type_film" id="type_film" value="<?php echo $donnees['type_film'];?>">
                    <label>Réalisateur :</label><input type="text" name="réalisateur" id="réalisateur"value="<?php echo $donnees['nom_realisateur'];?>">
                    <label>Acteur :</label><textarea name="acteur" id="" cols="30" rows="5"></textarea>
                </form>
            </div>    
        </div>
        <!-------------------------------->
        <!-- Synopsie du film -->
        <!-------------------------------->
        <div id="synopsie">
            <a>Synopsie :</a>
            <textarea name="synopsie" id="" cols="120" rows="8"><?php echo $donnees['synopsie_film'];?></textarea>
        </div>

        <!-------------------------------->
        <!-- Boutons de validation -->
        <!-------------------------------->
        <div class="button_fiche_film">
            <div><a href="../gestion.php" title="Fermer la fiche et revenir à Gestion"><input class="button" type="button" value="Annuler"></a></div>
            <div><input type="submit" name ="valider" value="Valider"></div>
        </div>

        <!-------------------------------->
        <!-- Footer -->
        <!-------------------------------->
        <footer>
    
        </footer>
    </div>
    
</body>
</html>