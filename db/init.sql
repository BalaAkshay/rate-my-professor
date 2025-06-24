CREATE DATABASE IF NOT EXISTS rmp;
USE rmp;

-- Users table (login)
CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) UNIQUE NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
-- Insert demo user: username=student, password=pass123
INSERT IGNORE INTO users (username, password)
VALUES ('student', SHA2('pass123',256));

-- Ratings table
CREATE TABLE IF NOT EXISTS ratings (
  id INT PRIMARY KEY AUTO_INCREMENT,
  prof_name VARCHAR(100),
  rating INT,
  comment TEXT,
  user VARCHAR(50),
  submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
