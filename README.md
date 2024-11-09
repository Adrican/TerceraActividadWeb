Nuestra Base de Datos tiene como nombre "actividad3" y la tabla "users" se puede crear con la siguiente snetencia SQL desde phpmyadmin.
CREATE TABLE actividad3.users (
  id INT NOT NULL AUTO_INCREMENT,
  username VARCHAR(255) NOT NULL,
  password VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE (`username`)
) ENGINE = InnoDB;
