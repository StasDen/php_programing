CREATE SCHEMA IF NOT EXISTS feedbacks;
USE feedbacks;

DROP TABLE IF EXISTS feedback;

CREATE TABLE IF NOT EXISTS feedback (
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(40) NOT NULL,
    email VARCHAR(60) NOT NULL,
    body TEXT NOT NULL,
    send_date DATETIME(6),
    PRIMARY KEY(id)
) ENGINE=INNODB;
