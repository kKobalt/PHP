use eshop;

CREATE TABLE produkt(
	id_produkt INTEGER NOT NULL auto_increment,
	nazev VARCHAR(50) NOT NULL,
	popis VARCHAR(1000) NOT NULL,
	PRIMARY KEY (id_produkt)
);