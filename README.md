# ProjetVOD_INGLEBERT
Création projet VOD - Fil rouge


$sql = "SELECT f.nom_film,a.nom_acteur FROM jouer_dans as j, film as f, acteur as a WHERE j.id_film=f.id_film AND j.id_acteur=a.id_acteur";