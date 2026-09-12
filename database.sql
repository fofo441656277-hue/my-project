CREATE DATABASE testdb;
USE testdb;
CREATE TABLE students (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(50),
  age INT
);
INSERT INTO students (name, age) VALUES ('علي', 20), ('سارة', 22);