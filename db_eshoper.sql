-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2014 at 06:09 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_eshoper`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_first_name` varchar(50) NOT NULL,
  `admin_last_name` varchar(50) NOT NULL,
  `admin_email_address` varchar(100) NOT NULL,
  `admin_password` varchar(32) NOT NULL,
  `admin_modile` varchar(15) NOT NULL,
  `admin_address` text NOT NULL,
  `admin_type` tinyint(1) NOT NULL,
  `admin_status` tinyint(1) NOT NULL,
  `admin_create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_first_name`, `admin_last_name`, `admin_email_address`, `admin_password`, `admin_modile`, `admin_address`, `admin_type`, `admin_status`, `admin_create_date`) VALUES
(1, 'Mahabub-A-Mawla', 'Shawon', 'mahabub.cgbd@yahoo.com', '202cb962ac59075b964b07152d234b70', '01925821707', 'C-61; 5-A; Arambag Residential Area; Mirpur-7; Dhaka-1216.', 1, 1, '2014-11-26 13:57:55');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE IF NOT EXISTS `tbl_category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(30) NOT NULL,
  `category_short_description` varchar(100) NOT NULL,
  `category_full_description` text NOT NULL,
  `category_status` tinyint(1) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`, `category_short_description`, `category_full_description`, `category_status`) VALUES
