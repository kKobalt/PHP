CREATE USER eshop@localhost IDENTIFIED BY 'hesloeshop';
GRANT SELECT, INSERT, UPDATE, DELETE ON eshop.* TO eshop@localhost;
