CREATE DATABASE tutoriales;
USE tutoriales;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

-- Ejemplo de inserción
INSERT INTO usuarios (username, password) VALUES ('admin', '1234');
INSERT INTO usuarios (username, password) VALUES ('profesor', 'abcd');
INSERT INTO usuarios (username, password) VALUES ('alumno', 'alumno123');
