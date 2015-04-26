<?php exit;?>
CREATE TABLE `a3life_exesystem` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `sql_ip` varchar(255) NOT NULL,
  `sql_port` int(10) unsigned NOT NULL,
  `sql_user` varchar(255) NOT NULL,
  `sql_password` varchar(255) NOT NULL,
  `sql_database` varchar(255) NOT NULL,
  `mods` text NOT NULL,
  `server_ip` varchar(255) NOT NULL,
  `server_port` int(10) unsigned NOT NULL,
  `debug` int(10) unsigned NOT NULL,
  `disable_login` int(10) unsigned NOT NULL,
  `setting_rows` int(10) unsigned NOT NULL,
  `money_format` varchar(5) NOT NULL,
  `housing` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;