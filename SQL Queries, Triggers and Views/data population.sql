Insert INTO Users 
VALUES
('Kashif Mehmood', 'kmehmood@gmail.com', '03337892002','1234567', 'Buyer/Seller', '34569-0876543-9', 1001),
('Ayesha Farhan','fhan@gmail.com','03347821345', 'abcdefg','Agent’','42310-9871233-9',1002),
('Imran Bashir', 'ibashir@gmail.com' ,'03378923456','islamabad2', 'Buyer/Seller', '98772-3949892-7', 1003),
('Faris Hussain', 'fh@fbrofficers.com','03343987321', 'qwerty7', 'FBR Officer', '34101-2345667-4', 1004),
('Azaan Malik', 'amalik@gmail.com','05123456789', 'hiraeth23', 'Society Rep', '36798-9394875-2', 1005),
('Layla Hashmi', 'lhashmi@gmail.com', '03359823811','asdfgh12', 'Buyer/Seller', '34101-2345689-3', 1006),	
('Pareeshae Hammad', 'phammad@gmail.com','03321892348', 'karachi23', 'Buyer/Seller', '32189-7483022-5', 1007);

INSERT INTO Property_Info
VALUES(901, 4355, 1001, 'Residential', 'Double-Story House'),
(902, 943, 1006, 'Commercial', 'Office');

INSERT INTO Housing_Society
VALUES(456, 'Islamabad', 'Gulberg Greens', 0, 0, 'Located near Islamabad Expressway, outstanding infrastructure and facilities. Commercial and Residential Property available for sale/rent');

INSERT INTO Agents 
VALUES(1002, 'Express Associates', 0, 341);

INSERT INTO Transactions_Rent
VALUES(001,  901, 341, '65000', null);

INSERT INTO Transactions_Buy
VALUES(011, 902, 341, '14500000', null);

INSERT INTO FBR_Officers
VALUES(1004, 211);

INSERT INTO permission
VALUES(01, 1004, 'FBR official', 'access filer, non-filer tables, check stats');

INSERT INTO filers
VALUES('0123456', 1001),
('0987654', 1003);

INSERT INTO non_filers
VALUES(1006, NULL, 001);

INSERT INTO owner
VALUES(1001, 901);

INSERT INTO residential_buildings
VALUES(901, 4, 'Double Storey House', 3);

INSERT INTO address
VALUES(901, 456, 'House no. 432, Lane 6, Main Enclave, Gilbert Green, Islamabad');

INSERT INTO commercial
VALUES(902, 'Office');

INSERT INTO sell_buy_property
VALUES(1006, 145000, 1002,902, 'Studio Office, attached TV room'); 

INSERT INTO rent_property
VALUES(901, 1001,1002, 65000, 'Double story House, 4 bedrooms, 3 bathrooms, American style Kitchen');


 INSERT INTO users
VALUES('Hassan Raheel','hraheel@gmail.com','03343909322','1234abc','Buyer/Seller','34141-6852738-1','1008'),
('Ahsan Razzak','arazzak123@gmail.com','03358702644','razzak12','Agent','32891-2499201-7','1009'),
('Syra Ali','syraali@gmail.com','03368923644','syra987','Buyer/Seller','67892-1234567-8','1010'),
('Junaid Safdar','jsafdar@gmail.com','03328976439','londoneye','Agent','67822-6838399-9','1011'),
('Maryam Hussain','mhussain2@gmail.com','03219087654','lahore124','Buyer/Seller','32981-2499121-8','1012'),
('Mehr Imran','m@fbrofficers.com','03260923245','qwerty5','FBR Officer','23892-1254367-2','1013'),
('Maria Memon','memon123@gmail.com','03562576822','kallisto2','Society Rep','37839-5234719-8','1014'),
('Osama Mukhtar','omukhtar@gmail.com','03212709299','titan31','Agent','32187-9871234-7','1015'),
('Yamna Syed','ysyed@gmail.com','03342345897','august13','Society Rep','34782-1234567-8','1016');
INSERT INTO `users` (`user_name`, `user_email`, `user_phone`, `user_password`, `user_role`, `user_CNIC`, `user_id`) VALUES ('Zarrar Usman', 'zusman@gmail.com', '03328976466', '012398', 'Buyer/Seller', '32041-5752735-1', '1017'), ('Shehzer Khan', 'skhan@gmail.com', '03858412734', 'sixteenthavenue', 'Buyer/Seller', '32391-2479251-4', '1018');

INSERT INTO `users` (`user_name`, `user_email`, `user_phone`, `user_password`, `user_role`, `user_CNIC`, `user_id`) VALUES ('Azlan Mansoor', 'amansoor@gmail.com', '03337022679', 'snowdrop578', 'Buyer/Seller', '45672-8294859-8', '1019'), ('Bilal Ahmad', 'bahmad@gmailcom', '03313707377', 'mocca377', 'Buyer/Seller', '34101-5678392-7', '1020');
INSERT INTO `society_rep` (`society_id`, `user_id`) VALUES ('458', '1014');
INSERT INTO `society_rep` (`society_id`, `user_id`) VALUES ('457', '1005'), ('456', '1016'); 
INSERT INTO `housing_society` (`society_id`, `area`, `society_name`, `no_of_bought`, `no_of_rented`, `society_description`) VALUES ('458', 'Islamabad', 'EXPRESS CITY', '0', '0', 'alongside GT Road');
 INSERT INTO `housing_society` (`society_id`, `area`, `society_name`, `no_of_bought`, `no_of_rented`, `society_description`) VALUES ('457', 'Islamabad', 'Bahria Enclave', '0', '0', 'Overlooks Margalla Hills, situated near central Islamabad.');
