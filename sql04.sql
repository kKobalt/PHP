USE eshop;
create table objednavka (
	id_objednavka integer not null auto_increment primary key,
	jmeno varchar(100) not null,
	ulice varchar(150) not null,
	mesto varchar(100) not null,
	psc integer
	);

alter table objednavka modify psc integer not null;