-- create table user
create table users(
id int not null auto_increment,
username varchar(20) not null,
email varchar(30) not null,
primary key (id)
);


create table posts(
id int not null auto_increment,
title varchar(255) not null,
body text, 
primary key(id)
);