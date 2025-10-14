-- Xóa bảng cũ nếu tồn tại
DROP TABLE IF EXISTS `userReg`;

-- Tạo hoặc sử dụng database
CREATE DATABASE IF NOT EXISTS loginreg CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE loginreg;

-- Tạo bảng mới
CREATE TABLE userReg (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    StudentID VARCHAR(50),
    Date_of_Birth DATE,
    Country VARCHAR(100)
);

-- Insert dữ liệu mẫu (nếu cần)
INSERT INTO userReg (name, password, StudentID, Date_of_Birth, Country)
VALUES 
    ('admin', 'admin123', 'ST001', '2000-01-01', 'Vietnam'),
    ('user1', 'pass123', 'ST002', '1999-05-15', 'Thailand');