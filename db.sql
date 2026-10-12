create database evaluation;
use evaluation;

create table users(id int primary key auto_increment, full_name varchar(100), email varchar(150) unique, password varchar(255));
 create table photographs(pid int primary key auto_increment, user_id int, photo_title varchar (200), photographer_name varchar(200), category varchar(200), description text, image varchar(255), created_at timestamp);


alter table photographs add constraint f_key foreign key (user_id) references users (id) on delete cascade;
