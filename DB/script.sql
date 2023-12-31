CREATE DATABASE consultorio;

USE consultorio;

CREATE TABLE usuarios (
  Id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  Nombre VARCHAR(255) NOT NULL,
  Correo VARCHAR(255) NOT NULL,
  Password VARCHAR(255) NOT NULL,
  Rol VARCHAR(50) NOT NULL DEFAULT 'Cliente',
  UNIQUE (Correo)
) ENGINE = InnoDB;

CREATE TABLE consultas (
  Id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  Nombre VARCHAR(50) NOT NULL,
  Telefono VARCHAR(30) NOT NULL,
  Correo VARCHAR(50) NOT NULL,
  Detalle TEXT NOT NULL
) ENGINE = InnoDB;

CREATE TABLE reservas (
  ID INT AUTO_INCREMENT PRIMARY KEY,
  Nombre VARCHAR(255) NOT NULL,
  Apellidos VARCHAR(255) NOT NULL,
  Correo VARCHAR(255) NOT NULL,
  Servicio VARCHAR(255) NOT NULL,
  Fecha DATE NOT NULL,
  Hora TIME NOT NULL,
  MensajeAdicional TEXT,
  Estado VARCHAR(20) NOT NULL,
  FechaCreacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FechaModificacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON
  UPDATE
    CURRENT_TIMESTAMP
);

CREATE TABLE contacto (
  Id INT AUTO_INCREMENT PRIMARY KEY,
  Descripcion VARCHAR(255) NOT NULL
);

CREATE TABLE cita (
  Id int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
  Especialista varchar(20) NOT NULL,
  CorreoEspecialista varchar(50) NOT NULL,
  CorreoCliente varchar(50) NOT NULL,
  Especialidad varchar(20) NOT NULL,
  Descripcion text NOT NULL,
  Fecha datetime,
  Notas text
 ) ENGINE=InnoDB;

CREATE TABLE `reserva` (
  `Id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `Nombre` varchar(100) NOT NULL,
  `Telefono` INT NOT NULL,
  `Correo` varchar(100) NOT NULL,
  `Fecha` DATE NOT NULL,
  `Servicio` varchar(50) NOT NULL
) ENGINE=InnoDB;

CREATE TABLE `consultorio`.`productos` 
(`codigo` INT NOT NULL AUTO_INCREMENT , 
`nombre` VARCHAR(100) NOT NULL , 
`detalle` TEXT NOT NULL , 
`imagen` VARCHAR(255) NOT NULL , 
`precio` DOUBLE NOT NULL , 
PRIMARY KEY (codigo)) ENGINE = InnoDB;


INSERT INTO `consultorio`.`productos` (`nombre`, `detalle`, `imagen`, `precio`) VALUES 
('Tensiometro', 'Presion Arterial', 'https://imagenes.elpais.com/resizer/qI6eaz2Hrt4IPLPNGIExmxbAIR8=/1960x0/cloudfront-eu-central-1.images.arcpublishing.com/prisa/7PX5V67QOVAJ7BSPHWALYTBSLE.png', 59.99),
('Glucometro', 'Medir Azucar en sangre', 'https://www.lavanguardia.com/files/content_image_mobile_filter/uploads/2022/10/27/635a8e958741d.png', 29.99),
('Paracetamol', 'Analgesico', 'https://paracetamol.bayer.com.ar/sites/g/files/vrxlpx30376/files/2022-10/PACK%20PARACETAMOL%20BAYER.png?imwidth=5000', 7.99),
('Antigripal', 'Tratamiento de la gripe', 'https://walmartcr.vtexassets.com/arquivos/ids/354891/Antigripal-Chinoin-Antifludes-M-s-12-Tabletas-1-27079.jpg?v=638019853163870000', 9.99);


INSERT INTO `consultorio`.`productos` (`nombre`, `detalle`, `imagen`, `precio`) VALUES 
('Termometro', 'Medir temperatura corporal', 'https://maccglobalservice.com/wp-content/uploads/2021/03/4-5.png', 19.99),
('Silla de Ruedas', 'Movilizacion', 'https://www.unimart.com/cdn/shop/products/WC001US_Silla_de_Ruedas_18_con_Apoya_Brazos_Fijos_Rueda.png?v=1679331184', 69.99),
('Balanza', 'Instrumento de pesaje', 'https://goltech.net/wp-content/uploads/2022/12/balanza-medica-KERN-01.jpg', 69.99),
('Guantes', 'Equipo de proteccion personal', 'https://www.mayordent.cl/wp-content/uploads/2020/03/nitrilo-con.jpg', 5.99),
('Salbutamol', 'Inhalador', 'https://farmaprime.com.co/wp-content/uploads/2023/01/7500435158749-2.jpg', 9.99),
('Aspirina', 'Medicamento para el dolor', 'https://s1.eestatic.com/2018/06/08/ciencia/salud/farmacologia-farmacologia_clinica-salud_313481328_81018046_1706x960.jpg', 11.99);

CREATE TABLE `consultorio`.`facturas` 
(`codigo` INT NOT NULL AUTO_INCREMENT , 
`codigo_usuario` INT NOT NULL ,
`correo` VARCHAR(255) NOT NULL ,
`total` DOUBLE NOT NULL ,
`fecha_hora` DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL ,
PRIMARY KEY (codigo) ,
FOREIGN KEY (codigo_usuario) REFERENCES usuarios(Id)) ENGINE = InnoDB;

CREATE TABLE `consultorio`.`lineas_facturas` 
(`linea` INT NOT NULL ,
`codigo_factura` INT NOT NULL ,
`codigo_producto` INT NOT NULL ,
`subtotal` DOUBLE NOT NULL ,
PRIMARY KEY (linea, codigo_factura) ,
FOREIGN KEY (codigo_factura) REFERENCES facturas(codigo) ,
FOREIGN KEY (codigo_producto) REFERENCES productos(codigo)) ENGINE = InnoDB;
