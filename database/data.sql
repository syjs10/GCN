CREATE USER 'gcn'@'localhost' IDENTIFIED BY 'gcn@2017'; 
CREATE DATABASE `gcn` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
GRANT ALL ON `gcn`.* TO 'gcn'@'%' IDENTIFIED BY 'gcn@2017'; 

USE gcn;
create table student
(
	id int unsigned not null auto_increment primary key,
	name char (10) not null,
	gender char (4) not null,
	studentid char (15) not null,
	class char (50) not null,
	phonenum char (11) not null,
	qqnum char (15) not null,
	department0 char (6),
	department1 char (6),
	department2 char (6),
	department3 char (6),
	introduction text,
	employ_department char (6) default null,
	employ_department1 char (6) default null,
	employ_department2 char (6) default null,
	employ_department3 char (6) default null,
	UNIQUE KEY (phonenum)

);
create table review
(
	id int unsigned not null,
	department char (6) not null,
	score int unsigned not null,
	review text,
	UNIQUE KEY (id, department)
);
create table admin
(
	id int unsigned not null auto_increment primary key,
	username char (10) not null,
	name char (6) not null,
	password char (40) not null
);
insert into admin values
	(NULL ,'root', 'root', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3'),
	(NULL ,'jishu', '技术部','a94a8fe5ccb19ba61c4c0873d391e987982fbbd3'),
	(NULL ,'yingyin', '影音部','a94a8fe5ccb19ba61c4c0873d391e987982fbbd3'),
	(NULL ,'xuanchuan', '宣传部','a94a8fe5ccb19ba61c4c0873d391e987982fbbd3'),
	(NULL ,'caibian', '采编部','a94a8fe5ccb19ba61c4c0873d391e987982fbbd3'),
	(NULL ,'waishi', '外事部','a94a8fe5ccb19ba61c4c0873d391e987982fbbd3'),
	(NULL ,'cehua', '策划部','a94a8fe5ccb19ba61c4c0873d391e987982fbbd3')
;