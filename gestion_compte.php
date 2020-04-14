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

    if(empty($_GET['nom'])) {
        $search = "Rechercher";
    }
    else
    {
        if(!empty($_GET['nom']))
        $search = "Afficher tout";
    }

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/navbar_gestion.css">
        <link rel="stylesheet" href="css/gestion_compte.css">
        <link rel="stylesheet" href="css/deconnect_gestion.css">
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
        <?php include('include/navbar_gestion.php');?>
        
        <form class="search_compte" method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
                <label for=""><input type="text" name="nom" id="nom"/></label>
                <button type="submit" name="search" value="ok" ><?php echo $search ;?></button>
            </form>
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
                        include ('include/connect_local.php');
                            //----------------------------------
                            //------ Requête pour la suppression
                            //----------------------------------
                            // if(isset($_GET['supp'])) 
                            // $bdd -> exec ("DELETE FROM film WHERE nom_film ='".$_GET['nom_film']."'");

                            //----------------------------------
                            //---Requête pour la recherche------
                            //----------------------------------
                            
                            if(isset($_GET['nom']))
                            $req = $bdd->prepare("SELECT c.nom,t.nom_typecompte,c.mdp FROM compte as c, type_compte as t WHERE c.id_typecompte=t.id_typecompte AND nom LIKE '%".$_GET['nom']."%' ORDER BY nom ");
                            
                            
                            else
                            
                            //----------------------------------
                            //------ Requête de liste
                            //----------------------------------
                            $req = $bdd->prepare("SELECT c.nom,t.nom_typecompte,c.mdp FROM compte as c, type_compte as t WHERE c.id_typecompte=t.id_typecompte ORDER BY nom");
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
    <!-------------------------------->
    <!-- scripts -->
    <!-------------------------------->
    <script src="js/jquery.js"></script>
    <script src="js/deconnect_gestion.js"></script>
</body>
</html>
<?php include ("traitement/deconnect_gestion.php");?>

