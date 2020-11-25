#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Studios
#------------------------------------------------------------

CREATE TABLE Studios(
        idStudio        Int  Auto_increment  NOT NULL ,
        nomStudio       Varchar (50) NOT NULL ,
        paysStudio      Varchar (50) NOT NULL ,
        fondateurStudio Varchar (50) NOT NULL ,
        creationStudio  Date NOT NULL
	,CONSTRAINT Studios_PK PRIMARY KEY (idStudio)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Genres
#------------------------------------------------------------

CREATE TABLE Genres(
        idGenre      Int  Auto_increment  NOT NULL ,
        libelleGenre Varchar (50) NOT NULL ,
        descGenre    Text NOT NULL
	,CONSTRAINT Genres_PK PRIMARY KEY (idGenre)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Films
#------------------------------------------------------------

CREATE TABLE Films(
        idFilm    Int  Auto_increment  NOT NULL ,
        nomFilm   Varchar (50) NOT NULL ,
        dateFilm  Date NOT NULL ,
        coutFilm  Double NOT NULL ,
        dureeFilm Int NOT NULL ,
        synopFilm Text NOT NULL ,
        idStudio  Int NOT NULL ,
        idGenre   Int NOT NULL
	,CONSTRAINT Films_PK PRIMARY KEY (idFilm)

	,CONSTRAINT Films_Studios_FK FOREIGN KEY (idStudio) REFERENCES Studios(idStudio)
	,CONSTRAINT Films_Genres0_FK FOREIGN KEY (idGenre) REFERENCES Genres(idGenre)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Realisateurs
#------------------------------------------------------------

CREATE TABLE Realisateurs(
        idRealisateur              Int  Auto_increment  NOT NULL ,
        nomRealisateur             Varchar (50) NOT NULL ,
        prenomRealisateur          Varchar (50) NOT NULL ,
        dateDeNaissanceRealisateur Date NOT NULL ,
        paysOrigineRealisateur     Varchar (50) NOT NULL
	,CONSTRAINT Realisateurs_PK PRIMARY KEY (idRealisateur)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Acteurs
#------------------------------------------------------------

CREATE TABLE Acteurs(
        idActeur              Int  Auto_increment  NOT NULL ,
        nomActeur             Varchar (50) NOT NULL ,
        prenomActeur          Varchar (50) NOT NULL ,
        origineActeur         Varchar (50) NOT NULL ,
        dateDeNaissanceActeur Date NOT NULL
	,CONSTRAINT Acteurs_PK PRIMARY KEY (idActeur)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Realisation
#------------------------------------------------------------

CREATE TABLE Realisation(
        idRealisateur        Int NOT NULL ,
        idFilm               Int NOT NULL ,
        dateDebutRealisation Date NOT NULL ,
        dateFinRealisation   Date NOT NULL
	,CONSTRAINT Realise_PK PRIMARY KEY (idRealisateur,idFilm)

	,CONSTRAINT Realise_Realisateurs_FK FOREIGN KEY (idRealisateur) REFERENCES Realisateurs(idRealisateur)
	,CONSTRAINT Realise_Films0_FK FOREIGN KEY (idFilm) REFERENCES Films(idFilm)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Participation
#------------------------------------------------------------

CREATE TABLE Participation(
        idActeur Int NOT NULL ,
        idFilm   Int NOT NULL
	,CONSTRAINT Joue_PK PRIMARY KEY (idActeur,idFilm)

	,CONSTRAINT Joue_Acteurs_FK FOREIGN KEY (idActeur) REFERENCES Acteurs(idActeur)
	,CONSTRAINT Joue_Films0_FK FOREIGN KEY (idFilm) REFERENCES Films(idFilm)
)ENGINE=InnoDB;

