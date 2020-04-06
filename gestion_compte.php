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
        <link rel="stylesheet" href="css/gestion_compte.css">
        <title>Gestion : <?php echo "Bienvenue ".$_SESSION['nom'];?></title>
    </head>

<body>

    <!----------------------------------->
    <!--  Gestion table compte -->
    <!----------------------------------->
    <div id="gestion_compte" class="gestion_compte">
        <!------------------------------>
        <!-- Barre de navigation -->
        <!------------------------------>
        <div class="nav">
            <div>
                <h3>GESTION : COMPTE</h3>
            </div>
            <div class="logout">
                <a href="traitement/logout.php">SE DECONNECTER</a>
            </div>
        </div>

        <!------------------------------>
        <!-- Boutons -->
        <!------------------------------>
        <div class="btn_gestion_compte">
            <div class="active1"><a href="gestion.php">Film</a></div>
            <div class="active2"><a href="gestion_typefilm.php">Type de film</a></div>
            <div class="active3"><a href="gestion_compte.php">Compte</a></div>
            <div class="active4"><a href="gestion_typecompte.php">Type de compte</a></div>
        </div>

        <!------------------------------>
        <!-- La table compte -->
        <!------------------------------>
        <div id="table_compte">
            <div class="table_gestion_compte">
                <table border="1px" cellspacing="0" cellpadding="5">
                    <tr>
                        <th class="item1_compte">Compte</th>
                        <th class="item2_compte">Type compte</th>
                        <th class="item3_compte">Editer</th>
                        <th class="item4_compte">Supprimer</th>
                    </tr>
                
                    <?php
                        include ('include/connect_bdd.php');
                            //----------------------------------
                            //------ Requête pour la suppression
                            //----------------------------------
                            // if(isset($_GET['supp'])) 
                            // $bdd -> exec ("DELETE FROM film WHERE nom_film ='".$_GET['nom_film']."'");

                            //----------------------------------
                            //------ Requête de liste
                            //----------------------------------
                            $req = $bdd->prepare("SELECT c.nom,t.nom_typecompte,c.mdp FROM compte as c, type_compte as t WHERE c.id_typecompte=t.id_typecompte");
                            $req -> execute();

                            //----------------------------------
                            // Boucle pour remplir la table film
                            //----------------------------------
                            while($donnees = $req->fetch()){
                            //Afficher le résultat de la requête   
                            //echo $donnees['nom_film'];
                    ?>

                            <tr>
                                <td class="nom_compte"><?= $donnees['nom']; ?></td>
                                <td class="compte"><?= $donnees['nom_typecompte']; ?></td>
                                <td class="compte"><a href="#?nom=<?php echo $donnees['nom'] ?>" title="Éditer le compte"><img class="edit_film" src="image/edit.png" alt="Editer le film"></a></td>
                                <td class="compte"><a href="#?nom=<?php echo $donnees['nom']; ?> &supp=ok" title="Supprimer le compte"><img class="delete_film" src="image/delete.png" alt="Supprimer le film"></a></td>
                            </tr>
                    

                    <?php   }   ?>

                </table>
                
            </div>
        </div>

        <!------------------------------>
        <!-- Bouton Ajouter un compte -->
        <!------------------------------>
        <div class="btn_add_compte">
            <div>
            <a href="#">Ajouter un compte</a>
            </div>
        </div>


        <!------------------------------>
        <!-- Footer -->
        <!------------------------------>
        <footer></footer>
    
    </div> 
</body>
</html>

