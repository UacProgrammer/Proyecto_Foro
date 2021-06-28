CREATE DATABASE foro_rebeldes
USE foro_rebeldes;
CREATE TABLE usuarios
(
    usuario_id   INT(8) NOT NULL AUTO_INCREMENT  ,-- Numero de Usuario que se auto-incrementa--
    usuario_nombre   VARCHAR(30) NOT NULL,      -- Nombre del usuario --
    usuario_email  VARCHAR(255) NOT NULL,       -- Correo Electronico --
    usuario_pass   VARCHAR(255) NOT NULL,       -- Contraseña del usuario --
    usuario_date   DATETIME NOT NULL,           -- FECHA --
    usuario_nivel  VARCHAR(20) NOT NULL,        -- Nivel de usuario (Admin-Usuario:Principiante-Profesional)--
    PRIMARY KEY (usuario_id)
);

CREATE TABLE categorias
(
    cat_id   INT(8) NOT NULL AUTO_INCREMENT,  -- id de la categoria auto-incrementa--
    cat_nombre   VARCHAR(30) NOT NULL,      -- Nombre de la categoria --
    cat_descripcion  VARCHAR(255) NOT NULL,       -- breve descripcion de la categoria --
    PRIMARY KEY (cat_id)
);

CREATE TABLE publicaciones
(
    post_id   INT(8) NOT NULL AUTO_INCREMENT,  -- id de la publicacion--
    usuario_id   INT(8) NOT NULL,      -- id del usuario que publico la pregunta --
    cat_id INT(8) NOT NULL,       -- id de la categoria a la que pertenece --
    post_titulo VARCHAR(255) NOT NULL,       -- titulo de la pregunta --
    post_contenido VARCHAR(255) NOT NULL,       -- descripcion de la pregunta --
    post_date DATETIME NOT NULL,       -- fecha en la que se publico --
    PRIMARY KEY (post_id),
    FOREIGN KEY (usuario_id) REFERENCES usuarios(usuario_id),
    FOREIGN KEY (cat_id) REFERENCES categorias(cat_id)
);

CREATE TABLE respuestas
(
    res_id   INT(8) NOT NULL AUTO_INCREMENT,  -- id de la respuesta--
    post_id   INT(8) NOT NULL,      -- id de la publicacion --
    usuario_id  INT(8) NOT NULL,       -- id del usuario que respondio la pregunta --
    res_contenido VARCHAR(255) NOT NULL,       -- contenido de la respuesta --
    res_date  DATETIME NOT NULL,       -- fecha en la cual respondio --   
    PRIMARY KEY (res_id),
    FOREIGN KEY (post_id) REFERENCES publicaciones(post_id),
    FOREIGN KEY (usuario_id) REFERENCES usuarios(usuario_id)
);

INSERT INTO categorias (cat_id,cat_nombre, cat_descripcion) VALUES
(1, 'Rock', 'Todo lo relacionado al Rock'),
(2, 'Electronica', 'Todo lo relacionado a la Electronica');

INSERT INTO publicaciones (post_id, usuario_id, cat_id, post_titulo, post_contenido, post_date) VALUES
(1, 2, 2, 'Ayuda!! Que aplicacion usan para mezclar musica?', 'Hola, quisiera la ayuda de la comunidad para que digan que aplicacion usan para hacer sus mezclas, recien estoy comenzando con esto de la musica y no se...', '2021-06-20 20:36:32');

INSERT INTO respuestas (res_id, post_id, usuario_id, res_contenido, res_date) VALUES
(1, 1, 3, 'Hola pablo, para mezclar yo uso FLStudio 12 es una app que tiene todo lo que necesitas para crear tus tracks', '2021-06-20 21:47:43');


INSERT INTO usuarios (usuario_id, usuario_nombre, usuario_email, usuario_pass, usuario_date, usuario_nivel) VALUES
(1, 'Cesar Tinta', 'Tinta@gmail.com', '123', '2021-06-20 14:20:28', 'Administrador'),
(2, 'Pablo', 'Pablo@gmail.com', '12345', '2021-06-20 15:36:39', 'Principiante'),
(3, 'Franklin', 'deco@gmail.com', '12345', '2021-06-20 07:24:23', 'Profesional');

ALTER TABLE respuestas
  ADD CONSTRAINT `respuestas_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `publicaciones` (`post_id`),
  ADD CONSTRAINT `respuestas_ibfk_2` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`usuario_id`);