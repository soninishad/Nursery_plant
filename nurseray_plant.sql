-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql201.infinityfree.com
-- Generation Time: Dec 27, 2023 at 12:14 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `if0_34631636_nurseray_plant`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `heading` text NOT NULL,
  `paragraph` text NOT NULL,
  `image` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `heading`, `paragraph`, `image`) VALUES
(15, 'We Are On Mission', 'Ssss Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget.. Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget.. Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget', 'people1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `about_thought`
--

CREATE TABLE `about_thought` (
  `id` int(11) NOT NULL,
  `heading` text NOT NULL,
  `paragraph` longtext NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_thought`
--

INSERT INTO `about_thought` (`id`, `heading`, `paragraph`, `image`) VALUES
(1, 'We Are On Mission', 'We Are On Mission\r\nAenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget.. Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget\r\n\r\nAenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget.. Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget', '02.jpg'),
(2, 'We Are On Mission2', 'Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget.. Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget.. Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget', '04.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `account_name` varchar(50) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `image`, `account_name`, `username`, `password`) VALUES
(1, 'logo2.jpeg', 'Administrator', 'admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `background`
--

CREATE TABLE `background` (
  `id` int(11) NOT NULL,
  `image` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `background`
--

INSERT INTO `background` (`id`, `image`) VALUES
(6, 'project_6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `choose`
--

CREATE TABLE `choose` (
  `id` int(11) NOT NULL,
  `bg_image` varchar(2000) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `heading` text NOT NULL,
  `title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `choose`
--

INSERT INTO `choose` (`id`, `bg_image`, `image`, `heading`, `title`) VALUES
(1, 'banner1.jpg', 'blog-small-img1.jpg', 'We Are On Mission', 'Anch'),
(6, '', '19.jpg', 'Lab', 'Cras dapibus Vivamus elementum semper.ss');

-- --------------------------------------------------------

--
-- Table structure for table `choose_bg`
--

CREATE TABLE `choose_bg` (
  `id` int(11) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `choose_bg`
--

INSERT INTO `choose_bg` (`id`, `image`) VALUES
(1, 'parallax1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `client_name` varchar(100) NOT NULL,
  `description` longtext NOT NULL,
  `address` varchar(1000) NOT NULL,
  `area` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `amount` varchar(5000) NOT NULL,
  `gardner` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `image`, `client_name`, `description`, `address`, `area`, `date`, `amount`, `gardner`) VALUES
(15, '1.jpg', ' Company 2', 'Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget mi act fermentum phasellus.', 'Mumbai', '500,00 m2', '2023-05-22', '4000 $', 'abc'),
(16, '2.jpg', ' Garden Company', 'Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt.  Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt.', ' London Donec eleifend', '500,0000 m2', '2023-07-18', '550.000', 'Gary'),
(17, '19.jpg', ' Company 3', 'Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget mi act fermentum phasellus.', 'india', '7000 m', '2023-05-22', '7000 rs', 'XYZ');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id` int(11) NOT NULL,
  `about` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id`, `about`) VALUES
(1, ' Quasi incidunt, autem doloremque ab tempore cum vero id fug  Quasi incidunt, autem doloremque ab tempore cum vero id fug  Quasi incidunt, autem doloremque ab tempore cum vero id fug Quasi incidunt, autem doloremque ab tempor');

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

CREATE TABLE `header` (
  `id` int(11) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contactno` varchar(13) NOT NULL,
  `contactinfo` varchar(13) NOT NULL,
  `social_media` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `header`
--

INSERT INTO `header` (`id`, `address`, `email`, `contactno`, `contactinfo`, `social_media`) VALUES
(1, 'Mujasa,Malihabad, 226102', 'Info@newmauryanursery.com', '1234567890', '123456789', '');

-- --------------------------------------------------------

--
-- Table structure for table `home_content`
--

CREATE TABLE `home_content` (
  `id` int(11) NOT NULL,
  `heading` text NOT NULL,
  `paragraph` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_content`
--

INSERT INTO `home_content` (`id`, `heading`, `paragraph`) VALUES
(1, 'Welcome To New Maurya Nursery ', 'Soni Lorem ipsum dolor, sit amet consectetur adipisicing elit. Delectus pariatur eaque alias eveniet doloribus tenetur magnam neque culpa ipsa! Repellendus vel modi doloribus. Id veritatis voluptas iste harum perspiciatis odio molestiae dignissimos quo numquam cum alias, similique, doloribus consequatur cupiditate? Perspiciatis repellat eaque officia. Quasi incidunt, autem doloremque ab tempore cum vero id fugiat! Quas fugiat ut impedit quisquam soluta illo, temporibus magni aperiam, numquam doloremque quos quae delectus consequuntur voluptate iure, porro repellendus eos? Autem recusandae deleniti fuga. Commodi esse nulla harum expedita deleniti itaque sequi, ea consequuntur earum unde aliquam explicabo molestias incidunt ratione voluptatibus ex ipsa debitis.');

-- --------------------------------------------------------

--
-- Table structure for table `login_background`
--

CREATE TABLE `login_background` (
  `id` int(11) NOT NULL,
  `image` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_background`
--

INSERT INTO `login_background` (`id`, `image`) VALUES
(1, 'bground.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `id` int(11) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `image`) VALUES
(1, 'newmauryanursery.png');

-- --------------------------------------------------------

--
-- Table structure for table `map`
--

CREATE TABLE `map` (
  `id` int(11) NOT NULL,
  `map` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `map`
--

INSERT INTO `map` (`id`, `map`) VALUES
(5, ' <iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14238.605591357265!2d80.9981468!3d26.8510379!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1684484088471!5m2!1sen!2sin\" width=\"100%\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `heading` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `image`, `heading`) VALUES
(2, 'img_5.jpg', 'media 1'),
(4, '4.jpg', 'media 3');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `heading` text NOT NULL,
  `title` text NOT NULL,
  `description` longtext NOT NULL,
  `url` varchar(225) NOT NULL,
  `created_date` date NOT NULL,
  `updated_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `image`, `heading`, `title`, `description`, `url`, `created_date`, `updated_date`) VALUES
(2, 'small-4-1.jpg', 'Anch', 'Aenean suscipit eget mi act fermentum', 'ean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget.. AeAenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget.. AeAenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget.. AeAenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget.. Ae\r\n\r\n', 'https://api.whatsapp.com/send?phone=', '0000-00-00', '2023-07-18'),
(3, '2.jpg', 'Garden Services', 'Aenean suscipit eget mi act fermentum phasellus vulputate .', '', '', '0000-00-00', '2023-07-18'),
(4, '2.jpg', 'heading', 'Aenean suscipit eget mi act fermentum phase', 'At vero eos et rebumvAt vero eos et rebumAt vero eos et rebumAt vero eos et rebumAt vero eos et rebumAt vero eos et rebumAt vero eos et rebumAt vero eos et rebumvAt vero eos et rebumAt vero eos et rebum', '', '0000-00-00', '2023-07-18'),
(5, 'project_6.jpg', 'Garden Services', ' eget mi act fermentum ', 'At vero eos et rebumAt vero eos et rebumAt vero eos et rebumAt vero eos et rebumAt vero eos et rebumAt vero eos et rebumAt vero eos et rebumAt vero eos et rebumAt vero eos et rebumAt vero eos et rebum', '', '0000-00-00', '2023-05-05'),
(6, 'small-2-1.jpg', 'Garden Services', 'Welcome To Our New Maurya Nursery', 'At vero eos et rebumAt vero eos et rebumAt vero eos et rebumAt vero eos et rebumAt vero eos et rebumvvAt vero eos et rebumAt vero eos et rebumAt vero eos et rebum', '', '2023-05-03', '2023-07-18'),
(7, '5.jpg', 'Garden Services', 'At vero eos et rebum', 'At vero eos et rebumAt vero eos et rebumAt vero eos et rebumAt vero eos et rebumAt vero eos et rebumAt vero eos et rebumAt vero eos et rebumAt vero eos et rebumAt vero eos et rebumAt vero eos et rebumAt vero eos et rebumAt vero eos et rebumAt vero eos et rebumAt vero eos et rebumAt vero eos et rebumAt vero eos et rebumAt vero eos et rebum', '', '2023-05-05', '2023-07-18'),
(9, '3.jpg', 'Flower', 'Flowers', '', '', '2023-05-14', '2023-07-18');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `title` text NOT NULL,
  `paragraph` text NOT NULL,
  `description` longtext NOT NULL,
  `url` varchar(225) NOT NULL,
  `created_date` date NOT NULL,
  `updated_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `image`, `title`, `paragraph`, `description`, `url`, `created_date`, `updated_date`) VALUES
(2, 'project_2.jpg', 'Tree Planting', 'Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget.. Ae', 'Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget.. AeAenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget.. AeAenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget.. AeAenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget.. AeAenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget.. Ae\r\n', 'https://api.whatsapp.com/send?phone=', '0000-00-00', '2023-05-17'),
(3, '2.jpg', 'Watering', 'Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget.. Ae', 'Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget.. AeAenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget.. AeAenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget.. AeAenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget.. Ae', '', '0000-00-00', '2023-07-18'),
(5, '2.jpg', 'Grass', 'Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget.. Ae', 'Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget.. AeAenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget.. AevAenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget.. AeAenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget.. AeAenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget.. AeAenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget.. Ae', '', '0000-00-00', '2023-05-03'),
(6, '7.jpg', 'Gardening', 'Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget.. Ae', 'Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget.. AeAenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget.. AeAenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget.. AeAenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget.. AeAenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget.. Ae', '', '0000-00-00', '2023-07-18'),
(7, '4.jpg', 'Water', 'Aenean suscipit eget mt. enean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget', 'Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget.. Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget.. Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget', '', '0000-00-00', '2023-07-18'),
(9, '5.jpg', 'Flower', 'Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget.. ', 'Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget.. Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget Aenean suscipit eget mi act fermentum phasellus vulputate turpis tiAenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget.. Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget Aenean suscipit eget mi act fermentum phasellus vulputate turpis ti', '', '0000-00-00', '2023-07-18'),
(11, '4.jpg', 'Gardening', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. LoremLorem Ipsum is simply dummy text of the printing and typesetting industry. LoremLorem Ipsum is simply dummy text of the printing and typesetting industry. LoremLorem Ipsum is simply dummy text of the printing and typesetting industry. LoremLorem Ipsum is simply dummy text of the printing and typesetting industry. LoremLorem Ipsum is simply dummy text of the printing and typesetting industry. LoremLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem', '', '0000-00-00', '2023-05-02'),
(14, '3.jpg', 'Treee', 'Lorem Ipsum is simply dummy text of the printing and type', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. LoremLorem Ipsum is simply dummy text of the printing and typesetting industry. LoremLorem Ipsum is simply dummy text of the printing and typesetting industry. LoremLorem Ipsum is simply dummy text of the printing and typesetting industry. LoremLorem Ipsum is simply dummy text of the printing and typesetting industry. LoremLorem Ipsum is simply dummy text of the printing and typesetting industry. LoremLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem', '', '2023-05-02', '2023-07-18');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `image` varchar(10000) NOT NULL,
  `heading` text NOT NULL,
  `sub_heading` text NOT NULL,
  `paragraph` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `image`, `heading`, `sub_heading`, `paragraph`) VALUES
(2, 'project_2.jpg', 'Slider2', 'sub-heading', 'We Provide Best lawn Service'),
(3, 'banner2.jpg', 'slider3', 'We Provide Best lawn Service', 'We Provide Best lawn Service'),
(9, 'banner5.jpg', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `id` int(11) NOT NULL,
  `icons` varchar(225) NOT NULL,
  `url` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`id`, `icons`, `url`) VALUES
(1, 'fa fa-instagram', 'https://www.youtube.com/'),
(3, 'fa fa-facebook', 'https://www.youtube.com/'),
(4, 'fa fa-youtube', 'https://www.youtube.com/'),
(6, 'fa fa-github', 'https://www.youtube.com/');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `name` text NOT NULL,
  `designation` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `image`, `name`, `designation`) VALUES
(1, '3.jpeg', 'Divi', 'Backend developer'),
(2, '3.jpeg', 'Ameesha', 'PHP'),
(3, 'testimonial-bd.jpg', 'soni', 'php'),
(7, '1 (1).jpeg', 'Anisha', 'developer');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `title` text NOT NULL,
  `heading` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `image`, `title`, `heading`) VALUES
(1, '1.jpg', 'title1', 'We Are On Mission'),
(16, '02.jpg', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial_bg`
--

CREATE TABLE `testimonial_bg` (
  `id` int(11) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonial_bg`
--

INSERT INTO `testimonial_bg` (`id`, `image`) VALUES
(1, 'project_6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `welcome_content`
--

CREATE TABLE `welcome_content` (
  `id` int(11) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `heading` text NOT NULL,
  `title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `welcome_content`
--

INSERT INTO `welcome_content` (`id`, `image`, `heading`, `title`) VALUES
(1, '1.png', ' Technology', 'Lorem Ipsum is simply dummy text of the printing and industry.'),
(2, '5.png', 'Design', 'Lorem Ipsum is simply dummy text of the printing and industry.'),
(3, '3.png', 'Music', 'Lorem Ipsum is simply dummy text of the printing and industry.'),
(6, '6.png', 'Lab', 'Lorem Ipsum is simply dummy text of the printing and industry.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_thought`
--
ALTER TABLE `about_thought`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `background`
--
ALTER TABLE `background`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `choose`
--
ALTER TABLE `choose`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `choose_bg`
--
ALTER TABLE `choose_bg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_content`
--
ALTER TABLE `home_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_background`
--
ALTER TABLE `login_background`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `map`
--
ALTER TABLE `map`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial_bg`
--
ALTER TABLE `testimonial_bg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `welcome_content`
--
ALTER TABLE `welcome_content`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `about_thought`
--
ALTER TABLE `about_thought`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `background`
--
ALTER TABLE `background`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `choose`
--
ALTER TABLE `choose`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `choose_bg`
--
ALTER TABLE `choose_bg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `header`
--
ALTER TABLE `header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `home_content`
--
ALTER TABLE `home_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `login_background`
--
ALTER TABLE `login_background`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `map`
--
ALTER TABLE `map`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `social_media`
--
ALTER TABLE `social_media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `testimonial_bg`
--
ALTER TABLE `testimonial_bg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `welcome_content`
--
ALTER TABLE `welcome_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
