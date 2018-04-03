CREATE DATABASE bffbook;

CREATE USER bffadmin@localhost IDENTIFIED BY 'pa55word'; 

GRANT ALL ON *.* TO bffadmin@localhost;

CREATE TABLE test (
    id   INTEGER ,
    name VARCHAR (50)
);