PRAGMA foreign_keys = ON;
.mode columns
.headers on
.nullvalue NULL

-- Table: User
DROP TABLE IF EXISTS User;

CREATE TABLE User (
    ID                INTEGER    PRIMARY KEY AUTOINCREMENT,
    Username          STRING     UNIQUE
                                 NOT NULL,
    Password          CHAR (256) NOT NULL,
    Name              STRING     NOT NULL,
    Email             STRING     NOT NULL
                                 UNIQUE,
    Bio               STRING,
    Profile_Pic       STRING     NOT NULL
                                 DEFAULT [default.png],
    Posts             INTEGER    DEFAULT 0,
    Comments          INTEGER    DEFAULT 0,
    Upvotes           INTEGER    DEFAULT 0,
    Downvotes         INTEGER    DEFAULT 0,
    ParticipationDate STRING     NOT NULL
);

-- Table: Quotes
DROP TABLE IF EXISTS Quotes;

CREATE TABLE Quotes (
    ID    INTEGER PRIMARY KEY AUTOINCREMENT,
    Quote STRING  NOT NULL
);

-- Table: Post
DROP TABLE IF EXISTS Post;

CREATE TABLE Post (
    ID        INTEGER PRIMARY KEY AUTOINCREMENT,
    User_ID   INTEGER NOT NULL
                      REFERENCES User (ID),
    Title     STRING  NOT NULL,
    Text      STRING  NOT NULL,
    Date      STRING  NOT NULL,
    Upvotes   INTEGER DEFAULT 0,
    Downvotes INTEGER DEFAULT 0
);

-- Table: Comments
DROP TABLE IF EXISTS Comments;

CREATE TABLE Comments (
    ID        INTEGER PRIMARY KEY AUTOINCREMENT,
    Post_ID   INTEGER REFERENCES Post,
    User_ID   INTEGER NOT NULL
                      REFERENCES User (ID),
    Text      STRING  NOT NULL,
    Date      STRING  NOT NULL,
    Upvotes   INTEGER DEFAULT 0,
    Downvotes INTEGER DEFAULT 0
);

-- Table: UpPost
DROP TABLE IF EXISTS UpPost;

CREATE TABLE UpPost (
    User_ID INTEGER NOT NULL
                    REFERENCES User,
    Post_ID INTEGER NOT NULL
                    REFERENCES Post
);

-- Table: DownPost
DROP TABLE IF EXISTS DownPost;

CREATE TABLE DownPost (
    User_ID INTEGER NOT NULL
                    REFERENCES User,
    Post_ID INTEGER NOT NULL
                    REFERENCES Post
);

-- Table: UpComment
DROP TABLE IF EXISTS UpComment;

CREATE TABLE UpComment (
    User_ID    INTEGER NOT NULL
                       REFERENCES User,
    Comment_ID INTEGER NOT NULL
                       REFERENCES Comments (ID) 
);

-- Table: DownComment
DROP TABLE IF EXISTS DownComment;

CREATE TABLE DownComment (
    User_ID    INTEGER NOT NULL
                       REFERENCES User,
    Comment_ID INTEGER NOT NULL
                       REFERENCES Comments (ID) 
);