-- phpMyAdmin SQL Dump
-- version 2.6.1
-- http://www.phpmyadmin.net
-- 
-- Serveur: localhost
-- Généré le : Dimanche 16 Janvier 2022 à 22:18
-- Version du serveur: 4.1.9
-- Version de PHP: 4.3.10
-- 
-- Base de données: `bibiliotheque`
-- 

-- --------------------------------------------------------

-- 
-- Structure de la table `livres`
-- 

CREATE TABLE `livres` (
  `ISBN` varchar(30) NOT NULL default '',
  `Titre` varchar(30) NOT NULL default '',
  `Auteur` varchar(30) NOT NULL default '',
  `Quantite_disp` int(11) NOT NULL default '0',
  `Annee_Edition` varchar(10) NOT NULL default '',
  `maison_edition` varchar(30) NOT NULL default '',
  PRIMARY KEY  (`ISBN`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 
-- Contenu de la table `livres`
-- 

INSERT INTO `livres` VALUES ('00000001', 'javascript is fun', 'hamouda ben abdennebi', 200, '04-02-2002', 'lycee marsa saada');
INSERT INTO `livres` VALUES ('12345678', 'BBBBBB', 'BBBBB', 2222, '22-12-2222', 'BBBBB');

-- --------------------------------------------------------

-- 
-- Structure de la table `users`
-- 

CREATE TABLE `users` (
  `User_id` int(11) NOT NULL auto_increment,
  `Username` varchar(30) NOT NULL default '',
  `password` varchar(30) NOT NULL default '',
  PRIMARY KEY  (`User_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- 
-- Contenu de la table `users`
-- 

INSERT INTO `users` VALUES (1, 'hamouda', 'hamoudainfo');
INSERT INTO `users` VALUES (3, 'TRAX', 'COUScous77');