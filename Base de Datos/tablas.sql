DROP DATABASE IF EXISTS pw;

CREATE DATABASE pw;

USE pw;

CREATE TABLE Ubicacion(
    ID integer NOT NULL AUTO_INCREMENT,
    Longitud integer NOT NULL,
    Latitud integer NOT NULL,
    constraint PK_Ubicacion_ID primary key (ID)
);

CREATE TABLE Usuario(
    ID integer NOT NULL AUTO_INCREMENT,
    Nombre varchar(30) NOT NULL,
    Apellido varchar(30) NOT NULL,
    FechaNac date NOT NULL,
    Username varchar(30) UNIQUE NOT NULL,
    UPassword varchar(100) NOT NULL,
    Telefono integer UNIQUE,
    ID_Ubicacion integer,
    Email varchar(30) UNIQUE NOT NULL,
    FechaBaneo date,
    FechaBaja date,
    Estado varchar(1),
    constraint PK_Usuario_ID primary key (ID),
    constraint FK_Usuario_Ubicacion foreign key (ID_Ubicacion) references Ubicacion (ID)
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

INSERT INTO Usuario (Nombre, Apellido, FechaNac, Username, UPassword, Email, Estado)
VALUES ("Ezequiel", "Allio", '1996-05-07', "ezequiel", "eb6a2f962bb597f98b2c2b9c4698da19710ddfa3", "ezequiel.allio@gmail.com", "P");

INSERT INTO Permiso (Nombre) VALUES ("Administrador");
INSERT INTO Permiso (Nombre) VALUES ("Moderador");
INSERT INTO Permiso (Nombre) VALUES ("Usuario");

INSERT INTO PermisoUsuario (ID_Permiso, ID_Usuario) VALUES (1, 1);