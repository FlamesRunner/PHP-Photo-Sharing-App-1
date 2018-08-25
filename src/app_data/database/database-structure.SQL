CREATE TABLE IF NOT EXISTS users (
    username VARCHAR(16) NOT NULL,
    password VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    profile_pic VARCHAR(36) NULL
);

CREATE TABLE IF NOT EXISTS photos (
    username VARCHAR(16) NOT NULL,
    id INT NOT NULL,
    text VARCHAR(36) NULL,
    created VARCHAR(100) NOT NULL,
    url VARCHAR(100) NOT NULL,
    PRIMARY KEY (id)
);