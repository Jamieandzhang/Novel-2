DROP TABLE IF EXISTS `chapter`;
CREATE TABLE `chapter` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `txt` varchar(40) NOT NULL,
  `branch_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `branch_id_FK` (`branch_id`),
  CONSTRAINT `branch_id_FK` FOREIGN KEY (`branch_id`) REFERENCES `branch` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Structure for table "user"
#

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL DEFAULT '',
  `password` varchar(40) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

#
# Structure for table "novel"
#

DROP TABLE IF EXISTS `novel`;
CREATE TABLE `novel` (
  `id` int(10) NOT NULL DEFAULT '0',
  `name` varchar(10) NOT NULL DEFAULT '',
  `intro` varchar(40) NOT NULL DEFAULT '',
  `author_id` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `author_id_FK` (`author_id`),
  CONSTRAINT `author_id_FK` FOREIGN KEY (`author_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Structure for table "branch"
#

DROP TABLE IF EXISTS `branch`;
CREATE TABLE `branch` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL DEFAULT '',
  `novel_id` int(10) NOT NULL DEFAULT '0',
  `author2_id` int(10) NOT NULL DEFAULT '0',
  `intro` varchar(40) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `novel_id_FK` (`novel_id`),
  KEY `author2_id_FK` (`author2_id`),
  CONSTRAINT `author2_id_FK` FOREIGN KEY (`author2_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `inspiration`;
<<<<<<< HEAD
CREATE TABLE `inspiration` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL DEFAULT '',
  `author3_id` int(10) NOT NULL DEFAULT '0',
  `txt` varchar(40) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `author3_id_FK` (`author3_id`),
  CONSTRAINT `author3_id_FK` FOREIGN KEY (`author3_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;