-- Tóth Júlia, 2022-04-28
--kek projekt

create database kek()
character set utf8
collate utf8_hungarian_ci;
use kek; --ezzel az egész bemásolható lesz egy parancssorba

create table dolgozok(
    az int not null primary key auto_increment,
    nev varchar(50);
    telepules varchar(50),
    fizetes double
);

--felhasználó létrehozása

grant all privileges
on kek.*
to kek@localhost
identified by 'titok';