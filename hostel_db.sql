CREATE DATABASE hostel_db;
USE hostel_db;

CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    age INT,
    contact VARCHAR(20),
    room_no VARCHAR(10),
    fees_paid DECIMAL(10, 2)
);
