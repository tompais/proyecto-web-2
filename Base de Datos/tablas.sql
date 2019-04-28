DROP DATABASE IF EXISTS pw;

CREATE DATABASE pw;

USE pw;

CREATE TABLE Direccion(
    ID integer NOT NULL AUTO_INCREMENT,
    Calle varchar(30) NOT NULL,
    Altura integer NOT NULL,
    Piso integer,
    Departamento varchar(3),
    constraint PK_Direccion_ID primary key (ID)
);

CREATE TABLE Provincia(
    ID integer NOT NULL AUTO_INCREMENT,
    Nombre varchar(30) NOT NULL,
    CodigoPostal integer NOT NULL,
    constraint PK_Provincia_ID primary key (ID)
);

CREATE TABLE Usuario(
    ID integer NOT NULL AUTO_INCREMENT,
    Nombre varchar(30) NOT NULL,
    Apellido varchar(30) NOT NULL,
    FechaNac date NOT NULL,
    Username varchar(30) UNIQUE NOT NULL,
    UPassword varchar(100) NOT NULL,
    Telefono integer UNIQUE,
    ID_Direccion integer,
    ID_Provincia integer,
    Email varchar(30) UNIQUE NOT NULL,
    constraint PK_Usuario_ID primary key (ID),
    constraint FK_Usuario_Direccion foreign key (ID_Direccion) references Direccion (ID),
    constraint FK_Usuario_Provincia foreign key (ID_Provincia) references Provincia (ID)
);

CREATE TABLE Permiso(
    ID integer NOT NULL AUTO_INCREMENT,
    Nombre varchar(30) UNIQUE NOT NULL,
    constraint PK_Permiso_ID primary key (ID)
);

CREATE TABLE PermisoUsuario(
    ID_Permiso integer NOT NULL,
    ID_Usuario integer NOT NULL,
    primary key (ID_Permiso, ID_Usuario),
    constraint FK_PermisoUsuario_Permiso foreign key (ID_Permiso) references Permiso (ID),
    constraint FK_PermisoUsuario_Usuario foreign key (ID_Usuario) references Usuario (ID)
);