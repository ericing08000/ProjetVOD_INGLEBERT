<!------------------------------------------->
<!--  Confirmation suppression type compte -->
<!------------------------------------------->
    <div id="del_typecompte" class="del_typecompte">
        <!------------------------------------>
        <!-- Barre de navigation -->
        <!------------------------------------>
        <div class="nav_del_typecompte">
            <div>
                <h3>SUPPRIMER TYPE COMPTE </h3>
            </div>
            <div>
                <a class="close_del_typecompte" href="gestion_typecompte.php" title="Fermer Supprimer revenir à Gestion"><img src="image/close.png" alt="fermer fenêtre"></a>
            </div>
        </div>

        <!--------------------->
        <!-- formulaire -->
        <!--------------------->
        <div class="form_del_typecompte">
            <form id="form_del_typecompte" method="post" action="#">
                <fieldset>
                    <p>Voulez-vous vraiment supprimer ?</p>
                </fieldset>
                
                <fieldset class="btn_del_typecompte">
                    <a href="gestion_typecompte.php"><button class="annule_del_typecompte" name="annuler" type="button">ANNULER</button></a>
                    <a href="?supp=ok"><button class="valide_del_typecompte" name="valider" type="button">VALIDER</button></a>
                </fieldset>
            </form>
        </div>

        <!------------------------->
        <!-- footer -->
        <!------------------------->
        <footer></footer>

