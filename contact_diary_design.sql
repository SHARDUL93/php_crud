#Create
create database if not exists contacts;
#Use
use contacts;
#Drop
drop database if exists contacts;

#Build Schema
	#create
    create table contacts(
    id int(11) not null primary key auto_increment,
    name varchar(30) not null,
    email varchar(30) not null,
    phone int(30) not null
    );
    #drop
    drop table if exists contacts; 
        
#Insert Data
	insert into contacts(name,email,phone) values
			('From workbench','wb@mail.com',12345);

#View Data
    select * from contacts;
    
#Delete Data
    delete from contacts where id= 1;
    
#Update Data
update contacts set name='name' where id=1;

