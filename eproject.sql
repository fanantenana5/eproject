drop table if exists CATEGORIETACHE;

drop table if exists PROFIL;

drop table if exists PROJET;

drop table if exists TACHE;

drop table if exists UTILISATEUR;

create view utilisateurProfil AS (
   select u.idutilisateur,p.idProfil,p.designation as Profil,p.valeur as valeurProfil,u.nom,u.PASSWORD 
   from utilisateur u JOIN Profil p ON u.idProfil = p.idProfil
);

/*==============================================================*/
/* Table : CATEGORIETACHE                                       */
/*==============================================================*/
create table CATEGORIETACHE
(
   IDCATEGORIETACHE     int not null auto_increment,
   DESIGNATION          varchar(15) not null,
   primary key (IDCATEGORIETACHE)
);

/*==============================================================*/
/* Table : PROFIL                                               */
/*==============================================================*/
create table PROFIL
(
   IDPROFIL             int not null auto_increment,
   DESIGNATION          varchar(20) not null,
   VALEUR               int not null,
   primary key (IDPROFIL)
);

/*==============================================================*/
/* Table : PROJET                                               */
/*==============================================================*/
create table PROJET
(
   IDPROJET             int not null auto_increment,
   NOM                  varchar(20) not null,
   DATEDEBUT            date not null,
   DATEFIN              date,
   primary key (IDPROJET)
);

/*==============================================================*/
/* Table : TACHE                                                */
/*==============================================================*/
create table TACHE
(
   IDTACHE              int not null auto_increment,
   IDPROJET             int not null,
   IDCATEGORIETACHE     int not null,
   IDUTILISATEUR        int,
   NOM                  varchar(20) not null,
   DETAILS              varchar(1),
   DUREE                int not null,
   primary key (IDTACHE)
);

/*==============================================================*/
/* Table : UTILISATEUR                                          */
/*==============================================================*/
create table UTILISATEUR
(
   IDUTILISATEUR        int not null auto_increment,
   IDPROFIL             int,
   NOM                  varchar(50) not null,
   PASSWORD             varchar(100) not null,
   primary key (IDUTILISATEUR)
);

alter table TACHE add constraint FK_REFERENCE_2 foreign key (IDPROJET)
      references PROJET (IDPROJET) on delete restrict on update restrict;

alter table TACHE add constraint FK_REFERENCE_3 foreign key (IDCATEGORIETACHE)
      references CATEGORIETACHE (IDCATEGORIETACHE) on delete restrict on update restrict;

alter table TACHE add constraint FK_REFERENCE_4 foreign key (IDUTILISATEUR)
      references UTILISATEUR (IDUTILISATEUR) on delete restrict on update restrict;

alter table UTILISATEUR add constraint FK_REFERENCE_1 foreign key (IDPROFIL)
      references PROFIL (IDPROFIL) on delete restrict on update restrict;