INSERT INTO `permission` (`permission_id`, `user_id`, `permission_type`, `permission_desc`) VALUES ('3', '1002', 'Agent', 'access agent profile'), ('4', '1009', 'Agent', 'access agent profile'), ('5', '1011', 'Agent', 'access agent profile'), ('6', '1015', 'Agent', 'access agent profile');
INSERT INTO `permission` (`permission_id`, `user_id`, `permission_type`, `permission_desc`) VALUES ('7', '1005', 'Society Rep', 'view society profile, check stats'), ('8', '1014', 'Society Rep', 'view society profile, check stats'), ('9', '1016', 'Society Rep', 'view society profile, check stats');
INSERT INTO `property_info` (`property_id`, `area_unit`, `user_id`, `property_type`, `property_classification`) VALUES ('905', '1750', '1012', 'Residential', 'Plot'), ('906', '800', '1017', 'Commercial', 'Shop');
INSERT INTO `property_info` (`property_id`, `area_unit`, `user_id`, `property_type`, `property_classification`) VALUES ('904','2500','1010','Residential','Single Story House'),('903','882','1008','Commercial','Office');
INSERT INTO `residential_buildings` (`property_id`, `no_of_bedrooms`, `residential_type`, `no_of_bathrooms`) VALUES ('904', '2', 'Single Story House', '2'), ('905', '0', 'Plot', '0');
INSERT INTO `commercial` (`property_id`, `commercial_type`) VALUES ('903', 'Furnished Office'), ('906', 'one room shop');
INSERT INTO `address` (`property_id`, `society_id`, `address_desc`) VALUES ('906', '456', 'Shop no 37C, Chenab Building, Main Road, Gulberg Greens'), ('904', '456', 'House no. 78A, Lane 7, Sector B, Gulberg Greens'), ('905', '457', 'Plot no 45A, Lane 5, Main Road, Bahria Enclave');
INSERT INTO `address` (`property_id`, `society_id`, `address_desc`) VALUES ('902', '457', 'Office no.A90, Gulf Plaza, Rafi Stadium Road, Bahria Enclave'), ('903', '457', 'Office no B79,Star Associates Building, Bank Road, Bahria Enclave');
 INSERT INTO `agents` (`user_id`, `agent_company`, `success_rate`, `agent_id`) VALUES ('1009', 'Star Associates', '0', '342'), ('1011', 'Capital Properties', '0', '343'), ('1015', 'Express Associates', '0', '344');
 INSERT INTO `fbr_officers` (`user_id`, `ID`) VALUES ('1013', '212');
INSERT INTO `non_filers` (`user_id`, `transaction_id_buy`, `transaction_id_rent`) VALUES ('1002', '11', '1'), ('1011', '12', '2');
INSERT INTO `non_filers` (`user_id`, `transaction_id_buy`, `transaction_id_rent`) VALUES ('1006', '11', NULL), ('1017', NULL, '2');
INSERT INTO `filers` (`NTN`, `user_id`) VALUES  ('0182934', '1009'),('0123452',
'1010');
INSERT INTO `transactions_buy` (`transaction_id_buy`, `property_id`, `agent_id`, `tr_price`, `date_time`) VALUES ('12', '904', '343', '890000', current_timestamp()), ('13', '903', '342', '560000', current_timestamp());
INSERT INTO `transactions_rent` (`transaction_id_rent`, `property_id`, `agent_id`, `tr_price`, `date_time`) VALUES ('2', '906', '343', '450000', current_timestamp());
INSERT INTO `sell_buy_property` (`user_id`, `price`, `agent_id`, `property_id`, `property_desc`) VALUES ('1008', '5600000', '342', '903', 'Furnished Office');
INSERT INTO `sell_buy_property` (`user_id`, `price`, `agent_id`, `property_id`, `property_desc`) VALUES ('1006', '14500000', '341', '902', 'Studio Office, attached TV room'); /*902 KA ALREADY PRESENT RECORD ISS TABLE MEIN SE DELETE KAR LENA*/
INSERT INTO `sell_buy_property` (`user_id`, `price`, `agent_id`, `property_id`, `property_desc`) VALUES ('1010', '8900000', '343', '904', 'Single story house, 2 bedrooms, attached bathrooms. TV ');
INSERT INTO `rent_property` (`property_id`, `user_id`, `agent_id`, `rent_price`, `property_desc`) VALUES ('906', '1017', '341', '45000', 'Small 800 sqft, one room shop.\r\nGlass Windows\r\nattached shelves\r\nOff white walls\r\nsliding door');


