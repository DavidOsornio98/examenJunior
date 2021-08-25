CREATE TABLE IF NOT EXISTS productos(
    id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre text,
    precio DECIMAL(9,2),
    imagen text
);
CREATE TABLE IF NOT EXISTS carrito_usuarios(
    id_sesion VARCHAR(255) NOT NULL,
    id_producto BIGINT UNSIGNED NOT NULL,
    FOREIGN KEY (id_producto) REFERENCES productos(id)
    ON UPDATE CASCADE ON DELETE CASCADE
);

create table usuarios (id int primary key auto_increment, nombre text , correo text, edad int, pass text, sexo text);
insert into usuarios values(null,"David","deividdg6273@gmail.com", 23, "qwerty", "Hombre");

insert into productos (nombre, precio, imagen) values("alopurinol",25.50, "productos/alopurinol.jpg");
insert into productos (nombre, precio, imagen) values("amoxicilina",24.50, "productos/amoxicilina.jpg");
insert into productos (nombre, precio, imagen) values("ampicilina",44.50, "productos/ampicilina.jpg");
insert into productos (nombre, precio, imagen) values("antropina",54.50, "productos/antropina.jpg");
insert into productos (nombre, precio, imagen) values("aspirina",64.50, "productos/aspirina.jpg");
insert into productos (nombre, precio, imagen) values("captopril",75.50, "productos/captopril.jpg");
insert into productos (nombre, precio, imagen) values("carbamazepina",65.50, "productos/carbamazepina.jpg");
insert into productos (nombre, precio, imagen) values("clonazepam",75.50, "productos/clonazepam.jpg");
insert into productos (nombre, precio, imagen) values("cloranfenicol",34.50, "productos/cloranfenicol.jpg");
insert into productos (nombre, precio, imagen) values("cloroquina",64.00, "productos/cloroquina.jpg");

insert into productos (nombre, precio, imagen) values("codeina",64.65, "productos/codeina.jpg");
insert into productos (nombre, precio, imagen) values("deferoxamina",656.75, "productos/deferoxamina.jpg");
insert into productos (nombre, precio, imagen) values("dexametasona",65.44, "productos/dexametasona.jpg");
insert into productos (nombre, precio, imagen) values("diazepam",475.74,"productos/diazepam.jpg");
insert into productos (nombre, precio, imagen) values("fenobarbital",765.75, "productos/fenobarbital.jpg");
insert into productos (nombre, precio, imagen) values("hidrocortisona",85.86, "productos/hidrocortisona.jpg");
insert into productos (nombre, precio, imagen) values("ibuprofeno",65.87, "productos/ibuprofeno.jpg");
insert into productos (nombre, precio, imagen) values("lidocaina",756.75, "productos/lidocaina.jpg");
insert into productos (nombre, precio, imagen) values("morfina",75.34, "productos/morfina.jpg");
insert into productos (nombre, precio, imagen) values("naloxona",866.56, "productos/naloxona.jpg");

insert into productos (nombre, precio, imagen) values("omeprazol",454.35, "productos/omeprazol.jpg");
insert into productos (nombre, precio, imagen) values("oseltamivir",325.00, "productos/oseltamivir.jpg");
insert into productos (nombre, precio, imagen) values("pirantel",254.75, "productos/pirantel.jpg");
insert into productos (nombre, precio, imagen) values("pirazinamida",365.76, "productos/pirazinamida.jpg");
insert into productos (nombre, precio, imagen) values("prazicuantel",756.45, "productos/prazicuantel.jpg");
insert into productos (nombre, precio, imagen) values("quetiapina",864.35, "productos/quetiapina.jpg");
insert into productos (nombre, precio, imagen) values("salbutamol",364.75, "productos/salbutamol.jpg");
insert into productos (nombre, precio, imagen) values("sertalina",465.25, "productos/sertalina.jpg");
insert into productos (nombre, precio, imagen) values("tribedoce",65.65,"productos/tribedoce.jpg");
insert into productos (nombre, precio, imagen) values("vitaminaC",654.46, "productos/vitaminaC.jpg");