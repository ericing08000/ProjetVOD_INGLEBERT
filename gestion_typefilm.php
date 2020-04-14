<!-------------------------------->
<!-- Vérification de la session -->
<!-------------------------------->
<?php
    session_start();

    //Vérification pour se deconnecter et revenir à l'accueil
    if(isset($_GET['deconnect']) == 'ok'){
    $_session = array();
        session_destroy();
        header("location:index.php");
    }

    // if(isset($_SESSION['nom']))
    if($_SESSION['nom'])
    {
        //echo $_SESSION['nom'];
    }
    else
    {
        header("location:identifier.php");
    }

    $search = ""; 

    if(empty($_GET['type_film'])) {
        $search = "Rechercher";
    }
    else
    {
        if(!empty($_GET['type_film']))
        $search = "Afficher tout";
    } 

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/navbar_gestion.css">
        <link rel="stylesheet" href="css/gestion_typefilm.css">
        <link rel="stylesheet" href="css/deconnect_gestion.css">
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
        <?php include('include/navbar_gestion.php');?>
        
            <form class="search_typefilm" method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
                <label for=""><input type="text" name="type_film" id="type_film"/> </label>
                <button type="submit" name="search" value="ok" ><?php echo $search ;?></button>
            </form>
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
                        include ('include/connect_local.php');
                            //----------------------------------
                            //------ Requête pour la suppression
                            //----------------------------------
                            // if(isset($_GET['supp'])) 
                            // $bdd -> exec ("DELETE FROM film WHERE type_film ='".$_GET['type_film']."'");
                            
                            //----------------------------------
                            //----Requête pour la recherche-----
                            //----------------------------------
                            if(isset($_GET['type_film'])) 
                            $req = $bdd->prepare("SELECT * FROM `type_film` WHERE type_film LIKE '%".$_GET['type_film']."%' ORDER BY type_film ");
                            
                            else
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

    <!-------------------------------->
    <!-- scripts -->
    <!-------------------------------->
    <script src="js/jquery.js"></script>
    <script src="js/deconnect_gestion.js"></script>

</body>
</html>
<?php include ("traitement/deconnect_gestion.php");?>

