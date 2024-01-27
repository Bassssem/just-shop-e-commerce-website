-- phpMyAdmin SQL Dump
-- version 2.6.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Mar 04, 2023 at 09:48 AM
-- Server version: 4.1.9
-- PHP Version: 4.3.10
-- 
-- Database: `just-shop`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `command`
-- 

CREATE TABLE `command` (
  `id` int(20) NOT NULL auto_increment,
  `nomprenom` varchar(20) NOT NULL default '',
  `num` int(20) NOT NULL default '0',
  `adress` varchar(20) NOT NULL default '',
  `idprod` int(20) NOT NULL default '0',
  `date` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

-- 
-- Dumping data for table `command`
-- 

INSERT DELAYED IGNORE INTO `command` (`id`, `nomprenom`, `num`, `adress`, `idprod`, `date`) VALUES (23, 'ddd', 0, 'dd', 4, '2023-02-15 14:45:04');

-- --------------------------------------------------------

-- 
-- Table structure for table `produit`
-- 

CREATE TABLE `produit` (
  `id` int(20) NOT NULL auto_increment,
  `nom` varchar(20) NOT NULL default '',
  `prix` float NOT NULL default '0',
  `img1` varchar(200) NOT NULL default '',
  `img2` varchar(200) NOT NULL default '',
  `fournisseur` varchar(50) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

-- 
-- Dumping data for table `produit`
-- 

INSERT DELAYED IGNORE INTO `produit` (`id`, `nom`, `prix`, `img1`, `img2`, `fournisseur`) VALUES (1, 'jacket', 49.9, 'jacket-1.jpg', 'jacket-4.jpg', 'hi'),
(2, 'shirt', 25.9, 'shirt-1.jpg', 'shirt-2.jpg', 'hi'),
(3, 'jacket', 40, 'jacket-5.jpg', 'jacket-6.jpg', 'hi'),
(4, 'clothese', 29, 'clothes-3.jpg', 'clothes-4.jpg', 'ih'),
(35, 'watch', 59, 'watch-1.jpg', 'watch-2.jpg', 'f');
