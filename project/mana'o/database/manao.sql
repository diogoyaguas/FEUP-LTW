PRAGMA foreign_keys = ON;
.mode columns
.headers on
.nullvalue NULL

BEGIN TRANSACTION; -- TABLES

-- TABLE: User
DROP TABLE IF EXISTS User;

CREATE TABLE User (
    ID       INTEGER PRIMARY KEY AUTOINCREMENT,
    Username STRING UNIQUE NOT NULL,
    Password CHAR (256) NOT NULL,
    Name     STRING NOT NULL,
    Email    STRING NOT NULL UNIQUE,
);

COMMIT TRANSACTION;