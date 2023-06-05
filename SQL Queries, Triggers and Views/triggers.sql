
create trigger message_transaction_buy after insert on transactions_buy
for each row
insert into records
values("On"+new.date_time+"transaction with id: "+cast(new.transaction_id_buy as varchar(20))+"occurred. Property (ID- "+cast(new.property_id as varchar(20))+") sold for "+ cast(new.tr_price as varchar(20))+" rupees");

create trigger message_transaction_rent after insert on transactions_rent
for each row
insert into records
values("On"+new.date_time+"transaction with id: "+cast(new.transaction_id_rent as varchar(20))+"occurred. Property (ID- "+cast(new.property_id as varchar(20))+") rented for "+ cast(new.tr_price as varchar(20))+" rupees");

create trigger owner_update_property after insert
on property_info 
for each row
insert into owner
values(new.user_id, new.property_id);
