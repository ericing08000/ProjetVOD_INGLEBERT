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
        <link rel="stylesheet" href="css/gestion_typecompte.css">
        <title>Gestion : <?php echo "Bienvenue ".$_SESSION['nom'];?></title>
    </head>

<body>

    <!------------------------------>
    <!--  Gestion table type compte -->
    <!------------------------------>
    <div id="gestion_typecompte" class="gestion_typecompte">
        <!------------------------------>
        <!-- Barre de navigation -->
        <!------------------------------>
        <div class="nav">
            <div>
                <h3>GESTION : TYPE COMPTE</h3>
            </div>
            <div class="logout">
                <a href="traitement/logout.php">SE DECONNECTER</a>
            </div>
        </div>

        <!------------------------------>
        <!-- Boutons -->
        <!------------------------------>
        <div class="btn_gestion_typecompte">
            <div class="active1"><a href="gestion.php">Film</a></div>
            <div class="active2"><a href="gestion_typefilm.php">Type de film</a></div>
            <div class="active3"><a href="gestion_compte.php">Compte</a></div>
            <div class="active4"><a href="gestion_typecompte.php">Type de compte</a></div>
        </div>

        <!------------------------------>
        <!-- La table type compte -->
        <!------------------------------>
        <div id="table_typecompte">
            <div class="table_gestion_typecompte">
                <table border="1px" cellspacing="0" cellpadding="5">
                    <tr>
                        <th class="item1_typecompte">Type du compte</th>
                        <th class="item2_typecompte">Editer</th>
                        <th class="item3_typecompte">Supprimer</th>
                    </tr>
                
                    <?php
                        include ('include/connect_local.php');
                            //----------------------------------
                            //------ Requête pour la suppression
                            //----------------------------------
                            // if(isset($_GET['supp'])) 
                            // $bdd -> exec ("DELETE FROM film WHERE type_film ='".$_GET['type_film']."'");

                            //----------------------------------
                            //------ Requête de liste
                            //----------------------------------
                            $req = $bdd->prepare("SELECT * FROM type_compte ORDER BY nom_typecompte");
                            $req -> execute();

                            //-----------------------------------------
                            // Boucle pour remplir la table type compte
                            //-----------------------------------------
                            while($donnees = $req->fetch()){
                            //Afficher le résultat de la requête   
                            //echo $donnees['nom_film'];
                    ?>

                            <tr>
                                <td class="left_typecompte"><?= $donnees['nom_typecompte']; ?></td>
                                <td class="center_typecompte"><a href="#?nom_typecompte=<?php echo $donnees['nom_typecompte'] ?>" title="Éditer le type de compte"><img class="edit_film" src="image/edit.png" alt="Editer le type de compte"></a></td>
                                <td class="center_typecompte"><a href="#?nom_typecompte=<?php echo $donnees['nom_typecompte']; ?> &supp=ok" title="Supprimer le type de compte"><img class="delete_film" src="image/delete.png" alt="Supprimer le compte"></a></td>
                            </tr>
                    

                    <?php   }   ?>

                </table>
                
            </div>
        </div>

        <!-------------------------------------->
        <!-- Bouton Ajouter un type de compte -->
        <!-------------------------------------->
        <div class="btn_add_typecompte">
            <div>
            <a href="#">Ajouter un type de compte</a>
            </div>
        </div>


        <!------------------------------>
        <!-- Footer -->
        <!------------------------------>
        <footer></footer>
    
    </div> 
</body>
</html>

