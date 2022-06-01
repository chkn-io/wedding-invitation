-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 03, 2022 at 06:40 PM
-- Server version: 5.7.37-cll-lve
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wedding_perxie`
--

-- --------------------------------------------------------

--
-- Table structure for table `guests`
--

CREATE TABLE `guests` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `alotted` int(11) NOT NULL,
  `will_attend` int(11) NOT NULL,
  `decline` int(11) NOT NULL,
  `url` varchar(100) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guests`
--

INSERT INTO `guests` (`id`, `name`, `alotted`, `will_attend`, `decline`, `url`, `timestamp`) VALUES
(6, 'Jaevend and Pj Deuda', 2, 2, 0, '1679091c5a880faf6fb5e6087eb1b2dc', '2021-11-28 11:55:24'),
(9, 'Ainna Bulado', 1, 1, 0, '45c48cce2e2d7fbdea1afc51c7c6ad26', '2021-11-27 13:52:31'),
(10, 'Joseph Balmaceda', 1, 0, 0, 'd3d9446802a44259755d38e6d163e820', '2021-11-26 15:53:14'),
(11, 'Michelle Natividad', 1, 1, 0, '6512bd43d9caa6e02c990b0a82652dca', '2021-11-27 02:55:40'),
(12, 'Quicho Family', 2, 0, 1, 'c20ad4d76fe97759aa27a0c99bff6710', '2021-12-20 13:45:02'),
(13, 'Maria Krishille Munar', 1, 1, 0, 'c51ce410c124a10e0db5e4b97fc2af39', '2021-11-27 02:32:02'),
(17, 'Anne Limcumpao', 1, 1, 0, '70efdf2ec9b086079795c442636b55fb', '2021-12-18 21:53:26'),
(18, 'Aries Mendiola', 1, 0, 1, '6f4922f45568161a8cdf4ad2299f6d23', '2021-12-18 15:24:40'),
(19, 'Anne Basilio', 1, 1, 0, '1f0e3dad99908345f7439f8ffabdffc4', '2021-11-27 14:12:40'),
(20, 'Cris bannie Catalan', 1, 1, 0, '98f13708210194c475687be6106a3b84', '2021-11-27 02:43:38'),
(21, 'Rodel CoriÃ±o', 1, 1, 0, '3c59dc048e8850243be8079a5c74d079', '2021-12-18 21:54:34'),
(22, 'Mrs. Lolita Tomas', 1, 1, 0, 'b6d767d2f8ed5d21a44b0e5886680cb9', '2021-12-18 21:55:59'),
(23, 'Evelyn Rodriguez and family', 3, 0, 1, '37693cfc748049e45d87b8c7d8b9aacd', '2021-12-16 04:14:33'),
(25, 'Salazar Family ', 3, 3, 0, '8e296a067a37563370ded05f5a3bf3ec', '2021-12-18 21:55:30'),
(27, 'Mrs. Emily Nicdao ', 3, 3, 0, '02e74f10e0327ad868d138f2b4fdd6f0', '2021-11-27 09:53:08'),
(28, 'Mrs. Laura Manabat', 4, 4, 0, '33e75ff09dd601bbe69f351039152189', '2021-11-30 01:19:39'),
(29, 'Maan Family', 3, 3, 0, '6ea9ab1baa0efb9e19094440c317e21b', '2021-11-27 06:55:47'),
(38, 'Mathematics Department', 8, 8, 0, 'a5771bce93e200c36f7cd9dfd0e5deaa', '2021-12-21 10:07:32'),
(39, 'Marc Cyril Tuazon', 1, 1, 0, 'd67d8ab4f4c10bf22aa353e27879133c', '2021-12-18 07:17:50'),
(40, 'Tristan Ralf Pacheco', 1, 1, 0, 'd645920e395fedad7bbbed0eca3fe2e0', '2021-11-28 02:32:24'),
(42, 'Jean and John Paul Aleviado', 2, 2, 0, 'a1d0c6e83f027327d8461063f4ac58a6', '2021-12-18 07:33:27'),
(43, 'Mr. Adelino Cordova Jr.', 1, 1, 0, '17e62166fc8586dfa4d1bc0e1742c08b', '2021-12-02 03:05:40'),
(44, 'Mr. Jared Jamila', 1, 1, 0, 'f7177163c833dff4b38fc8d2872f1ec6', '2021-11-27 02:08:29'),
(45, 'Mr. Rusty Palacay', 1, 1, 0, '6c8349cc7260ae62e3b1396831a8398f', '2021-11-27 02:06:49'),
(46, 'Buan Family', 3, 3, 0, 'd9d4f495e875a2e075a1a4a6e1b9770f', '2021-12-06 10:02:14'),
(47, 'Ballesteros Family', 3, 0, 1, '67c6a1e7ce56d3d6fa748ab6d9af3fd7', '2021-12-18 14:38:28'),
(48, 'Ate Malou and Iting Cris', 3, 0, 1, '642e92efb79421734881b53e1e1b18b6', '2021-12-18 14:38:53'),
(49, 'Kuya Reggie and Ate Assie', 3, 3, 0, 'f457c545a9ded88f18ecee47145a72c0', '2021-12-13 10:13:20'),
(50, 'Villaviray Family', 3, 1, 0, 'c0c7c76d30bd3dcaefc96f40275bdc0a', '2021-12-18 08:18:28'),
(51, 'Tito Jun and Family', 3, 3, 0, '2838023a778dfaecdc212708f721b788', '2021-11-27 04:42:21'),
(52, 'Lopez Family', 3, 3, 0, '9a1158154dfa42caddbd0694a4e9bdc8', '2021-11-27 03:01:36'),
(53, 'Cuevas Family', 3, 3, 0, 'd82c8d1619ad8176d665453cfb2e55f0', '2021-12-18 16:06:02'),
(54, 'EPCST Council', 4, 4, 0, 'a684eceee76fc522773286a895bc8436', '2021-12-14 01:25:17'),
(55, 'Janni and Manolo Nacis', 2, 2, 0, 'b53b3a3d6ab90ce0268229151c9bde11', '2021-11-27 02:32:31'),
(58, 'Earl Margallo', 1, 0, 1, '66f041e16a60928b05a7e228a89c3799', '2021-12-18 02:54:31'),
(59, 'Sam Matawaran', 1, 0, 0, '093f65e080a295f8076b1c5722a46aa2', '2021-11-27 02:29:09'),
(60, 'Jham and Mike Ponce', 2, 2, 0, '072b030ba126b2f4b2374f342be9ed44', '2021-11-27 02:59:36'),
(61, 'Renz Geo Cocosa', 1, 0, 1, '7f39f8317fbdb1988ef4c628eba02591', '2021-12-20 15:32:27'),
(62, 'John Rick Asuncion', 1, 0, 1, '44f683a84163b3523afe57c2e008bc8c', '2021-11-28 00:30:31'),
(63, 'Delfin and Erika', 2, 2, 0, '03afdbd66e7929b125f8597834fa83a4', '2021-12-15 12:50:16'),
(64, 'Isabela and Jobert Sabino', 2, 2, 0, 'ea5d2f1c4608232e07d3aa3d998e5135', '2021-12-20 15:28:12'),
(65, 'Tatay\' cousins', 3, 3, 0, 'fc490ca45c00b1249bbe3554a4fdf6fb', '2021-12-20 15:42:13'),
(67, 'Medina Family', 4, 0, 0, '735b90b4568125ed6c3f678819b6e058', '2021-11-29 03:10:22'),
(68, 'Rodriguez Family', 3, 3, 0, 'a3f390d88e4c41f2747bfa2f1b5f87db', '2021-12-20 15:34:40'),
(69, 'Ms. Sally Cruz', 1, 1, 0, '14bfa6bb14875e45bba028a21ed38046', '2021-12-13 17:39:09'),
(70, 'Mr. Louie Angelo Oca', 1, 1, 0, '7cbbc409ec990f19c78c75bd1e06f215', '2021-12-13 17:38:42'),
(71, 'Mr. Chris Leorenz Carlos', 1, 1, 0, 'e2c420d928d4bf8ce0ff2ec19b371514', '2021-12-12 09:27:35'),
(72, 'kuya l.a angels', 5, 5, 0, '32bb90e8976aab5298d5da10fe66f21d', '2021-12-08 19:06:21'),
(73, 'Mariah Oliver Lasin CoriÃ±o', 1, 0, 1, 'd2ddea18f00665ce8623e36bd4e3c7c5', '2021-12-20 15:47:41'),
(74, 'lalen rodriguez', 1, 1, 0, 'ad61ab143223efbc24c7d2583be69251', '2021-12-16 05:19:16'),
(75, 'Darwin Marcelo', 1, 1, 0, 'd09bf41544a3365a46c9077ebb5e35c3', '2021-12-19 12:49:53'),
(76, 'Mr  Levi Lopez', 2, 0, 1, 'fbd7939d674997cdb4692d34de8633c4', '2021-12-20 15:32:59'),
(77, 'Tito Ernie', 1, 0, 1, '28dd2c7955ce926456240b2ff0100bde', '2021-12-20 15:33:18'),
(78, 'Christian Ian Guzman', 1, 1, 0, '35f4a8d465e6e1edc05f3d8ab658c551', '2021-12-18 02:56:23'),
(79, 'Angelo Diego', 1, 1, 0, 'd1fe173d08e959397adf34b1d77e88d7', '2021-12-18 14:34:56'),
(80, 'Mr. Julius James Lauresta', 2, 2, 0, 'f033ab37c30201f73f142449d037028d', '2021-12-20 15:50:50'),
(81, 'Borja Family (Groom)', 6, 6, 0, '43ec517d68b6edd3015b3edc9a11367b', '2021-12-20 15:36:08'),
(82, 'Maan Family (Bride)', 4, 4, 0, '9778d5d219c5080b9a6a17bef029331c', '2021-12-20 15:36:12'),
(83, 'Ninong and Ninangs', 34, 34, 0, 'fe9fc289c3ff0af142b6d3bead98a923', '2021-12-20 15:43:07'),
(85, 'Abay', 11, 11, 0, '3ef815416f775098fe977004015c6193', '2021-12-20 15:46:57'),
(86, 'Delfin santos', 2, 1, 0, '93db85ed909c13838ff95ccfa94cebd9', '2022-01-07 12:12:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guests`
--
ALTER TABLE `guests`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guests`
--
ALTER TABLE `guests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
