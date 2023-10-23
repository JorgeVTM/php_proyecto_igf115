CREATE DATABASE universidad;

use universidad;

CREATE TABLE cursos(
  id INT PRIMARY KEY AUTO_INCREMENT=1,
  nombre VARCHAR(255) NOT NULL,
  creditos INT NOT NULL
);
