-- DROP DATABASE users; 
-- CREATE DATABASE sipols;
-- USE sipols;

/*CREATE TABLE users (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    username VARCHAR (12) NOT NULL , 
    pass VARCHAR (50) NOT NULL 
);

INSERT INTO users
(username, pass)
VALUES 
("admin","parole123");

SELECT * FROM users;

*/

CREATE TABLE stars (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    user_id INT NOT NULL,
    images VARCHAR (255) NOT NULL
);