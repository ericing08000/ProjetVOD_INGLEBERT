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
        <link rel="stylesheet" href="css/gestion_typefilm.css">
        <title>Gestion : <?php echo "Bienvenue ".$_SESSION['nom'];?></title>
    </head>

<body>

    <!------------------------------>
    <!--  Gestion table type film -->
    <!------------------------------>
    <div id="gestion_typefilm" class="gestion_typefilm">
        <!------------------------------>
        <!-- Barre de navigation -->
        <!------------------------------>
        <div class="nav">
            <div>
                <h3>GESTION : TYPE DE FILM</h3>
            </div>
            <div class="logout">
                <a href="traitement/logout.php">SE DECONNECTER</a>
            </div>
        </div>

        <!------------------------------>
        <!-- Boutons -->
        <!------------------------------>
        <div class="btn_gestion_typefilm">
            <div class="active1"><a href="gestion.php">Film</a></div>
            <div class="active2"><a href="gestion_typefilm.php">Type de film</a></div>
            <div class="active3"><a href="gestion_compte.php">Compte</a></div>
            <div class="active4"><a href="gestion_typecompte.php">Type de compte</a></div>
        </div>

        <!------------------------------>
        <!-- La table type film -->
        <!------------------------------>
        <div id="table_typefilm">
            <div class="table_gestion_typefilm">
                <table border="1px" cellspacing="0" cellpadding="5">
                    <tr>
                        <th class="item1_typefilm">Type du film</th>
                        <th class="item2_typefilm">Editer</th>
                        <th class="item3_typefilm">Supprimer</th>
                    </tr>
                
                    <?php
                        include ('include/connect_bdd.php');
                            //----------------------------------
                            //------ Requête pour la suppression
                            //----------------------------------
                            // if(isset($_GET['supp'])) 
                            // $bdd -> exec ("DELETE FROM film WHERE type_film ='".$_GET['type_film']."'");

                            //----------------------------------
                            //------ Requête de liste
                            //----------------------------------
                            $req = $bdd->prepare("SELECT * FROM `type_film` ORDER BY type_film");
                            $req -> execute();

                            //----------------------------------
                            // Boucle pour remplir la table film
                            //----------------------------------
                            while($donnees = $req->fetch()){
                            //Afficher le résultat de la requête   
                            //echo $donnees['nom_film'];
                    ?>

                            <tr>
                                <td class="left_typefilm"><?= $donnees['type_film']; ?></td>
                                <td class="center_typefilm"><a href="#?type_film=<?php echo $donnees['type_film'] ?>" title="Éditer le type de film"><img class="edit_film" src="image/edit.png" alt="Editer le film"></a></td>
                                <td class="center_typefilm"><a href="#?type_film=<?php echo $donnees['type_film']; ?> &supp=ok" title="Supprimer le type de film"><img class="delete_film" src="image/delete.png" alt="Supprimer le film"></a></td>
                            </tr>
                    

                    <?php   }   ?>

                </table>
                
            </div>
        </div>

        <!------------------------------>
        <!-- Bouton Ajouter un film -->
        <!------------------------------>
        <div class="btn_add_typefilm">
            <div>
            <a href="#">Ajouter un type de film</a>
            </div>
        </div>


        <!------------------------------>
        <!-- Footer -->
        <!------------------------------>
        <footer></footer>
    
    </div> 
</body>
</html>