(1, 'SPORTSWEAR', 'SPORTS WEAR from various company', 'our linked companies are so dynamic     for alamin vai                                                                                           ', 1),
(2, 'MEN', 'MENS ware from various company', '                                MENS ware from various company description                                ', 1),
(3, 'WOMEN', 'This is WOMENS category', 'This is WOMENS category Full description', 1),
(4, 'KIDS', 'This is KIDS category', 'This is KIDS category Full Description', 1),
(5, 'FASHION', 'This is FASHION category', 'This is FASHION category full Description', 1),
(6, 'HOUSEHOLDS', 'This is HOUSEHOLDS category', 'This is HOUSEHOLDS category full description                            ', 1),
(7, 'INTERIORS', 'This is INTERIORS category', 'This is INTERIORS category full description', 1),
(8, 'CLOTHING', 'This is CLOTHING category', 'This is CLOTHING category full description', 1),
(9, 'BAGS', 'This is BAGS category', 'This is BAGS category full description                            ', 1),
(10, 'Electronics', 'This are Any kinds of electronics product category', 'This are Any kinds of electronics product category. Our some product is manufactured by Bangladesh and many product come from china, japan and Europe.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE IF NOT EXISTS `tbl_customer` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_first_name` varchar(50) NOT NULL,
  `customer_last_name` varchar(50) NOT NULL,
  `customer_user_name` varchar(50) NOT NULL,
  `customer_password` varchar(255) NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `customer_address_temporary` varchar(100) NOT NULL,
  `customer_address_permanent` varchar(100) NOT NULL,
  `customer_city` varchar(50) NOT NULL,
  `customer_state` varchar(50) NOT NULL,
  `customer_postal_code` varchar(50) NOT NULL,
  `customer_country` varchar(50) NOT NULL,
  `customer_phone` varchar(50) NOT NULL,
  `customer_credit_card` varchar(50) NOT NULL,
  `customer_credit_card_type_id` varchar(50) NOT NULL,
  `customer_card_exp_month` varchar(50) NOT NULL,
  `customer_card_exp_year` varchar(50) NOT NULL,
  `customer_billing_address` varchar(100) NOT NULL,
  `customer_billing_city` varchar(50) NOT NULL,
  `customer_billing_region` varchar(50) NOT NULL,
  `customer_billing_postal_code` varchar(50) NOT NULL,
  `customer_billing_country` varchar(50) NOT NULL,
  `customer_ship_address` varchar(100) NOT NULL,
  `customer_ship_city` varchar(50) NOT NULL,
  `customer_ship_region` varchar(50) NOT NULL,
  `customer_ship_postal_code` varchar(50) NOT NULL,
  `customer_ship_country` varchar(50) NOT NULL,
  `customer_image` varchar(255) NOT NULL,
  `customer_activation_status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`customer_id`),
  KEY `customer_id` (`customer_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE IF NOT EXISTS `tbl_product` (
  `product_id` int(100) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(50) NOT NULL,
  `category_id` varchar(10) NOT NULL,
  `sub_category_id` int(10) NOT NULL,
  `product_summary` varchar(100) NOT NULL,
  `product_description` varchar(200) NOT NULL,
  `review_id` varchar(100) NOT NULL,
  `product_image_1` varchar(255) NOT NULL,
  `product_image_2` varchar(255) NOT NULL,
  `product_image_3` varchar(255) NOT NULL,
  `product_image_4` varchar(255) NOT NULL,
  `product_image_5` varchar(255) NOT NULL,
  `product_image_thumbnail_1` varchar(255) NOT NULL,
  `product_image_thumbnail_2` varchar(255) NOT NULL,
  `product_image_thumbnail_3` varchar(255) NOT NULL,
  `product_image_thumbnail_4` varchar(255) NOT NULL,
  `product_image_thumbnail_5` varchar(255) NOT NULL,
  `product_availability` tinyint(1) NOT NULL,
  `product_model` varchar(30) NOT NULL,
  `product_manufacturer` varchar(30) NOT NULL,
  `product_quantity` varchar(30) NOT NULL,
  `product_price_in_bdt` varchar(30) NOT NULL,
  `product_discount_price_in_bdt` varchar(30) NOT NULL,
  `product_price_in_usd` varchar(30) NOT NULL,
  `product_discount_price_in_usd` varchar(30) NOT NULL,
  `product_price_in_gbp` varchar(30) NOT NULL,
  `product_discount_price_in_gbp` varchar(30) NOT NULL,
  `product_price_in_euro` varchar(30) NOT NULL,
  `product_discount_price_in_euro` varchar(30) NOT NULL,
  `product_display_in_homepage` tinyint(1) NOT NULL,
  `product_publication_status` tinyint(1) NOT NULL COMMENT '0= unpublish, 1= publish',
  `product_hit` int(10) NOT NULL,
  `product_feature_status` tinyint(1) NOT NULL COMMENT '0= notfeatured, 1= featured',
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `product_name`, `category_id`, `sub_category_id`, `product_summary`, `product_description`, `review_id`, `product_image_1`, `product_image_2`, `product_image_3`, `product_image_4`, `product_image_5`, `product_image_thumbnail_1`, `product_image_thumbnail_2`, `product_image_thumbnail_3`, `product_image_thumbnail_4`, `product_image_thumbnail_5`, `product_availability`, `product_model`, `product_manufacturer`, `product_quantity`, `product_price_in_bdt`, `product_discount_price_in_bdt`, `product_price_in_usd`, `product_discount_price_in_usd`, `product_price_in_gbp`, `product_discount_price_in_gbp`, `product_price_in_euro`, `product_discount_price_in_euro`, `product_display_in_homepage`, `product_publication_status`, `product_hit`, `product_feature_status`) VALUES
(1, 'Easy Polo', '3', 22, 'this is product 1 summery', 'this is product 1 description', '', 'images/product_image/pic_1.jpg', 'images/product_thumbnail/pic_7_thumb.jpg', '', '', '', 'images/product_thumbnail/pic_1_thumb.jpg', '', '', '', '', 1, 'polo101', 'POLO', '20', '4500', '2500', '$56', '$35', '', '', '', '', 1, 1, 6, 1),
(2, 'Adidas', '1', 4, 'this is sports cats', 'this is product description', '', 'images/product_image/pic_23.jpg', '', '', '', '', 'images/product_thumbnail/pic_23_thumb.jpg', '', '', '', '', 1, '', '', '20', '2500', '2000', '', '', '', '', '', '', 1, 1, 2, 1),
(3, 'Perfume', '3', 18, 'Guess Sent is wold class', 'this is product description', '', 'images/product_image/pic_5.jpg', 'images/product_thumbnail/pic_71_thumb.jpg', 'images/product_thumbnail/pic_4_thumb.jpg', '', '', 'images/product_thumbnail/pic_5_thumb.jpg', '', '', '', '', 1, '', '', '10', '', '', '', '', '', '', '', '', 1, 1, 1, 1),
(4, 'iPad mini', '10', 23, 'this is ipad mini ', '', '', 'images/product_image/ipad-mini-rumour1.png', 'images/product_image/iPad-mini.png', '', '', '', 'images/product_thumbnail/ipad-mini-rumour1_thumb.png', 'images/product_thumbnail/iPad-mini_thumb.png', '', '', '', 1, 'ipadmini101', 'Apple', '', '1600', '1500', '$200', '$195', '', '', '', '', 1, 1, 3, 0),
(5, '0', '0', 0, '0', '0', '', '', '', '', '', '', '', '', '', '', '', 0, '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '0', 0, 0, 1, 0),
(6, 'Samsung Galuxy Tab', '10', 23, 'samsung is popular product in Bangladesh  and our neighboring country', 'no description', '', 'images/product_image/samsung_galaxy_tab_2_70_.jpg', 'images/product_image/samsung-galaxy-tab-2-1.jpg', '', '', '', 'images/product_thumbnail/samsung_galaxy_tab_2_70__thumb.jpg', 'images/product_thumbnail/samsung-galaxy-tab-2-1_thumb.jpg', '', '', '', 1, '', '', '', 'TK 1100', 'TK 10000', '$120', '$100', '', '', '', '', 1, 1, 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider_product`
--

CREATE TABLE IF NOT EXISTS `tbl_slider_product` (
  `slider_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  PRIMARY KEY (`slider_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_slider_product`
--

INSERT INTO `tbl_slider_product` (`slider_id`, `product_id`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sub_category`
--

CREATE TABLE IF NOT EXISTS `tbl_sub_category` (
  `sub_category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `sub_category_name` varchar(30) NOT NULL,
  `sub_category_short_description` varchar(100) NOT NULL,
  `sub_category_full_description` text NOT NULL,
  `sub_category_status` tinyint(1) NOT NULL,
  PRIMARY KEY (`sub_category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `tbl_sub_category`
--

INSERT INTO `tbl_sub_category` (`sub_category_id`, `category_id`, `sub_category_name`, `sub_category_short_description`, `sub_category_full_description`, `sub_category_status`) VALUES
(1, 1, 'shoe', 'short descriptio', 'Full descriptio', 1),
(2, 1, 'NIKE', 'This is NIKE category short description', 'This is NIKE category full description', 1),
(3, 1, 'UNDER ARMOUR', 'This is UNDER ARMOUR category short description', 'This is UNDER ARMOUR category full description', 1),
(4, 1, 'ADIDAS', 'This is ADIDAS category short description', 'This is ADIDAS category full description', 1),
(5, 1, 'PUMA', 'This is PUMA category short description', 'This is PUMA category full description', 1),
(6, 1, 'ASICS', 'This is ASICS category short description', 'This is ASICS category full description', 1),
(7, 2, 'FENDI', 'This is FENDI category short description', 'This is FENDI category full description', 1),
(8, 2, 'GUESS', 'This is GUESS category short description', 'This is GUESS category full description', 1),
(9, 2, 'VALENTINO', 'This is VALENTINO category short description', 'This is VALENTINO category full description', 1),
(10, 2, 'DIOR', 'This is DIOR category short description', 'This is DIOR category full description', 1),
(11, 2, 'VERSACE', 'This is DIOR category short descriptionVERSACE', 'This is VERSACE category full description', 1),
(12, 2, 'ARMANI', 'This is ARMANI category short description', 'This is ARMANI category full description', 1),
(13, 2, 'PRADA', 'This is PRADA category short description', 'This is PRADA category full description', 1),
(14, 2, 'DOLCE AND GABBANA', 'This is DOLCE AND GABBANA category short description', 'This is DOLCE AND GABBANA category full description', 1),
(15, 2, 'CHANEL', 'This is CHANEL category short description', 'This is CHANEL category full description', 1),
(16, 2, 'GUCCI', 'This is GUCCI category short description', 'This is GUCCI category full description', 1),
(17, 3, 'FENDI', 'This is FENDI category short description', 'This is FENDI category full description', 1),
(18, 3, 'GUESS', 'This is GUESS category short description', 'This is GUESS category full description', 1),
(19, 3, 'VALENTINO', 'This is VALENTINO category short description', 'This is VALENTINO category full description', 1),
(20, 3, 'DIOR', 'This is DIOR category short description', 'This is DIOR category full description', 1),
(21, 3, 'VERSACE', 'This is VERSACE category short description', 'This is VERSACE category full description', 1),
(22, 3, 'POLO', 'This is Polo Category Short Description', 'This is Polo Category Short Description', 1),
(23, 10, 'iPad', 'Our first Electronic product arived', 'latest iPad for sell', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_first_name` varchar(50) NOT NULL,
  `customer_last_name` varchar(50) NOT NULL,
  `customer_user_name` varchar(50) NOT NULL,
  `customer_password` varchar(255) NOT NULL,
  `conform_password` varchar(255) NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `customer_address_temporary` varchar(100) NOT NULL,
  `customer_address_permanent` varchar(100) NOT NULL,
  `customer_city` varchar(50) NOT NULL,
  `customer_state` varchar(50) NOT NULL,
  `customer_postal_code` varchar(50) NOT NULL,
  `customer_country` varchar(50) NOT NULL,
  `customer_phone` varchar(50) NOT NULL,
  `customer_billing_address` varchar(100) NOT NULL,
  `customer_billing_city` varchar(50) NOT NULL,
  `customer_billing_region` varchar(50) NOT NULL,
  `customer_billing_postal_code` varchar(50) NOT NULL,
  `customer_billing_country` varchar(50) NOT NULL,
  `customer_ship_address` varchar(100) NOT NULL,
  `customer_ship_city` varchar(50) NOT NULL,
  `customer_ship_region` varchar(50) NOT NULL,
  `customer_ship_postal_code` varchar(50) NOT NULL,
  `customer_ship_country` varchar(50) NOT NULL,
  `customer_image` varchar(255) NOT NULL,
  `customer_activation_status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`customer_id`),
  KEY `customer_id` (`customer_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
