DROP TABLE IF EXISTS `#__donationgauge_gauges`;

CREATE TABLE `#__donationgauge_gauges` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`title` VARCHAR(255),
	`description` VARCHAR(512),
	`button_id` VARCHAR(128),
	`progress` DECIMAL(10, 2),
	`cost` DECIMAL(10, 2),
	`enabled` TINYINT(1),
	PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

INSERT INTO `#__donationgauge_gauges`
	(`title`, `description`, `button_id`, `progress`, `cost`, `enabled`)
	VALUES ('Foo', 'bar bar bar bar', '642', '23.20', '50', '1'),
	('Bar', 'fofofofofofofofo', '098', '.01', '1000000', '1');
