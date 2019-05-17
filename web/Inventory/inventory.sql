CREATE TABLE type (
id SERIAL PRIMARY KEY
, type VARCHAR(50) NOT NULL
, media INT        NOT NULL
);

CREATE TABLE console (
id SERIAL PRIMARY KEY
, console VARCHAR(50) NOT NULL
);

CREATE TABLE genre (
id SERIAL PRIMARY KEY
, genre VARCHAR(50) NOT NULL
, media INT NOT NULL
);

CREATE TABLE rating (
id SERIAL PRIMARY KEY
, rating VARCHAR(20) NOT NULL
, media INT NOT NULL
);

CREATE TABLE users (
id SERIAL PRIMARY KEY
, email VARCHAR(100) UNIQUE NOT NULL
, password VARCHAR(200) NOT NULL
);

CREATE TABLE movies (
id SERIAL PRIMARY KEY
, title VARCHAR(100)
, subtitle VARCHAR(100)
, rating SERIAL REFERENCES rating(id)
, genre SERIAL REFERENCES genre(id)
, type SERIAL REFERENCES type(id)
, user_id SERIAL REFERENCES users(id)
);

CREATE TABLE video_games (
id SERIAL PRIMARY KEY
, title VARCHAR(100)
, subtitle VARCHAR(100)
, rating SERIAL REFERENCES rating(id)
, genre SERIAL REFERENCES genre(id)
, console SERIAL REFERENCES console(id)
, user_id SERIAL REFERENCES users(id)
);

CREATE TABLE music (
id SERIAL PRIMARY KEY
, title VARCHAR(100)
, artist VARCHAR(100)
, album VARCHAR(100)
, genre SERIAL REFERENCES genre(id)
, type SERIAL REFERENCES type(id)
, user_id SERIAL REFERENCES users(id)
);

INSERT INTO type
(type, media) VALUES
('BLU-RAY', 0)
, ('DIGITAL', 0);

INSERT INTO type
(type, media) VALUES
('VINYL', 2)
, ('CASSETTE', 2)
, ('CD', 2)
, ('DIGITAL', 2);

INSERT INTO console
(console) VALUES
('NINTEDO WII')
, ('PLAYSTATION 3')
, ('XBOX 360')
, ('PLAYSTATION 4')
, ('XBOX ONE')
, ('NINTEDO SWITCH')
, ('COMPUTER');


INSERT INTO genre
(genre, media) VALUES
('ACTION', 0)
, ('ADVENTURE', 0)
, ('ANIMATION', 0)
, ('COMEDY', 0)
, ('CRIME', 0)
, ('DRAMA', 0)
, ('FANTASY', 0)
, ('HISTORICAL', 0)
, ('HORROR', 0)
, ('LIVE ACTION', 0)
, ('MYSTERY', 0)
, ('POLITICAL', 0)
, ('ROMANCE', 0)
, ('SAGA', 0)
, ('SCIENCE FICTION', 0)
, ('SOCIAL', 0)
, ('THRILLER', 0);

INSERT INTO genre
(genre, media) VALUES
('ARCADE', 1)
, ('SHOOTER', 1)
, ('STRATEGY', 1)
, ('MUSICAL', 1)
, ('SIMULATION', 1)
, ('PUZZLE', 1)
, ('PARTY', 1)
, ('PLATFORM', 1)
, ('FIGHTING', 1)
, ('RACING', 1)
, ('RPG', 1)
, ('SPORTS', 1)
, ('SURVIVAL', 1)
, ('STEALTH', 1);

INSERT INTO genre
(genre, media) VALUES
('ALTERNATIVE', 2)
, ('COUNTRY', 2)
, ('CLASSICAL', 2)
, ('FOLK', 2)
, ('FUNK', 2)
, ('GOSPEL', 2)
, ('HIP HOP', 2)
, ('JAZZ', 2)
, ('OPERA', 2)
, ('POP', 2)
, ('REGGAE', 2)
, ('ROCK', 2)
, ('ROMANTIC', 2);

INSERT INTO rating
(rating, media) VALUES
('G', 0)
, ('PG', 0)
, ('PG-13', 0)
, ('R', 0)
, ('NC-17', 0);

INSERT INTO rating
(rating, media) VALUES
('E', 1)
, ('E 10+', 1)
, ('T', 1)
, ('M', 1)
, ('A', 1);



