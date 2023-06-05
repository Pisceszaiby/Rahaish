
/*CREATING VIEWS*/
/*VIEW 1*/
create view Filer_Details AS
select * 
from filers Natural join users ;

/*VIEW 2*/
create view NonFiler_Details AS
select * 
from non_filers Natural join users ;

/*view 3*/
/*view for Buy_Rent_searching*/
create view temp_sell_buy_property AS
select price,agent_id,property_id,property_desc
from sell_buy_property  ;

/*view 4*/
/*view for property_info*/
create view temp_property_info AS 
select property_id,property_type,property_classification,area_unit
from Property_Info;

/*view 5*/
create view rent_buy_searching as
SELECT * from
users join (agents join (
temp_sell_buy_property join 
temp_property_info natural join
(housing_society natural join address)
 using (property_id)) using (agent_id)) using (user_id);
 