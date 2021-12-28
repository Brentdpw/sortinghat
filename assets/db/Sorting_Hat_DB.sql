drop database if exists sortinghat;

create database sortinghat;

use sortinghat;

CREATE TABLE Users (
  userID int NOT NULL unique auto_increment,
  firstname  char(50) NOT NULL ,
  lastname char(60) NOT NULL ,
  emailadress varchar(100) NOT NULL,
  age int not null,
  PRIMARY KEY (UserID)
);

CREATE TABLE Houses (
  housesID int NOT NULL unique auto_increment,
  house_name char(50) NOT NULL ,
  PRIMARY KEY (HousesID)
);

insert into Houses(House_name) value ("Ravenclaw");
insert into Houses(House_name) value ("Slytherin");
insert into Houses(House_name) value ("Gryffindor");
insert into Houses(House_name) value ("Hufflepuff");



CREATE TABLE Vote (
  VoteID int NOT NULL unique auto_increment,
  HouseID int not null,
  UserID int not null,
  PRIMARY KEY (VoteID),
  foreign key (UserID) references Users(UserID),
  foreign key (HouseID) references Houses(HousesID)
);
