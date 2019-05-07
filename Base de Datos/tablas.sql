DROP DATABASE IF EXISTS pw;

CREATE DATABASE pw;

USE pw;

CREATE TABLE Ubicacion(
    Id integer NOT NULL AUTO_INCREMENT,
    Longitud integer NOT NULL,
    Latitud integer NOT NULL,
    constraint PK_Ubicacion primary key (Id)
);

CREATE TABLE Rol(
    Id integer NOT NULL AUTO_INCREMENT,
    Nombre varchar(30) UNIQUE NOT NULL,
    constraint PK_Rol primary key (Id)
);

CREATE TABLE Usuario(
    Id integer NOT NULL AUTO_INCREMENT,
    Nombre varchar(30) NOT NULL,
    Apellido varchar(30) NOT NULL,
    FechaNac date NOT NULL,
    Username varchar(30) UNIQUE NOT NULL,
    UPassword varchar(100) NOT NULL,
    Telefono integer NOT NULL,
    UbicacionId integer,
    RolId integer NOT NULL,
    Email varchar(30) UNIQUE NOT NULL,
    FechaBaneo date,
    FechaBaja date,
    constraint PK_Usuario primary key (Id),
    constraint FK_Usuario_Ubicacion foreign key (UbicacionId) references Ubicacion (Id),
    constraint FK_Usuario_Rol foreign key (RolId) references Rol (Id)
);

CREATE TABLE Permiso(
	Id integer NOT NULL auto_increment,
    Nombre varchar(30) UNIQUE NOT NULL,
    constraint PK_Permiso primary key (Id)
);

CREATE TABLE PermisoRol(
	Id integer auto_increment not null unique,
    PermisoId integer NOT NULL,
    RolId integer NOT NULL,
    constraint PK_PermisoRol primary key (Id, PermisoId, RolId),
    constraint FK_PermisoRol_Permiso foreign key (PermisoId) references Permiso (Id),
    constraint FK_PermisoRol_Rol foreign key (RolId) references Rol (Id)
);

INSERT INTO Rol (Nombre) VALUES ("Administrador"), 
								("Moderador"),
                                ("Usuario");

INSERT INTO Usuario (Nombre, Apellido, FechaNac, Username, UPassword, Email, RolId, Telefono)
VALUES ("Ezequiel", "Allio", '1996-05-07', "ezequiel", "eb6a2f962bb597f98b2c2b9c4698da19710ddfa3", "ezequiel.allio@gmail.com", 2, 1121563869),
		("Tomás", "Pais", "1995-11-15", "tpais", "c720f95d7b12b6fd252b432853bf8c0a118dd4a1", "tomas.j.pais@gmail.com", 2, 1132075813),
        ("Alejo", "Martínez", "1998-12-23", "alejovoley14", "3de5110c9559591d0178269408ecdd6d57131818", "pupe893@gmail.com", 2, 1144188686),
        ("Sebastián", "Reales", "1989-12-12", "falsoalexis", "bfa643708c7876c74d5088ea7bdf50de7c56e6b6", "falso.alexis@gmail.com", 2, 1128232503),
        ("Super", "User", "1810-05-25", "superuser", "ba2e09db98ee61790c5055b8f643c5e9b1c3f3f8", "super.user@gmail.com", 1, 111234567);