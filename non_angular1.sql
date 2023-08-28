-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2017 at 08:27 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `non_angular`
--

-- --------------------------------------------------------

--
-- Table structure for table `company_details`
--

CREATE TABLE `company_details` (
  `id` int(10) NOT NULL,
  `website_title` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  `gps_coord` varchar(45) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `fax` int(10) NOT NULL,
  `email` varchar(45) NOT NULL,
  `email_alert` tinyint(1) NOT NULL,
  `address_footer` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_details`
--

INSERT INTO `company_details` (`id`, `website_title`, `address`, `gps_coord`, `phone`, `fax`, `email`, `email_alert`, `address_footer`) VALUES
(1, 'PuneRealEstate.com', 'Pune', '72 Lattitude', 9465872135, 281561, 'Punereal@info.com', 1, 'Deepjyoti Nagar, \r\nBarshi Road,\r\nPune');

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

CREATE TABLE `mail` (
  `id_mail` int(10) NOT NULL,
  `sender` varchar(45) NOT NULL,
  `date` date NOT NULL,
  `message` varchar(100) NOT NULL,
  `is_starred` tinyint(1) NOT NULL,
  `is_checked` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `id` int(5) NOT NULL,
  `owner` varchar(45) NOT NULL,
  `type` varchar(45) NOT NULL,
  `purpose` varchar(45) NOT NULL,
  `prize` varchar(45) NOT NULL,
  `location` varchar(45) NOT NULL,
  `region` varchar(10) NOT NULL,
  `size` varchar(45) NOT NULL,
  `property_desc` varchar(2000) NOT NULL,
  `is_featured` tinyint(1) NOT NULL,
  `property_img_one` varchar(45) NOT NULL,
  `property_img_two` varchar(45) NOT NULL,
  `property_img_three` varchar(45) NOT NULL,
  `property_img_four` varchar(45) NOT NULL,
  `publish_property` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`id`, `owner`, `type`, `purpose`, `prize`, `location`, `region`, `size`, `property_desc`, `is_featured`, `property_img_one`, `property_img_two`, `property_img_three`, `property_img_four`, `publish_property`) VALUES
(1, 'Sarvade K M', 'Row house', 'sell', '23 Lakh', 'Subhash Nagar, Latur', 'west', '40 x 38 sqft', 'The living is easy in this impressive, generously proportioned contemporary residence with lake and ocean views, located within a level stroll to the sand and surf.\r\n\r\nThe floor plan encompasses four spacious bedrooms with plenty of room for study, sleep and storage, three luxurious bathrooms, and a sleek and stylish kitchen that flows through to the dining room and private rear patio. The master bedroom, complete with walk-in robe and ensuite, ensures parents have a private space where they can enjoy the view.\r\n\r\nPerfect for a family or as a holiday retreat, this home is ideally positioned to enjoy the proximity to beaches, cafes and restaurants, shopping centre, and a selection of premier schools.\r\n', 1, 'i1.jpg', '29.jpg', '24.jpg', '31.jpg', 0),
(2, 'Baheti Jagdish', 'Row house', 'rent', '10000', 'Near Ganjgolai, Latur', 'west', '25 x 40 sqft', 'Sai Angan is a residential project developed by Laxminarayan Dussa and Vishwambhar Mamdyal. The project offers very well designed 4BHK Duplex Residential Row House.', 1, '15.jpg', '21.jpg', '25.jpg', '22.jpg', 0),
(3, 'Sawant Sachin', 'Apartment', 'sell', '35 Lakh', 'Sarvodaya Colony, Latur', 'south', '34 x 64', 'The living is easy in this impressive, generously proportioned contemporary residence with lake and ocean views, located within a level stroll to the sand and surf.\r\n\r\nThe floor plan encompasses four spacious bedrooms with plenty of room for study, sleep and storage, three luxurious bathrooms, and a sleek and stylish kitchen that flows through to the dining room and private rear patio. The master bedroom, complete with walk-in robe and ensuite, ensures parents have a private space where they can enjoy the view.\r\n\r\nPerfect for a family or as a holiday retreat, this home is ideally positioned to enjoy the proximity to beaches, cafes and restaurants, shopping centre, and a selection of premier schools.\r\n', 1, 'i5.jpg', '30.jpg', '24.jpg', '31.jpg', 0),
(4, 'Jeevan Gore', 'Hostel', 'rent', '23000', 'Adarsh Colony, Latur', 'north', '89 x 84 sqft', 'Property Description', 1, 'i4.jpg', '5.jpg', '21.jpg', '23.jpg', 0),
(5, 'Vishal', 'Warehouse', 'rent', '45000', 'MIDC, Latur', 'west', '120 x 160 sqft', 'Property Description', 1, 'i2.jpg', 'i2.jpg', 'i2.jpg', 'i2.jpg', 0),
(6, 'Ravi', 'Shop', 'rent', '25000', 'Market Yard', 'south', '80 x 100 sqft', 'Property Description', 1, '8.jpg', '8.jpg', '8.jpg', '8.jpg', 0),
(7, 'Sarojani', 'Hostel', 'sell', '45 Lakh', 'Sai Nagar, Latur', 'west', '80 x 100', 'Property Description', 1, '20.jpg', '24.jpg', '22.jpg', '23.jpg', 0),
(8, 'Kamlesh N ', 'Row house', 'sell', '25 Lakh ', 'Ausa Road, Latur', 'south ', '50 x 50 sqft', 'It won’t be easy to click out of holiday mode in this stylishly contemporary residence for the modern pleasure-seeker.\r\n\r\nCool, calm and sophisticated with a youthful edge, this functional home is enveloped in light and comfort. Crisp white walls, timber floors and high ceilings create a style as timeless as the sparkling ocean view. The calming sea vista, captured through the extensive use of glass, will help you forget your city stress.\r\n\r\nThis house screams ''designer'' and will reflect the personality and taste of those accustomed to the best in quality design, finishes and lifestyle.', 1, '7.jpg', '28.jpg', '24.jpg', '31.jpg', 0),
(9, 'Niranjan', 'Open land', 'sell', '40 Lakh', 'Additional MIDC ', 'south', '56 x 39', 'Property Description', 1, 'p6.jpg', 'p4.jpg', 'p6.jpg', 'p6.jpg', 0),
(10, 'Ramaya', 'Shop', 'rent', '25000', 'Market Area', 'north', '25 x 57 sqft', 'Property Description', 1, '6.jpg', 'a1.jpg', '5.jpg', '30.jpg', 0),
(11, 'Sarojani', 'Warehouse', 'rent', '50000', 'Additional MIDC ', 'east', '90 x 80sqft', 'Property Description', 1, 'i6.jpg', '24.jpg', 'bo4.jpg', '24.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `reviewid` int(10) NOT NULL,
  `rating` float NOT NULL,
  `review_date` date NOT NULL,
  `user` varchar(45) NOT NULL,
  `message` varchar(100) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(5) NOT NULL,
  `name` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  `emailid` varchar(45) NOT NULL,
  `phoneno` bigint(10) NOT NULL,
  `aadharno` bigint(12) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `dob` date NOT NULL,
  `user_photo` varchar(45) NOT NULL,
  `user_type` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `name`, `address`, `emailid`, `phoneno`, `aadharno`, `username`, `password`, `dob`, `user_photo`, `user_type`) VALUES
(1, 'Samantha', 'Latur', 'samantha@example.com', 9813761430, 16578967789, 'samantha', 'password', '1996-02-16', '03.jpg', 'Agent'),
(2, 'Shree', 'Latur', 'shree@gmail.com', 9874563589, 176427111866, 'shree', 'password', '1986-04-14', 'download1.jpg', 'User'),
(4, 'Ravi', 'Latur', 'ravi@gmail.com', 9874563214, 1456761204, 'ravi', 'password', '1970-06-20', '04.png', 'Admin'),
(5, 'Sara', 'Latur', 'sara@gmail.com', 9568742589, 12341341799, 'sara', 'password', '1986-12-23', '03.jpg', 'Admin'),
(6, 'Sakshi', 'Latur', 'sakshi@example.com', 8989631475, 12314556131, 'sakshi', 'password', '1980-06-23', '03.jpg', 'User'),
(7, 'Kiran', 'Latur', 'kiran@example.com', 9835131715, 2214767748, 'kiran', 'password', '1981-08-17', '05.png', 'User'),
(8, 'Rishi', 'Latur', 'rishi@gmail.com', 8256987452, 1547876863, 'rishi', 'password', '1971-09-20', '02.jpg', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company_details`
--
ALTER TABLE `company_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`id_mail`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`reviewid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company_details`
--
ALTER TABLE `company_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mail`
--
ALTER TABLE `mail`
  MODIFY `id_mail` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `reviewid` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
