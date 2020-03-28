#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: realisateur
#------------------------------------------------------------

CREATE TABLE realisateur(
        id_realisateur  Int  Auto_increment  NOT NULL ,
        nom_realisateur Varchar (500) NOT NULL
	,CONSTRAINT realisateur_PK PRIMARY KEY (id_realisateur)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: type_film
#------------------------------------------------------------

CREATE TABLE type_film(
        id_typefilm Int  Auto_increment  NOT NULL ,
        type_film   Varchar (50) NOT NULL
	,CONSTRAINT type_film_PK PRIMARY KEY (id_typefilm)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: film
#------------------------------------------------------------

CREATE TABLE film(
        id_film          Int  Auto_increment  NOT NULL ,
        nom_film         Varchar (100) NOT NULL ,
        date_sortie_film Date NOT NULL ,
        synopsie_film    Varchar (500) NOT NULL ,
        annonce_film     Varchar (500) NOT NULL ,
        image_film       Blob NOT NULL ,
        id_realisateur   Int ,
        id_typefilm      Int NOT NULL
	,CONSTRAINT film_PK PRIMARY KEY (id_film)

	,CONSTRAINT film_realisateur_FK FOREIGN KEY (id_realisateur) REFERENCES realisateur(id_realisateur)
	,CONSTRAINT film_type_film0_FK FOREIGN KEY (id_typefilm) REFERENCES type_film(id_typefilm)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: acteur
#------------------------------------------------------------

CREATE TABLE acteur(
        id_acteur  Int  Auto_increment  NOT NULL ,
        nom_acteur Varchar (50) NOT NULL
	,CONSTRAINT acteur_PK PRIMARY KEY (id_acteur)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: type_compte
#------------------------------------------------------------

CREATE TABLE type_compte(
        id_typecompte  Int  Auto_increment  NOT NULL ,
        nom_typecompte Varchar (50) NOT NULL
	,CONSTRAINT type_compte_PK PRIMARY KEY (id_typecompte)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: compte
#------------------------------------------------------------

CREATE TABLE compte(
        id_compte     Int  Auto_increment  NOT NULL ,
        nom_compte    Varchar (50) NOT NULL ,
        id_typecompte Int NOT NULL
	,CONSTRAINT compte_PK PRIMARY KEY (id_compte)

	,CONSTRAINT compte_type_compte_FK FOREIGN KEY (id_typecompte) REFERENCES type_compte(id_typecompte)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: jouer
#------------------------------------------------------------

CREATE TABLE jouer(
        id_film   Int NOT NULL ,
        id_acteur Int NOT NULL
	,CONSTRAINT jouer_PK PRIMARY KEY (id_film,id_acteur)

	,CONSTRAINT jouer_film_FK FOREIGN KEY (id_film) REFERENCES film(id_film)
	,CONSTRAINT jouer_acteur0_FK FOREIGN KEY (id_acteur) REFERENCES acteur(id_acteur)
)ENGINE=InnoDB;

