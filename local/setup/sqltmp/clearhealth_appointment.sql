CREATE TABLE `appointment_template` (
  `appointment_template_id` int(11) NOT NULL default '0',
  `name` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`appointment_template_id`)
) TYPE=MyISAM;
CREATE TABLE `appointment_breakdown` (
`appointment_breakdown_id` INT NOT NULL ,
`appointment_id` INT NOT NULL ,
`occurence_breakdown_id` INT NOT NULL ,
`person_id` INT NOT NULL ,
PRIMARY KEY ( `appointment_breakdown_id` ) ,
INDEX ( `occurence_breakdown_id` , `person_id` )
) TYPE=MyISAM;
ALTER TABLE `appointment_breakdown` ADD INDEX ( `appointment_id` ) ;
