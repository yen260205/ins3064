-- Sử dụng database LoginReg (nếu chưa có thì tạo)
CREATE DATABASE IF NOT EXISTS `LoginReg` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `LoginReg`;

-- Xóa bảng table1 cũ (nếu có)
DROP TABLE IF EXISTS `table1`;

-- Tạo bảng table1 mới
CREATE TABLE `table1` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `brand` VARCHAR(100) NOT NULL,
  `processor` VARCHAR(100) NOT NULL,
  `ram` VARCHAR(50) NOT NULL,
  `storage` VARCHAR(50) NOT NULL,
  `screen_size` VARCHAR(20) NOT NULL,
  `price` DECIMAL(10, 2) NOT NULL,
  `stock` INT DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Thêm dữ liệu mẫu
INSERT INTO `table1` (`name`, `brand`, `processor`, `ram`, `storage`, `screen_size`, `price`, `stock`) VALUES
('MacBook Air M2', 'Apple', 'Apple M2', '8GB', '256GB SSD', '13.6 inch', 1199.00, 25),
('Dell XPS 15', 'Dell', 'Intel Core i7-13700H', '16GB', '512GB SSD', '15.6 inch', 1799.00, 15),
('ASUS ROG Strix G16', 'ASUS', 'Intel Core i9-13980HX', '32GB', '1TB SSD', '16 inch', 2299.00, 10),
('Lenovo ThinkPad X1 Carbon', 'Lenovo', 'Intel Core i5-1335U', '16GB', '512GB SSD', '14 inch', 1499.00, 20),
('HP Pavilion 15', 'HP', 'AMD Ryzen 5 7530U', '8GB', '512GB SSD', '15.6 inch', 699.00, 35);
