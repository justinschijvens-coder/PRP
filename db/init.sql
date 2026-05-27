CREATE DATABASE IF NOT EXISTS orthia;

USE orthia;

CREATE TABLE IF NOT EXISTS patients (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    status VARCHAR(50),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO patients (name, getekend)
VALUES
('Jaap Jansen', 'ja'),
('arnoud', 'nee');
