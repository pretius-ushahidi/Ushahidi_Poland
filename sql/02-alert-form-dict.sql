--
-- altert.powodz.ngo.pl - Polish version of Ushahidi, created for 2010 flood
-- 
-- File description: This file contains predefined forms
--
-- Copyright (C) 2010 Pretius (http://pretius.com)
--

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

CREATE TABLE IF NOT EXISTS `form` (
  `id` int(11) NOT NULL auto_increment,
  `form_title` varchar(200) NOT NULL,
  `form_description` text,
  `form_active` tinyint(4) default '1',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

INSERT INTO `form` (`id`, `form_title`, `form_description`, `form_active`) VALUES
(1, 'Default Form', 'Default form, for report entry', 1),
(2, 'Raport szczegółowy', '', 1),
(3, 'Raport - zajecie sie sprawa', 'Raport sluzacy notowaniu ewentualnych deklaracji powiazanej ze zgloszonymi potrzebami', 1);
