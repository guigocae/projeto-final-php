CREATE DATABASE base_de_dados;

USE base_de_dados;

CREATE TABLE `contato` (
    `id` int(11) NOT NULL auto_increment,
    `nome` varchar(100) NOT NULL,
    `mensagem` text NOT NULL,
    PRIMARY KEY (`id`)
);