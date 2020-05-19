USE eshop;
create user eshop@localhost identified by 'heslo';
grant select, insert, update, delete on eshop.* to eshop@localhost;

select distinct user, password from mysql.user;
select user();
desc mysql.user;