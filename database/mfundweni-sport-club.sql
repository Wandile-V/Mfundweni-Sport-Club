CREATE TABLE members{
    memberName VARCHAR(20) NOT NULL,
    memberSurname VARCHAR(20) NOT NULL,
    memberEmail VARCHAR(20) NOT NULL,
    memberPhone VARCHAR(10) NOT NULL,
    memberPassword VARCHAR(30) NOT NULL
}

CREATE TABLE players{
    playerName VARCHAR(20) NOT NULL,
    playerSurname VARCHAR(20) NOT NULL,
    playerEmail VARCHAR(20) NULL,
    dateOfBirth DATE NOT NULL,
    position VARCHAR(30) NOT NULL
}