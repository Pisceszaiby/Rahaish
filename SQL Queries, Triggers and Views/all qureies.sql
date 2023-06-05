/* FOR  SIGN IN PAGE:
*/
select * from users
where user_name='Kashif Mehmood' AND user_password='1234567';
/*here instead of kashif mehmood and password 1234567 put the PHP variable that are used for taking 
input*/

/* if the user exsists then see the user_role
if user role is AGENT THEN the home page with following qurey will appear*/


/*PROFILES PAGE*/
/*AGENT PROFILE PAGE*/
SELECT user_name,user_email,user_phone,user_CNIC,agent_company,success_rate
from users NATURAL JOIN agents
where user_id=1002;
/*from the above qurey fetch the data using php and display on the screen*/
/* at 1002 put the user_id of the current user that is logged in*/

/* if user role if FBR officer the the home page with following data will appear*/
/*FBR PROFILE*/
SELECT user_name,user_email,user_phone,user_CNIC
from users NATURAL JOIN fbr_officers
where user_id=1004;
/*from the above qurey fetch the data using php and display on the screen*/
/* at 1004 put the user_id of the current user that is logged in*/

/*FILERS PROFILE*/
SELECT user_name,user_email,user_phone,user_CNIC,NTN
FROM Filer_Details;

/*NON FILERS PROFILE*/
SELECT user_name,user_email,user_phone,user_CNIC
FROM NonFiler_Details;

/*if the user role is Society Rep then the home page with following data will appear*/
/*HOUSEING/SOCIETY REPO*/
SELECT user_name,user_email,user_phone,user_CNIC,area,society_name,no_of_bought,no_of_rented,society_description
from users NATURAL JOIN (society_rep natural JOIN housing_society)
WHERE user_id=1005;
/*from the above qurey fetch the data using php and display on the screen*/
/* at 1005 put the user_id of the current user that is logged in*/

/*if user role is Buyer/Seller then the home page with three buttons will appear */

/*BUY BUTTON*/
/* IF RESIDENTIAL SELECTED*/
/*NEW PAGE WILL APPEAR THAT WILL ASK FOR SOME INPUT*/
SELECT user_name AS 'Property Agent', price,address_desc
from rent_buy_searching/*using view here*/
where society_name='Gulberg Greens'/*here put the entered location*/
and property_type='Residential'/*THIS WILL REMAIN AS IT IS.*/
and property_classification='office'/*here put the entered classification*/
and price<='50000';/*here put the entered range*/

/* IF Commercial SELECTED*/
/*NEW PAGE WILL APPEAR THAT WILL ASK FOR SOME INPUT*/
SELECT user_name AS 'Property Agent', price,address_desc
from rent_buy_searching/*using view here*/
where society_name='Gulberg Greens'/*here put the entered location*/
and property_type='Commercial'/*THIS WILL REMAIN AS IT IS.*/
and property_classification='office'/*here put the entered classification*/
and price<='50000';/*here put the entered range*/


/*IF CILCKS ON A PARTICULAR HOUSE*/
/*THE RETERIVE THE PROPERTY ID OF THAT HOUSE*/


/* QUREY TO GET the owner name and area*/
select area_unit, user_name AS Owner
from property_info natural join users
where property_id=902;/*here put the property id of the clicked house*/
/*QUERY TO GET THE agent info, price and address.*/
select user_name,user_email,user_phone,price,property_desc
from users u natural join (agents join (temp_property_info natural join temp_sell_buy_property) using (agent_id)) 
where property_id=902;

/*AGENT PROFILE*/
SELECT user_name,user_email,user_phone,user_CNIC
from Agents natural join users
where agent_id=(select agent_id
                from sell_buy_property
                where property_id=904);

/*SELL PROPERTY*/
/*FOR RESIENTIAL TYPE*/



CALL Entering_property_RES();/*ADD THE PHP WALE ARGUMENTS FOR AURGUMENT DETAILS SEE THE PROCEDURES SQL FILE*/
/*here in agent you have to give the user id for that select the user id from agent table where the agent_id is equal to the entered id*/
CALL Entering_Agent();
CALL Entering_sell();
CALL Entering_residential();
CALL Address_insertion();
/*FOR COMMERCIAL TYPE*/
CALL Entering_property_COM();
/*here in agent you have to give the user id for that select the user id from agent table where the agent_id is equal to the entred id*/
CALL Entering_Agent();
CALL Entering_sell();
call Entering_Commercial();
CALL Address_insertion();


/*RENT PROPERTY*/
/*for residential type*/
CALL Entering_property_RES();
CALL Entering_Agent();
call Rent_property_insertion;
CALL Entering_residential();
CALL Address_insertion();

/*for commercial type*/
CALL Entering_property_COM();
CALL Entering_Agent();
call Rent_property_insertion;
call Entering_Commercial();
CALL Address_insertion();


