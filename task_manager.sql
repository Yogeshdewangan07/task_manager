CREATE DATABASE `crud`;

CREATE TABLE `registration` (
	id int(11) PRIMARY KEY AUTO_INCREMENT,
    firstname varchar(255),
    lastname varchar(255),
    email varchar(255) UNIQUE,
    password varchar(255),
    unique_id varchar(255) NOT NULL
);

CREATE TABLE `tasks` (
	id int(11) PRIMARY KEY AUTO_INCREMENT,
    task_name varchar(255),
    category varchar(255),
    start_date varchar(255),
    end_date varchar(255),
    description text,
    user_id varchar(255) NOT NULL
);