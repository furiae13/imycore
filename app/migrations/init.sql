CREATE TABLE `imy_migration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` DATE default NOW(),
  `num` INT NOT NULL default 1,
  `cdate` DATETIME default NOW(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
