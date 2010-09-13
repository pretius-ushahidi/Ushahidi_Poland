--
-- altert.powodz.ngo.pl - Polish version of Ushahidi, created for 2010 flood
-- 
-- File description: This file contains predefined cutom form fields
--
-- Copyright (C) 2010 Pretius (http://pretius.com)
--


SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

CREATE TABLE IF NOT EXISTS `form_field` (
  `id` int(11) NOT NULL auto_increment,
  `form_id` int(11) NOT NULL default '0',
  `field_name` varchar(200) default NULL,
  `field_type` tinyint(4) NOT NULL default '1' COMMENT '1 - TEXTFIELD, 2 - TEXTAREA (FREETEXT), 3 - DATE, 4 - PASSWORD, 5 - RADIO, 6 - CHECKBOX',
  `field_required` tinyint(4) default '0',
  `field_options` text,
  `field_position` tinyint(4) NOT NULL default '0',
  `field_default` varchar(200) default NULL,
  `field_maxlength` int(11) NOT NULL default '0',
  `field_width` smallint(6) NOT NULL default '0',
  `field_height` tinyint(4) default '5',
  `field_isdate` tinyint(4) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `fk_form_id` (`form_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

INSERT INTO `form_field` (`id`, `form_id`, `field_name`, `field_type`, `field_required`, `field_options`, `field_position`, `field_default`, `field_maxlength`, `field_width`, `field_height`, `field_isdate`) VALUES
(10, 1, 'Imie, Nazwisko (ew. funkcja) osoby zglaszajacej  (nie bedzie upubliczniane)', 1, 0, NULL, 3, '', 0, 0, NULL, 0),
(3, 1, 'Telefon osoby zglaszajacej (dla celow weryfikacji - nie bedzie upubliczniany)', 1, 1, NULL, 8, '', 0, 0, NULL, 0),
(8, 1, 'Obszar ktorego zgloszenie dotyczy (pojedyncza rodzina / instytucja / miejscowosc / gmina ?)', 2, 0, NULL, 10, '', 0, 0, NULL, 0),
(15, 2, 'Data przyjecia deklaracji', 1, 0, NULL, 15, '', 0, 0, NULL, 1),
(6, 1, 'Organizacja lub instytucja od ktorej pochodzi zgloszenie', 2, 0, NULL, 9, '', 0, 0, NULL, 0),
(14, 2, 'Organizacja lub instytucja  ktora zamierza sie tym zajac', 2, 0, NULL, 14, '', 0, 0, NULL, 0),
(11, 1, 'e-mail (nie bedzie upubliczniany)', 1, 0, NULL, 6, '', 0, 0, NULL, 0),
(12, 1, 'Ewentualne uwagi na temat pochodzenia informacji (jej, zrodel, wiarygodnosci i aktualnosci etc.)', 2, 0, NULL, 12, '', 0, 0, NULL, 0),
(16, 2, 'Osoba skadajaca deklaracje (imie nazwisko, telefon)', 1, 0, NULL, 16, '', 0, 0, NULL, 0),
(17, 2, 'e-mail', 1, 0, NULL, 17, '', 0, 0, NULL, 0),
(19, 2, 'Komentarz uwagi organizacji', 2, 0, NULL, 19, '', 0, 0, NULL, 0),
(20, 2, 'Komentarz uwagi administratora bazy', 2, 0, NULL, 20, '', 0, 0, NULL, 0);
