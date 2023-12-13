-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2023 at 12:43 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kht`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_page`
--

CREATE TABLE `about_page` (
  `id` int(11) NOT NULL,
  `s1_header` varchar(100) NOT NULL,
  `s1_image` varchar(500) NOT NULL,
  `s1_description` varchar(500) NOT NULL,
  `s1_button_name` varchar(100) NOT NULL,
  `s1_button_link` varchar(500) NOT NULL,
  `s2_header` varchar(100) NOT NULL,
  `s2_description` varchar(500) NOT NULL,
  `s2_card1_icon` varchar(500) NOT NULL,
  `s2_card1_header` varchar(500) NOT NULL,
  `s2_card1_description` varchar(500) NOT NULL,
  `s2_card2_icon` varchar(500) NOT NULL,
  `s2_card2_header` varchar(500) NOT NULL,
  `s2_card2_description` varchar(500) NOT NULL,
  `s2_card3_icon` varchar(500) NOT NULL,
  `s2_card3_header` varchar(500) NOT NULL,
  `s2_card3_description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about_page`
--

INSERT INTO `about_page` (`id`, `s1_header`, `s1_image`, `s1_description`, `s1_button_name`, `s1_button_link`, `s2_header`, `s2_description`, `s2_card1_icon`, `s2_card1_header`, `s2_card1_description`, `s2_card2_icon`, `s2_card2_header`, `s2_card2_description`, `s2_card3_icon`, `s2_card3_header`, `s2_card3_description`) VALUES
(1, 'Tasty & Healthy Food Products', 'about.jpg', 'We are here to provide various food products in high quality to all over the world. According to the necessetis of our customers, we define our exceptional quality by evaluating the nutrition value and appearance of all the products we supply\r\n\r\nPremium Quality\r\n\r\nFood Safety\r\n\r\nFinest quality', 'read more', 'product.php', 'About Us', 'We make sure to supply the best products and services with great value to our customers.', 'icon-1.png', 'Mission', 'To provide the best and pure quality products to our customers and be a pioneer in the food processing industry in terms of Quality, Technology, Innovation and servicing.                                                                                                          ', 'icon-2.png', 'Vision', 'To be all inclusive Food Supplier – association that put quality, organization, and motivation as need to satisfy the necessities of our customers, partners, and the society.                                                                                                                                                                                                                                                                                        ', 'icon-3.png', 'Values', 'KHT General Trading looks forward to developing strong partnership with customers who demand the highest quality obtainable and insist on continuous improvement.                                                                                                                                                                                                                                                            ');

-- --------------------------------------------------------

--
-- Table structure for table `contact_page`
--

CREATE TABLE `contact_page` (
  `id` int(11) NOT NULL,
  `header` varchar(100) NOT NULL,
  `desc_1` varchar(500) NOT NULL,
  `desc_2` varchar(500) NOT NULL,
  `phone_num` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `location_url` varchar(1000) NOT NULL,
  `twitter` varchar(500) NOT NULL,
  `facebook` varchar(500) NOT NULL,
  `linkedIn` varchar(500) NOT NULL,
  `instagram` varchar(500) NOT NULL,
  `whatsApp` varchar(500) NOT NULL,
  `TikTok` varchar(500) NOT NULL,
  `youtube` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_page`
--

INSERT INTO `contact_page` (`id`, `header`, `desc_1`, `desc_2`, `phone_num`, `email`, `address`, `location_url`, `twitter`, `facebook`, `linkedIn`, `instagram`, `whatsApp`, `TikTok`, `youtube`) VALUES
(1, 'Contact Us', 'Get in touch with us. Talk to one of our expert and get advice on your requirements.', 'We are here to respond to any inquiries you may have about our goods and services. You are free to provide us your feedback as well. Connect with us and we’ll respond as soon as we can!', '+971 123 45678', 'info@kht.com', 'dubai, uae', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4667062.978102121!2d53.948575!3d24.354007!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5e48dfb1ab12bd%3A0x33d32f56c0080aa7!2sUnited%20Arab%20Emirates!5e1!3m2!1sen!2sin!4v1702453755821!5m2!1sen!2sin                                                                                                                                                                               ', 'https://twitter.com/login', '', '', 'Instagram.com', '', '', 'https://www.youtube.com/');

-- --------------------------------------------------------

--
-- Table structure for table `home_page`
--

CREATE TABLE `home_page` (
  `id` int(11) NOT NULL,
  `s1_header` varchar(500) DEFAULT NULL,
  `s1_image` varchar(500) NOT NULL,
  `s1_description` varchar(505) DEFAULT NULL,
  `s1_button_name` varchar(500) DEFAULT NULL,
  `s1_button_link` varchar(500) DEFAULT NULL,
  `s2_header` varchar(100) DEFAULT NULL,
  `s2_description` varchar(500) DEFAULT NULL,
  `s2_card1_icon` varchar(500) DEFAULT NULL,
  `s2_card1_header` varchar(100) DEFAULT NULL,
  `s2_card1_description` varchar(500) DEFAULT NULL,
  `s2_card2_icon` varchar(500) DEFAULT NULL,
  `s2_card2_header` varchar(500) DEFAULT NULL,
  `s2_card2_description` varchar(500) DEFAULT NULL,
  `s2_card3_icon` varchar(500) DEFAULT NULL,
  `s2_card3_header` varchar(500) DEFAULT NULL,
  `s2_card3_description` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home_page`
--

INSERT INTO `home_page` (`id`, `s1_header`, `s1_image`, `s1_description`, `s1_button_name`, `s1_button_link`, `s2_header`, `s2_description`, `s2_card1_icon`, `s2_card1_header`, `s2_card1_description`, `s2_card2_icon`, `s2_card2_header`, `s2_card2_description`, `s2_card3_icon`, `s2_card3_header`, `s2_card3_description`) VALUES
(1, 'We Focused On Quality', 'about-1.jpg', 'The quality of is KHT General Trading continuously improving, searching, setting and achieving new targets to meet customer satisfaction.\r\n\r\nTop Quality Products.\r\n\r\nAbility to handle diverse products and market segments.\r\n\r\nacquire products/services which are Cost effective, safe and reliable.\r\n\r\n', 'Read more', 'index.php', 'About Us', 'We make sure to supply the best products and services with great value to our customers.', 'icon-1.png', 'Mission', '                                            To provide the best and pure quality products to our customers and be a pioneer in the food processing industry in terms of Quality, Technology, Innovation and servicing.                                                                                                                        ', 'icon-2.png', 'Vision', 'To be all inclusive Food Supplier – association that put quality, organization, and motivation as need to satisfy the necessities of our customers, partners, and the society.                                                                                                                        ', 'icon-3.png', 'Values', 'KHT General Trading looks forward to developing strong partnership with customers who demand the highest quality obtainable and insist on continuous improvement.                                                                                                            ');

-- --------------------------------------------------------

--
-- Table structure for table `navbar_and_footer`
--

CREATE TABLE `navbar_and_footer` (
  `id` int(11) NOT NULL,
  `nav_logo` varchar(500) NOT NULL,
  `page1` varchar(500) NOT NULL,
  `page2` varchar(500) NOT NULL,
  `page3` varchar(500) NOT NULL,
  `page4` varchar(500) NOT NULL,
  `page5` varchar(500) NOT NULL,
  `footer_logo` varchar(500) NOT NULL,
  `footer_description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `navbar_and_footer`
--

INSERT INTO `navbar_and_footer` (`id`, `nav_logo`, `page1`, `page2`, `page3`, `page4`, `page5`, `footer_logo`, `footer_description`) VALUES
(1, 'logo.png', 'Home', 'About Us', 'products', 'our services', 'contact us', 'logo_white.png', 'KHT General Trading has been established in a fast dynamic developing country United Arab Emirates');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `created_at`) VALUES
(7, 'new Rice', 'rice.jpg', '2023-12-07 12:22:15'),
(8, 'Sona rice', 'Sona rice.jpg', '2023-12-08 18:19:26'),
(9, 'dal', 'product-2.jpg', '2023-12-08 18:22:10'),
(11, 'oil', 'oil.jpg', '2023-12-11 07:36:35'),
(12, 'salt', 'salt.jpg', '2023-12-11 07:36:49'),
(13, 'sugar', 'sugar.jpg', '2023-12-11 07:37:09'),
(14, 'turmmeric', 'turmmeric.jpg', '2023-12-11 07:37:29'),
(15, 'tomato', 'tomato.jpg', '2023-12-11 07:51:06'),
(16, 'chilli', 'chilli.jpg', '2023-12-11 07:51:19');

-- --------------------------------------------------------

--
-- Table structure for table `product_page`
--

CREATE TABLE `product_page` (
  `id` int(11) NOT NULL,
  `header` varchar(100) NOT NULL,
  `description` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_page`
--

INSERT INTO `product_page` (`id`, `header`, `description`) VALUES
(1, ' Products', 'KHT General Trading handles only the highest quality products. With commitment and experience in the industry, our mission is to provide premium healthy products for our customer worldwide.');

-- --------------------------------------------------------

--
-- Table structure for table `service_page`
--

CREATE TABLE `service_page` (
  `id` int(11) NOT NULL,
  `s2_header` varchar(500) NOT NULL,
  `s2_description` varchar(500) NOT NULL,
  `s2_card1_icon` varchar(500) NOT NULL,
  `s2_card1_header` varchar(500) NOT NULL,
  `s2_card1_description` varchar(500) NOT NULL,
  `s2_card2_icon` varchar(500) NOT NULL,
  `s2_card2_header` varchar(500) NOT NULL,
  `s2_card2_description` varchar(500) NOT NULL,
  `s2_card3_icon` varchar(500) NOT NULL,
  `s2_card3_header` varchar(500) NOT NULL,
  `s2_card3_description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service_page`
--

INSERT INTO `service_page` (`id`, `s2_header`, `s2_description`, `s2_card1_icon`, `s2_card1_header`, `s2_card1_description`, `s2_card2_icon`, `s2_card2_header`, `s2_card2_description`, `s2_card3_icon`, `s2_card3_header`, `s2_card3_description`) VALUES
(0, 'Our Features', 'KHT General Trading is a well-established company that specializes in providing wholesale food supplies to clients worldwide. We have established ourselves as a trusted supplier of high-quality food products, delivering to customers in both the local and international markets.', 'service.png', 'Our Services', '                                                                                                                                                                                At KHT, we offer a wide range of food products, including Rice, Sugar, Cooking Oil, Milk Powder, Pulses, Spices, Canned Food Items. We have a team of experts who work closely with suppliers to make sure that we are providing our clients with the best products at competitive prices.                                          ', 'quality.png', 'Our Quality', 'Quality is of the utmost importance to us at KHT. We are committed to providing our clients with safe and high-quality food products that meet the required industry standards. We are equipped with advanced technology to ensure that all of our products are properly stored and maintained to provide optimal freshness and quality.                                                                                                                                                                ', 'call.png', 'Contact Us', 'If you are looking for a reliable wholesale food supplier in Dubai, UAE, look no further than KHT. Contact us today to learn more about our products and services.                                                                                                                                                ');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `Carousel_1_image` varchar(500) NOT NULL,
  `Carousel_1_header` varchar(500) NOT NULL,
  `Carousel_1_button1_name` varchar(500) NOT NULL,
  `Carousel_1_button1_link` varchar(500) NOT NULL,
  `Carousel_1_button2_name` varchar(500) NOT NULL,
  `Carousel_1_button2_link` varchar(500) NOT NULL,
  `Carousel_2_image` varchar(500) NOT NULL,
  `Carousel_2_header` varchar(500) NOT NULL,
  `Carousel_2_button1_name` varchar(500) NOT NULL,
  `Carousel_2_button1_link` varchar(500) NOT NULL,
  `Carousel_2_button2_name` varchar(500) NOT NULL,
  `Carousel_2_button2_link` varchar(500) NOT NULL,
  `bg_image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `Carousel_1_image`, `Carousel_1_header`, `Carousel_1_button1_name`, `Carousel_1_button1_link`, `Carousel_1_button2_name`, `Carousel_1_button2_link`, `Carousel_2_image`, `Carousel_2_header`, `Carousel_2_button1_name`, `Carousel_2_button1_link`, `Carousel_2_button2_name`, `Carousel_2_button2_link`, `bg_image`) VALUES
(1, 'various-fresh-vegetables-herbs-w.avif', 'Welcome To KHT', 'Products', 'Products.php', 'Services', 'service.php', 'carousel-01.jpg', 'Tasty & Healthy <br>Food Products', 'Products', 'Products.php', 'Services', 'service.php', 'carousel-1.jpg'),
(2, 'carousel-01', '', '', '', '', '', 'carousel-2', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(12) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(1, 'asd', 'asd@gmail.com', 'asd'),
(4, 'wer', 'wer@s', 'wer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_page`
--
ALTER TABLE `about_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_page`
--
ALTER TABLE `contact_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_page`
--
ALTER TABLE `home_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navbar_and_footer`
--
ALTER TABLE `navbar_and_footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_page`
--
ALTER TABLE `product_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_page`
--
ALTER TABLE `about_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_page`
--
ALTER TABLE `contact_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_page`
--
ALTER TABLE `home_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `navbar_and_footer`
--
ALTER TABLE `navbar_and_footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `product_page`
--
ALTER TABLE `product_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
