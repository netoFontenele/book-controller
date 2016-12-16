-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15-Dez-2016 às 14:16
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `books`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `resume` text COLLATE utf8_unicode_ci,
  `isbn` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `purchase_point` text COLLATE utf8_unicode_ci,
  `price` double(10,2) DEFAULT NULL,
  `publishing_house` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_buy` date DEFAULT NULL,
  `is_ebook` bit(1) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `books`
--

INSERT INTO `books` (`id`, `name`, `author`, `resume`, `isbn`, `purchase_point`, `price`, `publishing_house`, `date_buy`, `is_ebook`, `created`, `modified`) VALUES
(1, 'AJAX com jQuery', 'Maurício Samy Silva', 'Ajax com jQuery é uma poderosa combinação das funcionalidades do AJAX com a simplicidade que jQuery proporciona ao desenvolvimento com JavaScript. Seja você um especialista ou um iniciante no uso de AJAX certamente ficará maravilhado ao descobrir uma metodologia completamente diferente, inovadora, intuitiva e infinitamente mais simples de desenvolver AJAX.', '978-85-7522-199-0', 'Livraria Saraiva Iguatemi', 69.00, 'Novatec Editora Ltda.', '2014-11-11', b'0', NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
