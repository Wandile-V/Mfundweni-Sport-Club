CREATE TABLE Members{
    memberName VARCHAR(20) NOT NULL,
    surname VARCHAR(20) NOT NULL,
    email VARCHAR(20) NOT NULL,
    phone VARCHAR(10) NOT NULL,
    memberPassword VARCHAR(30) NOT NULL
}

CREATE TABLE Players{
    playerName VARCHAR(20) NOT NULL,
    surname VARCHAR(20) NOT NULL,
    email VARCHAR(20) NULL,
    dateOfBirth DATE NOT NULL,
    position VARCHAR(30) NOT NULL
}