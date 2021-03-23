create database c55_db character set utf8;
create user 'c55_user'@'localhost' identified by 'AAAaaa111';
grant all on c55_db.* to 'c55_user'@'localhost';

CREATE TABLE users (
	id INT AUTO_INCREMENT,
	username VARCHAR(40) NOT NULL,
	first_name VARCHAR(40) NOT NULL,
	last_name VARCHAR(40) NOT NULL,
	password VARCHAR(255) NOT NULL,
	visibility INT NOT NULL,
	PRIMARY KEY pk_users (id),
	UNIQUE INDEX uk_username (username)
) engine = innoDB;

insert into users(username, first_name, last_name, password, visibility) values 
('ftheriault', 'Fred', 'Theriault', '$2a$06$wpxjvPG7GoLM970BCzHK/ulcOQjymZyzC6QRCMvCYwSE4ptTZ28mW', 1);

insert into users(username, first_name, last_name, password, visibility) values  
('arthax', 'Arthax', 'GhostInTheMachines', '$2a$06$wpxjvPG7GoLM970BCzHK/ulcOQjymZyzC6QRCMvCYwSE4ptTZ28mW', 1);

// Les mots de passe sont tous "test"
