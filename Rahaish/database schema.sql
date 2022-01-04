create database Rahaish;
create table users
(user_name varchar(20),
user_email varchar(20) NOT NULL,
user_phone char(11) NOT NULL, 
user_password varchar(20) NOT NULL,
user_role varchar(20) NOT NULL, 
user_CNIC char(20) NOT NULL, 
user_id int auto_increment, 
CONSTRAINT user_pk
PRIMARY KEY(user_id));

create table Property_Info
(property_id int auto_increment, 
area_unit INT NOT NULL, 
user_id int, 
property_type varchar(20) DEFAULT 'unknown',
property_classification varchar(20) DEFAULT 'unknown',  
CONSTRAINT property_pk
PRIMARY KEY(property_id),
CONSTRAINT property_fk
FOREIGN KEY (user_id) REFERENCES users(user_id));

create table Housing_Society
(society_id int auto_increment,
area char(10) NOT NULL, 
society_name varchar(20) NOT NULL,
no_of_bought int DEFAULT 0, 
no_of_rented int DEFAULT 0,
society_description text(100), 
CONSTRAINT society_pk
PRIMARY KEY(society_id));

create table Agents
(user_id int ,
agent_company varchar(20) NOT NULL,
success_rate char(10) DEFAULT 0,
agent_id int auto_increment,
CONSTRAINT agent_pk
PRIMARY KEY(agent_id),
CONSTRAINT agent_fk
FOREIGN KEY(user_id) REFERENCES users(user_id));

create table Transactions_Rent
(transaction_id_rent int auto_increment, 
property_id int,
agent_id int,
tr_price char(10) NOT NULL,
date_time timestamp,
CONSTRAINT tr_pk
PRIMARY KEY(transaction_id_rent),
CONSTRAINT tr_fk_1
FOREIGN KEY(property_id) REFERENCES Property_Info(property_id),
CONSTRAINT tr_fk_2
FOREIGN KEY(agent_id) REFERENCES Agents(agent_id));

create table Transactions_Buy
(transaction_id_buy int auto_increment,
property_id int,
agent_id int,
tr_price char(10) NOT NULL,
date_time timestamp,
CONSTRAINT tb_pk
PRIMARY KEY(transaction_id_buy),
CONSTRAINT tb_fk_1
FOREIGN KEY(property_id) REFERENCES Property_Info(property_id),
CONSTRAINT tb_fk_2
FOREIGN KEY(agent_id) REFERENCES Agents(agent_id));

create table FBR_Officers
(user_id int, 
ID int ,
CONSTRAINT fbr_pk
PRIMARY KEY(ID),
CONSTRAINT fbr_fk
FOREIGN KEY(user_id) REFERENCES users(user_id)); 

create table permission
(permission_id int auto_increment, 
user_id int, 
permission_type varchar(20),
permission_desc varchar(50),
CONSTRAINT per_pk 
PRIMARY KEY (permission_id),
CONSTRAINT per_fk
FOREIGN KEY(user_id) REFERENCES users(user_id)); 

create table filers
(NTN char(20), 
user_id int, 
CONSTRAINT filer_pk
PRIMARY KEY (NTN),
CONSTRAINT filer_fk
FOREIGN KEY(user_id) REFERENCES users(user_id));

create table non_filers
(user_id int,  
transaction_id_buy int,
transaction_id_rent int,
CONSTRAINT non_filer_fk_1
FOREIGN KEY(transaction_id_buy) REFERENCES Transactions_Buy(transaction_id_buy),
CONSTRAINT non_filer_fk_2
FOREIGN KEY(transaction_id_rent) REFERENCES Transactions_Rent(transaction_id_rent),
CONSTRAINT non_filer_fk_3
FOREIGN KEY(user_id) REFERENCES users(user_id));

create table Photo
(photo_id int, 
photo_type varchar(20),
property_id int,
CONSTRAINT photo_pk
PRIMARY KEY(photo_id),
CONSTRAINT photo_fk
FOREIGN KEY(property_id) REFERENCES Property_Info(property_id));

create table owner
(user_id int, 
property_id int, 
CONSTRAINT owner_fk_1
FOREIGN KEY(user_id) REFERENCES users(user_id),
CONSTRAINT owner_fk_2
FOREIGN KEY(property_id) REFERENCES Property_Info(property_id));

create table Residential_Buildings
(property_id int, 
no_of_bedrooms int, 
residential_type varchar(20),
no_of_bathrooms int,
CONSTRAINT res_fk
FOREIGN KEY(property_id) REFERENCES Property_Info(property_id));

create table Address
(property_id int,
society_id int, 
address_desc text, 
CONSTRAINT add_fk_1
FOREIGN KEY(property_id) REFERENCES Property_Info(property_id),
CONSTRAINT add_fk_2
FOREIGN KEY(society_id) REFERENCES Housing_Society(society_id)
);

create table Commercial
(property_id int,
commercial_type varchar(20),
CONSTRAINT comm_fk
FOREIGN KEY(property_id) REFERENCES Property_Info(property_id));

create table society_rep
(society_id int,
user_id int, 
CONSTRAINT soc_fk_1
FOREIGN KEY(user_id) REFERENCES users(user_id),
CONSTRAINT soc_fk_2
FOREIGN KEY(society_id) REFERENCES Housing_Society(society_id)
);

create table sell_buy_property
(user_id int, 
price double, 
agent_id int, 
property_id int, 
property_desc text,
CONSTRAINT sell_fk_1
FOREIGN KEY(user_id) REFERENCES users(user_id),
CONSTRAINT sell_fk_2
FOREIGN KEY(property_id) REFERENCES Property_Info(property_id));

create table rent_property
(property_id int,
user_id int,
agent_id int, 
rent_price double, 
property_desc text,
CONSTRAINT rent_fk_1
FOREIGN KEY(user_id) REFERENCES users(user_id),
CONSTRAINT rent_fk_2
FOREIGN KEY(property_id) REFERENCES Property_Info(property_id));

