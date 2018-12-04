PRAGMA foreign_keys = ON;
.mode columns
.headers on
.nullvalue NULL

-- TABLE: User
DROP TABLE IF EXISTS User;

CREATE TABLE User (
    ID INTEGER PRIMARY KEY AUTOINCREMENT,
    Username STRING UNIQUE NOT NULL,
    Password CHAR(255) NOT NULL,
    Name STRING NOT NULL,
    Email STRING NOT NULL UNIQUE
);
