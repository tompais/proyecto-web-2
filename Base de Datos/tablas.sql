DROP DATABASE IF EXISTS pw;

CREATE DATABASE pw;

USE pw;

CREATE TABLE Ubicacion(
    Id integer NOT NULL AUTO_INCREMENT,
    Longitud integer NOT NULL,
    Latitud integer NOT NULL,
    constraint PK_Ubicacion primary key (Id)
);

CREATE TABLE Usuario(
    Id integer NOT NULL AUTO_INCREMENT,
    Nombre varchar(30) NOT NULL,
    Apellido varchar(30) NOT NULL,
    FechaNac date NOT NULL,
    Username varchar(30) UNIQUE NOT NULL,
    UPassword varchar(100) NOT NULL,
    Telefono integer UNIQUE,
    UbicacionId integer,
    Email varchar(30) UNIQUE NOT NULL,
    FechaBaneo date,
    FechaBaja date,
    Estado varchar(1),
    constraint PK_Usuario primary key (Id),
    constraint FK_Usuario_Ubicacion foreign key (UbicacionId) references Ubicacion (Id)
);

CREATE TABLE Permiso(
    Id integer NOT NULL AUTO_INCREMENT,
    Nombre varchar(30) UNIQUE NOT NULL,
    constraint PK_Permiso primary key (Id)
);

CREATE TABLE PermisoUsuario(
	Id integer auto_increment not null unique,
    PermisoId integer NOT NULL,
    UsuarioId integer NOT NULL,
    constraint PK_PermisoUsuario primary key (PermisoId, UsuarioId),
    constraint FK_PermisoUsuario_Permiso foreign key (PermisoId) references Permiso (Id),
    constraint FK_PermisoUsuario_Usuario foreign key (UsuarioId) references Usuario (Id)
);

INSERT INTO Usuario (Nombre, Apellido, FechaNac, Username, UPassword, Email, Estado)
VALUES ("Ezequiel", "Allio", '1996-05-07', "ezequiel", "eb6a2f962bb597f98b2c2b9c4698da19710ddfa3", "ezequiel.allio@gmail.com", "P");

INSERT INTO Permiso (Nombre) VALUES ("Administrador");
INSERT INTO Permiso (Nombre) VALUES ("Moderador");
INSERT INTO Permiso (Nombre) VALUES ("Usuario");

INSERT INTO PermisoUsuario (PermisoId, UsuarioId) VALUES (1, 1);