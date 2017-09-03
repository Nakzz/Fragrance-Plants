
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_code` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(60) NOT NULL UNIQUE,
  `product_category` tinytext NOT NULL,
  `product_img_name` varchar(60) NOT NULL UNIQUE,
  'date_entry' DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `product_code` (`product_code`)
) AUTO_INCREMENT=1 ;

--
-- Dumping data for table `products`
--

--INSERT INTO `products` (`product_name`, `product_category`, `product_img_name`) VALUES
--(1, 'PD1001', 'Android Phone FX1', 'ng', 'android-phone.jpg', ),
--(2, 'PD1002', 'Television DXT', 'munasabah.', 'lcd-tv.jpg', NOW()),
--(3, 'PD1003', 'External Hard Disk', 'ayat yang', 'external-hard-disk.jpg', NOW()),
--(4, 'PD1004', 'Wrist Watch GE2', 'ternet.', 'wrist-watch.jpg', NOW());
