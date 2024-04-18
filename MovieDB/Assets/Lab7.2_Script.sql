CREATE DATABASE MartVid;

USE MartVid;

CREATE TABLE if not exists director
(
	DirectorID INT PRIMARY KEY,
    FirstName VARCHAR(25),
    LastName VARCHAR(25),
    DirectorPic VARCHAR(255)
);

CREATE TABLE if not exists genre
(
	GenreID VARCHAR(2) PRIMARY KEY,
    GenreName VARCHAR(25)
);

CREATE TABLE if not exists movie
(
	MovieID INT PRIMARY KEY,
    DirectorID INT,
    GenreID VARCHAR(2),
    Title VARCHAR(50),
    ReleaseYear DATE,
    MoviePic VARCHAR(255),
    foreign key(DirectorID) references director(DirectorID),
    foreign key(GenreID) references genre(GenreID)
);

INSERT INTO genre (GenreID, GenreName)
VALUES('DR', 'Drama');

INSERT INTO genre (GenreID, GenreName)
VALUES('AC', 'Action');

INSERT INTO genre (GenreID, GenreName)
VALUES('CO', 'Comedy');

INSERT INTO director (DirectorID, FirstName, LastName, DirectorPic)
VALUES(101, 'Jay', 'Roach', 'Images/Directors/Jay_Roach.jpg');

INSERT INTO director (DirectorID, FirstName, LastName, DirectorPic)
VALUES(102, 'Ridley', 'Scott', 'Images/Directors/Ridley_Scott.jpg');

INSERT INTO director (DirectorID, FirstName, LastName, DirectorPic)
VALUES(103, 'Steven', 'Spielberg', 'Images/Directors/Steven_Spielberg.jpg');

INSERT INTO director (DirectorID, FirstName, LastName, DirectorPic)
VALUES(104, 'Walter', 'Sales', 'Images/Directors/Walter_Salles.jpg');

INSERT INTO director (DirectorID, FirstName, LastName, DirectorPic)
VALUES(105, 'Francis', 'Ford Coppola', 'Images/Directors/Francis_Ford_Coppola.jpg');

INSERT INTO movie (MovieID, DirectorID, GenreID, Title, ReleaseYear, MoviePic)
VALUES(1, '104', 'DR', 'The Motorcycle Diaries', '2024-01-15', 'Images/Posters/The_Motorcycle_Diaries.jpg');

INSERT INTO movie (MovieID, DirectorID, GenreID, Title, ReleaseYear, MoviePic)
VALUES(2, '102', 'AC', 'Gladiator', '2000-05-01', 'Images/Posters/Gladiator.png');

INSERT INTO movie (MovieID, DirectorID, GenreID, Title, ReleaseYear, MoviePic)
VALUES(3, '103', 'DR', 'Saving Private Ryan', '1998-07-24', 'Images/Posters/Saving_Private_Ryan_poster.jpg');

INSERT INTO movie (MovieID, DirectorID, GenreID, Title, ReleaseYear, MoviePic)
VALUES(4, '101', 'CO', 'Austin Powers: International Man of Mystery', '1997-05-02', 'Images/Posters/Austin_Powers_International_Man_of_Mystery.jpg');

INSERT INTO movie (MovieID, DirectorID, GenreID, Title, ReleaseYear, MoviePic)
VALUES(5, '103', 'DR', 'Schindlers List', '1993-11-30', 'Images/Posters/Schindler_List_movie.jpg');

INSERT INTO movie (MovieID, DirectorID, GenreID, Title, ReleaseYear, MoviePic)
VALUES(6, '105', 'DR', 'The Godfather', '1972-03-14', 'Images/Posters/The_Godfather.jpg');