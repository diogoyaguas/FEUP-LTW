PRAGMA foreign_keys = ON;
.mode columns
.headers on
.nullvalue NULL

-- TABLE: User
DROP TABLE IF EXISTS User;

CREATE TABLE User (
    ID INTEGER PRIMARY KEY AUTOINCREMENT,
    Username STRING UNIQUE NOT NULL,
    Password CHAR(256) NOT NULL,
    Name STRING NOT NULL,
    Email STRING NOT NULL UNIQUE,
    Bio STRING,
    Profile_Pic STRING NOT NULL UNIQUE DEFAULT "default.png",
    Posts INTEGER DEFAULT 0,
    Comments INTEGER DEFAULT 0,
    Upvotes INTEGER DEFAULT 0,
    Downvotes INTEGER DEFAULT 0,
    ParticipationDate STRING NOT NULL
);

-- TABLE: Quotes
DROP TABLE IF EXISTS Quotes;

CREATE TABLE Quotes (
    ID INTEGER PRIMARY KEY AUTOINCREMENT,
    Quote STRING NOT NULL
);

-- TABLE: Post
DROP TABLE IF EXISTS Post;

CREATE TABLE Post (
    ID INTEGER PRIMARY KEY AUTOINCREMENT,
    User_ID STRING NOT NULL REFERENCES User,
    Title STRING NOT NULL,
    Text STRING NOT NULL,
    Date DATETIME NOT NULL,
    Upvotes INTEGER DEFAULT 0,
    Downvotes INTEGER DEFAULT 0
);

-- TABLE: Comments
DROP TABLE IF EXISTS Comments;

CREATE TABLE Comments (
	ID INTEGER PRIMARY KEY AUTOINCREMENT,
	Post_ID INTEGER REFERENCES Post,
	User_ID STRING NOT NULL REFERENCES User,
	Text STRING NOT NULL,
	Date DATETIME NOT NULL,
	Upvotes INTEGER DEFAULT 0,
    Downvotes INTEGER DEFAULT 0
);