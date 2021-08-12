CREATE TABLE members (
    memberID INT(10) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    memberName VARCHAR(20) NOT NULL,
    memberSurname VARCHAR(20) NOT NULL,
    memberEmail VARCHAR(20) NOT NULL,
    memberPhone VARCHAR(10) NOT NULL,
    memberPassword VARCHAR(30) NOT NULL
);

CREATE TABLE players(
    playerID INT(10) PRIMARY KEY NOT NULL AUTO_INCREMENT, 
    playerName VARCHAR(20) NOT NULL,
    playerSurname VARCHAR(20) NOT NULL,
    playerEmail VARCHAR(20) NULL,
    dateOfBirth DATE NOT NULL,
    position VARCHAR(30) NOT NULL
);

CREATE TABLE playerRegistration(
    playerName VARCHAR(20) NOT NULL,
    playerSurname VARCHAR(20) NOT NULL,
    position VARCHAR(20) NOT NULL,
    phone VARCHAR(10) NOT NULL
);

INSERT INTO players VALUES (1, "King", "Veza", "King@gmail.com", DATE, "Midfielder"); /*Line to test inserts*/