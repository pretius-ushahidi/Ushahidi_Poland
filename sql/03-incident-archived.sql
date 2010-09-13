--
-- altert.powodz.ngo.pl - Polish version of Ushahidi, created for 2010 flood
-- 
-- File description: This file contains necessary Ushahidi modifications in
-- order to implement incident archived status.
--
-- Copyright (C) 2010 Pretius (http://pretius.com)
--


ALTER TABLE `incident` ADD `incident_archived` TINYINT NOT NULL DEFAULT '0' AFTER `incident_verified`;
