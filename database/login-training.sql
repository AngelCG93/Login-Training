SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE IF NOT EXISTS `users` (
  `user_id`      int(11)     NOT NULL AUTO_INCREMENT,
  `username`     varchar(50) NOT NULL UNIQUE,
  `password`     varchar(50) NOT NULL UNIQUE,
  `user_created` datetime    NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_updated` datetime    NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0;
