CREATE TABLE administrador ( usuario varchar(255) primary key,
nombre varchar(255) not null, email varchar(255) not null,
telefono varchar(255) not null, pass varchar(255) not null) engine=InnoDB;

CREATE TABLE producto ( id int not null auto_increment primary key,
categoria varchar(255) not null, nombre varchar(255) not null, 
descripcion varchar(255) not null, marca varchar(255) not null, 
cantidad int not null, precio decimal(10,2) not null ) engine=InnoDB;

CREATE TABLE cliente ( usuario varchar(255) primary key,
nombre varchar(255) not null, email varchar(255) not null, 
telefono varchar(255) not null, pass varchar(255) not null, 
direccion text not null, colonia varchar(255) not null,
ciudad varchar(255) not null, municipio varchar(255) not null, 
estado varchar(255) not null ) engine=InnoDB;

create table venta ( id int not null auto_increment primary key,
fecha datetime not null, fecha_e datetime not null,
total decimal(10,2) not null ) engine=InnoDB;



create table venta_producto ( idVenta int not null,
idProducto int not null, cant_venta int not null,
precio_venta decimal(10,2) not null, INDEX(idVenta),
INDEX(idProducto), foreign key (idVenta) references venta(id)
on delete cascade, foreign key (idProducto) references
producto(id) on delete cascade ) engine=InnoDB;