CREATE TABLE members(
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
    playerEmail VARCHAR(20) NOT NULL,
    playerDateOfBirth DATE NOT NULL,
    playerPosition VARCHAR(30) NOT NULL,
    playerShirtNumber int(2) NOT NULL
);
INSERT INTO players VALUES (1, "King", "Veza", "King@gmail.com", "1997-12-25", "Midfielder",10); /*Line to test inserts*/
