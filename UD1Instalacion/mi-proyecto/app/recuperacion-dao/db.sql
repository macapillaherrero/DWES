CREATE DATABASE recuperacion;
USE recuperacion;
CREATE TABLE usuarios (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(100),
  apellidos VARCHAR(100),
  pass VARCHAR(255),
  fecha DATETIME
);