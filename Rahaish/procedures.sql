/*PROCEDURES SYNTAX*/
/*entering in property table for resdential type*/

USE `real_estate`;
DROP procedure IF EXISTS `Entering_property_RES`;

DELIMITER $$
USE `real_estate`$$
CREATE PROCEDURE  `Entering_property_RES`(area int,owner_id int,entered_clas varchar(20) )
BEGIN
Insert into Property_Info() values (area,owner_id,'Residential',entered_clas);
END$$

DELIMITER ;


/*entering in property table for commercial type*/
USE `real_estate`;
DROP procedure IF EXISTS `Entering_property_COM`;

DELIMITER $$
USE `real_estate`$$
CREATE PROCEDURE  `Entering_property_COM`(area int,owner_id int,entered_clas varchar(20) )
BEGIN
Insert into Property_Info() values (area,owner_id,'Commercial',entered_clas);
END$$

DELIMITER ;



/*PROCEDURE FOR ENTERING AGENT*/
USE `real_estate`;
DROP procedure IF EXISTS `Entering_Agent`;

DELIMITER $$
USE `real_estate`$$
CREATE PROCEDURE `Entering_Agent` (user_id int,agent_company varchar(20),success_rate char(10),agent_id int)
BEGIN
insert into Agents values(user_id,agent_company,success_rate,agent_id);
END$$

DELIMITER ;
/*ENTERING PROPERTY IN THE SELL BUY TABLE*/
USE `real_estate`;
DROP procedure IF EXISTS `Entering_sell`;

DELIMITER $$
USE `real_estate`$$
CREATE PROCEDURE `Entering_sell` (user_id int,price double,agent_id int,property_id int,property_desc text )
BEGIN
insert into sell_buy_property values(user_id,price,agent_id,property_id,property_desc);
END$$

DELIMITER ;

/*ENTERING DATA IN RESIDENTIAL TABLE*/
USE `real_estate`;
DROP procedure IF EXISTS `Entering_residential`;

DELIMITER $$
USE `real_estate`$$
CREATE PROCEDURE `Entering_residential` (property_id int,no_of_bedrooms int,residential_type varchar(20),no_of_bathrooms int)
BEGIN
insert into Residential_Buildings values(property_id,no_of_bedrooms,residential_type,no_of_bathrooms);
END$$

DELIMITER ;

/*ENTERING DATA IN COMMERCIAL TABLE*/
USE `real_estate`;
DROP procedure IF EXISTS `Entering_Commercial`;

DELIMITER $$
USE `real_estate`$$
CREATE PROCEDURE `Entering_Commercial` (property_id int,commercial_type varchar(20))
BEGIN
insert into commercial values (property_id,commercial_type);
END$$

DELIMITER ;

/*ENTERING ADDRESS*/
USE `real_estate`;
DROP procedure IF EXISTS `Address_insertion`;

DELIMITER $$
USE `real_estate`$$
CREATE PROCEDURE `Address_insertion` (property_id int,society_id int,address_desc text)
BEGIN
insert into Address values(property_id,society_id,address_desc);
END$$

DELIMITER ;

/*FOR ENTERING DATA IN THE RENT PROPERTY TABLE*/
USE `real_estate`;
DROP procedure IF EXISTS `Rent_property_insertion`;

DELIMITER $$
USE `real_estate`$$
CREATE PROCEDURE `Rent_property_insertion` (property_id int,user_id int,agent_id int,rent_price double,property_desc text )
BEGIN
insert into rent_property values(property_id,user_id,agent_id,rent_price,property_desc);
END$$

DELIMITER ;
