CREATE TABLE IF NOT EXISTS users (
    username VARCHAR(16) NOT NULL,
    password VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    profile_pic VARCHAR(36) NULL
);

CREATE TABLE IF NOT EXISTS photos (
    username VARCHAR(16) NOT NULL,
    id INT NOT NULL,
    text VARCHAR(100) NULL,
    url VARCHAR(100) NOT NULL,
    created VARCHAR(100) NOT NULL,
    year INT NOT NULL,
    month INT NOT NULL,
    day INT NOT NULL,
    hour INT NOT NULL,
    minute INT NOT NULL,
    second INT NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS comments (
    username VARCHAR(16) NOT NULL,
    photo_id INT NOT NULL,
    text VARCHAR(1500) NOT NULL,
    created VARCHAR(100) NOT NULL,
    year INT NOT NULL,
    month INT NOT NULL,
    day INT NOT NULL,
    hour INT NOT NULL,
    minute INT NOT NULL,
    second INT NOT NULL
);