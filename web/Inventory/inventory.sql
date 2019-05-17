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
