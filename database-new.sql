CREATE TABLE `ospos_branch_offices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,,
  `name` varchar(100) NOT NULL,
  `active` int(1) DEFAULT 1,
  `phone_number` varchar(15) NOT NULL,
  `email` varchar(60) NOT NULL,
  `address_1` varchar(255) NOT NULL,
  `address_2` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(50) NOT NULL,
  `zip` varchar(10) NOT NULL,
  `country` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



ALTER TABLE `ospos_app_config`
 ADD COLUMN `branch_office_id` int(11) NOT NULL ;
 
UPDATE `ospos_app_config` SET `branch_office_id` = 1
 
ALTER TABLE `ospos_app_config`
 ADD CONSTRAINT `ospos_app_config_ibfk_1` FOREIGN KEY (`branch_office_id`) REFERENCES `ospos_branch_offices` (`ospos_branch_offices`);

 
