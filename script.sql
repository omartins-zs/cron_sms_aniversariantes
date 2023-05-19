CREATE DATABASE sms_aniversariantes

USE sms_aniversariantes

CREATE TABLE `sms_aniversariantes`.`usuarios` ( `id` INT NOT NULL AUTO_INCREMENT , `nome` VARCHAR(220) NOT NULL , `email` VARCHAR(220) NOT NULL , `data_nascimento` DATE NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;


INSERT INTO `usuarios` (`id`, `nome`, `email`, `data_nascimento`) VALUES (NULL, 'Gabriel', 'gabriel@email.com', '2023-05-19'), (NULL, 'Lucas', 'lucas@email.com', '2023-05-19'), (NULL, 'Pedro', 'pedro@email.com', '2023-05-19'), (NULL, 'Fernando', 'fernando@email.com', '2023-05-21'), (NULL, 'Nicoly', 'nicoly@email.com', '2023-05-21')