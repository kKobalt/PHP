create table person (
	id_person integer not null auto_increment primary key,
	jmeno varchar(30) not null,
	prijmeni varchar(30) not null,
	login varchar(30) not null,
	heslo varchar(30) not null
	);



create user user1@localhost identified by 'heslo';
grant select, insert, update on phptest.* to user1@localhost;