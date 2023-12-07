


CREATE TABLE Reservas (
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
    FechaModificacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE Contacto (
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
 ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

