use eshop;
create table produkt (
	id_produkt INTEGER NOT NULL auto_increment PRIMARY KEY,
	nazev VARCHAR(50) NOT NULL,
	popis VARCHAR(1000) NOT NULL
	);