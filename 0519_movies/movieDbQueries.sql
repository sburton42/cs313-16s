CREATE TABLE movie
(
	id INT PRIMARY KEY AUTO_INCREMENT,
	title VARCHAR(100) NOT NULL,
	year INT
)

CREATE TABLE actor
(
	id INT PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(300) NOT NULL
)

CREATE TABLE actorMovie
(
	id INT PRIMARY KEY AUTO_INCREMENT,
	actorId INT NOT NULL,
	movieId INT NOT NULL,
	`character` VARCHAR(100),
	FOREIGN KEY (actorId) REFERENCES actor(id),
	FOREIGN KEY (movieId) REFERENCES movie(id)
)

INSERT INTO movie(title, year) VALUES ('Star Wars IV : A New Hope', 1977), ('Raiders of the Lost Ark', 1981);

INSERT INTO actor(name) VALUES ('Harrison Ford'), ('Mark Hamill'), ('Carrie Fisher');

INSERT INTO actorMovie(actorId, movieId, `character`) VALUES (2, 1, 'Luke Skywalker'), (1, 1, 'Han Solo'), (1, 2, 'Henry Jones Jr.');

SELECT * FROM movie m
  JOIN actorMovie am ON m.id = am.movieId
  WHERE actorId = 2;

SELECT * FROM movie m
  JOIN actorMovie am ON m.id = am.movieId
  JOIN actor a ON am.actorId = a.id
  WHERE a.name = 'Harrison Ford';

CREATE USER 'steve'@'localhost' IDENTIFIED BY 'nerdface';

GRANT SELECT ON movies.* TO 'steve'@'localhost';


