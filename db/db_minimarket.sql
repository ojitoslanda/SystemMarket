create database db_minimarket;
use db_minimarket;

create table usuarios(
 id_usuario int auto_increment primary key,
 nombre varchar(100) not null,
 correo varchar(100) unique not null,
 pass varchar(100) not null,
 roles enum("superadmin","admin","cajero","cliente") not null default "cliente"
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

create table categorias_productos(
id_categoria int auto_increment primary key,
  seccion varchar(50) not null,
  descripcion varchar(50) not null
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

create table productos(
id_producto int auto_increment primary key,
id_categoria int NOT NULL,
nombre_producto varchar(100) not null,
precio decimal(10,2) not null,
imagen_url varchar(500) not null,
stock int not null default 0,
estado ENUM("activo","inactivo","No disponible") not null default "activo",
codigo_qr varchar(100) unique not null,
id_usuario int NOT NULL,
foreign key(id_usuario) references usuarios(id_usuario),
foreign key(id_categoria) references categorias_productos(id_categoria)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# REGISTRAMOS DATOS A LA TABLE USUARIOS
INSERT INTO usuarios(nombre,correo,pass)
values('Kenji Alias','hola@senati.pe','1234');
#CONSULTAMOS LA TABLE USUARIOS
SELECT * FROM usuarios;






