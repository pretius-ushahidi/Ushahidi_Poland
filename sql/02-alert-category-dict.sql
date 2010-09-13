--
-- altert.powodz.ngo.pl - Polish version of Ushahidi, created for 2010 flood
-- 
-- File description: This file contains predefined categories
--
-- Copyright (C) 2010 Pretius (http://pretius.com)
--

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `parent_id` int(11) NOT NULL default '0',
  `locale` varchar(10) NOT NULL default 'en_US',
  `category_type` tinyint(4) default NULL,
  `category_title` varchar(255) default NULL,
  `category_description` text,
  `category_color` varchar(20) default NULL,
  `category_image` varchar(100) default NULL,
  `category_image_shadow` varchar(100) default NULL,
  `category_visible` tinyint(4) NOT NULL default '1',
  PRIMARY KEY  (`id`),
  KEY `category_visible` (`category_visible`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=54 ;

INSERT INTO `category` (`id`, `parent_id`, `locale`, `category_type`, `category_title`, `category_description`, `category_color`, `category_image`, `category_image_shadow`, `category_visible`) VALUES
(1, 0, 'en_US', 5, 'G/ POTRZEBY - SRODKI CZYSTOSCI / CHEMIA GOSPODARSTWA DOMOWEGO', 'G/ POTRZEBY - SRODKI CZYSTOSCI / CHEMIA GOSPODARSTWA DOMOWEGO', '9900CC', NULL, NULL, 1),
(2, 0, 'en_US', 5, 'B/ POTRZEBY - SRODKI HIGIENY OSOBISTEJ', 'B/ POTRZEBY - SRODKI HIGIENY OSOBISTEJ', '3300FF', NULL, NULL, 1),
(4, 0, 'en_US', 5, 'D/ POTRZEBY - LEKI, SPRZET REHABILITACYJNY', 'D/ POTRZEBY - LEKI, SPRZET REHABILITACYJNY', 'CC0000', NULL, NULL, 1),
(5, 0, 'en_US', 5, 'C/ POTRZEBY - ODZIEZ, POSCIEL', 'C/ POTRZEBY - ODZIEZ, POSCIEL', 'CC9933', NULL, NULL, 1),
(6, 2, 'en_US', 5, 'Mydlo, szampon, pasty do zebow etc.', 'Mydlo, szampon, pasty do zebow etc.', '9999FF', NULL, NULL, 1),
(7, 0, 'en_US', 5, 'K/ POTRZEBNE WSPARCIE ZE STRONY WOLONTARIUSZY', 'K/ POTRZEBNE WSPARCIE ZE STRONY WOLONTARIUSZY', 'b3b396', NULL, NULL, 1),
(8, 0, 'en_US', 5, 'I/ POTRZEBY - PODSTAWOWE WYPOSAZENIE DO USUWANIA SKUTKOW', 'I/ POTRZEBY - PODSTAWOWE WYPOSAZENIE DO USUWANIA SKUTKOW', 'FFCC00', NULL, NULL, 1),
(9, 0, 'en_US', 5, 'E/ POTRZEBY - ORGANIZACJA WYPOCZYNKU DLA DZIECI', 'E/ POTRZEBY - ORGANIZACJA WYPOCZYNKU DLA DZIECI', 'FAEBD7', NULL, NULL, 1),
(10, 0, 'en_US', NULL, 'A/ POTRZEBY -  ZYWNOSC', 'A/ POTRZEBY -  ZYWNOSC', '55bd2c', NULL, NULL, 1),
(11, 10, 'en_US', NULL, 'Woda', 'Woda', '30f013', NULL, NULL, 1),
(12, 10, 'en_US', NULL, 'Żywność sucha', 'Żywność sucha', '9fe0bb', NULL, NULL, 1),
(13, 10, 'en_US', NULL, 'Konserwy / przetwory', 'Konserwy / przetwory', '14420c', NULL, NULL, 1),
(14, 10, 'en_US', NULL, 'Żywność specjalna (niemowlęta / diabetycy etc.)', 'Żywność specjalna (niemowlęta / diabetycy etc.)', '1b6100', NULL, NULL, 1),
(15, 2, 'en_US', NULL, 'Pieluszki dla dzieci', 'Pieluszki dla dzieci', '3165cc', NULL, NULL, 1),
(16, 2, 'en_US', NULL, 'Tampony, podpaski', 'Tampony, podpaski', '00008a', NULL, NULL, 1),
(17, 2, 'en_US', NULL, 'Srodki przeciw komarom', 'Srodki przeciw komarom', '0576ff', NULL, NULL, 1),
(18, 1, 'en_US', NULL, 'Srodki do mycia powierzchni', 'Srodki do mycia powerzchni', 'd466ff', NULL, NULL, 1),
(19, 1, 'en_US', NULL, 'Srodki odgrzybiające', 'Srodki odgrzybiające', 'ff73ff', NULL, NULL, 1),
(20, 1, 'en_US', NULL, 'Proszki do prania', 'Proszki do prania', 'a64989', NULL, NULL, 1),
(21, 8, 'en_US', NULL, 'Rekawice, maski, odziez ochronna', 'Rekawice, maski, odziez ochronna', 'dbd000', NULL, NULL, 1),
(22, 8, 'en_US', NULL, 'Miotly, szufle, lopaty', 'Miotly, szufle, lopaty', 'fafa50', NULL, NULL, 1),
(23, 8, 'en_US', NULL, 'Mlotki, mloty, siekiery', 'Mlotki, mloty, siekiery', 'f0f027', NULL, NULL, 1),
(24, 8, 'en_US', NULL, 'Osuszacze', 'Osuszacze', 'd5de8e', NULL, NULL, 1),
(25, 8, 'en_US', NULL, 'Agregaty pradotworcze', 'Agregaty pradotworcze', 'f3ff47', NULL, NULL, 1),
(26, 8, 'en_US', NULL, 'Podstawowy sprzet remontowy (pedzle, farby, zaprawy, szpachle)', 'Podstawowy sprzet remontowy (pedzle, farby, zaprawy, szpachle)', 'e0e68d', NULL, NULL, 1),
(27, 5, 'en_US', NULL, 'Ubrania dla dorosłych', 'Ubrania dla dorosłych', '4f4b3a', NULL, NULL, 1),
(28, 5, 'en_US', NULL, 'Ubranka dla dzieci', 'Ubranka dla dzieci', '362c0e', NULL, NULL, 1),
(29, 5, 'en_US', NULL, 'Posciel, koce, materace', 'Posciel, koce, materace', '7d7459', NULL, NULL, 1),
(30, 4, 'en_US', NULL, 'Leki', 'Leki', 'e63a3a', NULL, NULL, 1),
(31, 4, 'en_US', NULL, 'Sprzęt rehabilitacyjny', 'Sprzet rehabilitacyjny', 'ad0000', NULL, NULL, 1),
(32, 4, 'en_US', NULL, 'Srodki opatrunkowe', 'Srodki opatrunkowe', 'e3a6a6', NULL, NULL, 1),
(33, 7, 'en_US', NULL, 'Doradztwo techniczne związane z usuwaniem skutków powodzi', 'Doradztwo techniczne związane z usuwaniem skutków powodzi', 'b5b861', NULL, NULL, 1),
(34, 7, 'en_US', NULL, 'Pomoc psychologiczna', 'Pomoc psychologiczna', 'c7a314', NULL, NULL, 1),
(35, 7, 'en_US', NULL, 'Pomoc w pracach porzadkowych, remontowych', 'dkowych, remontowych', 'ada172', NULL, NULL, 1),
(36, 7, 'en_US', NULL, 'Poradnictwo w sprawach formalnych / prawnych', 'Poradnictwo w sprawach formalnych / prawnych', 'd18b00', NULL, NULL, 1),
(37, 7, 'en_US', NULL, 'Opieka nad osobami niesamodzielnymi, niedoleznymi', 'Opieka nad osobami niesamodzielnymi, niedoleznymi', 'c2b180', NULL, NULL, 1),
(38, 0, 'en_US', NULL, 'F/ POTRZEBY - WYPOSAZENIE SPRZET GOSPODARSTWA DOMOWEGO', 'F/ POTRZEBY - WYPOSAZENIE SPRZET GOSPODARSTWA DOMOWEGO', 'ebb207', NULL, NULL, 1),
(39, 38, 'en_US', NULL, 'LodówkI, pralki', 'Lodowki, pralki', 'd18b00', NULL, NULL, 1),
(40, 38, 'en_US', NULL, 'Garnki, naczynia, zastawa', 'Garnki, naczynia, zastawa', 'f0b133', NULL, NULL, 1),
(41, 0, 'en_US', NULL, 'H/ POTRZEBY - MATERIALY  BUDOWLANE, SPRZET', 'H/ POTRZEBY - MATERIALY  BUDOWLANE, SPRZET', '95b6c2', NULL, NULL, 1),
(42, 0, 'en_US', NULL, 'J/ POTRZEBY - MATERIALY, SPRZET ROLNICZY, HODOWLANY', 'J/ POTRZEBY - MATERIALY, SPRZET ROLNICZY, HODOWLANY', '000000', NULL, NULL, 1),
(43, 0, 'en_US', NULL, 'PUNKTY POMOCY DOSTEPNE NA TERNACH ZNISZCOZNYCH PRZEZ POWODZ', 'PUNKTY POMOCY DOSTEPNE NA TERNACH ZNISZCOZNYCH PRZEZ POWODZ', '318752', 'category_43_1276381784.png', NULL, 1),
(44, 43, 'en_US', NULL, 'Dystrybucja Zywnosci', 'Dystrybucja Zywnosci', '118a15', 'category_44_1276382082.png', NULL, 1),
(45, 43, 'en_US', NULL, 'Schronisko / miejsce tymczasowego, grupowego pobytu', 'Schronisko / miejsce tymczasowego, grupowego pobytu', '34571e', 'category_45_1276382329.png', NULL, 1),
(46, 43, 'en_US', NULL, 'Punkty dytrybucji pomocy', 'Punkty dystrybucji pomocy', '265226', 'category_46_1276382562.png', NULL, 1),
(47, 0, 'en_US', NULL, 'ZORGANIZOWANE PRZEDSIEWZIECIA Z CALEGO KRAJU PROWADZONE NA RZECZ POWODZIAN', 'ZORGANIZOWANE PRZEDSIEWZIECIA Z CALEGO KRAJU PROWADZONE NA RZECZ POWODZIAN', 'f7f7f7', 'category_47_1276384371.png', NULL, 1),
(48, 47, 'en_US', NULL, 'Zbiorki zywnosci lub towarow', 'Zbiorki zywnosci lub towarow', '7a6f6f', NULL, NULL, 1),
(49, 47, 'en_US', NULL, 'Publiczne zbiorki pieniedzy', 'Publiczne zbiorki pieniedzy', '756c6c', NULL, NULL, 1),
(50, 47, 'en_US', NULL, 'Organizowanie wyjazdow wolontariuszy na tereny powodziowe', 'Organizowanie wyjazdow wolontariuszy na tereny powodziowe', '6e6868', NULL, NULL, 1),
(51, 47, 'en_US', NULL, 'Mozliwosc udzielenia tymczasowego schronienia / wypoczynek dzieci', 'Mozliwosc udzielenia tymczasowego schronienia / wypoczynek dzieci', '4f4949', NULL, NULL, 1),
(52, 47, 'en_US', NULL, 'Inne formy pomocy', 'Inne formy pomocy', '666262', NULL, NULL, 1),
(53, 0, 'en_US', NULL, 'L/ INNE POTRZEBY', 'L/ INNE POTRZEBY', '1499db', NULL, NULL, 1);
