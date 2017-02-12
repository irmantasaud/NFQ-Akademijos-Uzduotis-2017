-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 13, 2017 at 12:28 AM
-- Server version: 5.5.53
-- PHP Version: 5.6.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nfq2017uzduotis`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` tinyint(4) NOT NULL,
  `book_name` varchar(255) NOT NULL,
  `publishYear` int(4) NOT NULL,
  `book_author` varchar(255) NOT NULL,
  `book_genre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `book_name`, `publishYear`, `book_author`, `book_genre`) VALUES
(1, 'The Hunger Games', 2008, 'Suzanne Collins', 'Young Adult Fiction'),
(2, 'Harry Potter and the Order of Phoenix', 2004, 'J.K. Rowling', 'Fantasy'),
(3, 'The Old Man and the Sea', 1952, 'Ernest Hemingway', '20th century'),
(4, 'A Long Way Home', 2013, 'Saroo Brierley', 'Biography'),
(5, 'To Kill a Mockingbird', 1960, 'Harper Lee', 'Classics'),
(6, 'A Spy\'s Guide to THinking', 2015, 'John Braddock', 'Psychology'),
(7, 'Create Your Own Economy: The Path to Prosperity in a Disordered World', 2009, 'Tyler Cowen', 'Social Science'),
(8, 'How to Change Minds: The Art of Influence without Manipulation', 2013, 'Rob Jolles', 'Leadership'),
(9, 'Can\'t Buy Me Like', 2014, 'Bob Garfield, Doug Levy', 'Social Science'),
(10, 'Leadership and the Art of Struggle: How Great Leaders Grow Through Challenge and Adversity', 2013, 'Steven Snyder, Bill George', 'Leadership'),
(11, 'Leaders Open Doors: A Radically Simple Leadership Approach to Lift People, Profits, and Performance', 2013, 'Bill Treasurer', 'Leadership'),
(12, 'Leading the Starbucks Way: 5 Principles for Connecting with Your Customers, Your Products and Your People', 2008, 'Joseph A. Michelli', 'Business'),
(13, 'The Starbucks Experience: 5 Principles for Turning Ordinary Into Extraordinary', 2006, 'Joseph A. Michelli', 'Business'),
(14, 'It\'s Not About the Coffee: Leadership Principles from a Life at Starbucks', 2005, 'Howard Behar', 'Business'),
(15, 'HTML and CSS: Design and Build Websites', 2011, 'Jon Duckett', 'Computer Science - Programming'),
(16, 'Responsive Web Design', 2011, 'Ethan Marcotte', 'Web Design'),
(17, 'The Undoing Project: A Friendship That Changed Our Minds', 2016, 'Michael Lewis', 'Psychology'),
(18, 'The Best Place to Work: The Art and Science of Creating an Extraordinary Workplace', 2014, 'Ron Friedman', 'Business'),
(19, 'Customers Included: How to Transform Products, Companies, and the World - With a Single Step', 2013, 'Mark Hurst, Phil Terry', 'Business'),
(20, 'The Effortless Experience: Conquering the New Battleground for Customer Loyalty', 2014, 'Matthew Dixon, Nick Toman, Rick DeLisi', 'Business'),
(21, 'The Three Rules: How Exceptional Companies Think', 2013, 'Michael E. Raynor, Mumtaz Ahmed', 'Business'),
(22, 'How to Change Minds: The Art of Influence without Manipulation', 2013, 'Rob Jolles', 'Psychology'),
(23, 'Quiet Influence: The Introvert\'s Guide to Making a Difference', 2013, 'Jennifer B. Kahnweiler', 'Psychology'),
(24, 'Crazy Bosses: Fully Revised and Updated', 1992, 'Stanley Bing', 'Psychology'),
(25, 'Don\'t Bring It to Work: Breaking the Family Patterns That Limit Success', 2009, 'Sylvia Lafair ', 'Business'),
(26, 'Poorly Made in China: An Insider\'s Account of the Tactics Behind China\'s Production Game', 2009, 'Paul Midler', 'Economics'),
(27, 'How to Avoid Being Killed in a War Zone: The Essential Survival Guide for Dangerous Places', 2011, 'Rosie Garthwaite', 'Survival'),
(28, 'Neuro-Linguistic Programming for Dummies', 2004, 'Romilla Ready', 'Psychology'),
(29, 'Creative Writing for Dummies', 2012, 'Maggie Hamand', 'Writting'),
(30, 'Maggie Hamand', 2006, 'Brad Hill', 'Web'),
(31, 'Programming PHP', 2002, 'Rasmus Lerdorf, Kevin Tatroe, Peter MacIntyre', 'Programming'),
(32, 'Web Database Applications with PHP and MySQL', 2002, 'Programming', 'Hugh E. Williams, Andy Oram (Editor), David Lane'),
(33, 'Hugh E. Williams, Andy Oram (Editor), David Lane', 2008, 'Douglas Crockford', 'Programming'),
(34, 'Secrets of the JavaScript Ninja', 2008, 'John Resig, Bear Bibeault', 'Programming'),
(35, 'Scrum: The Art of Doing Twice the Work in Half the Time', 2014, 'Jeff Sutherland', 'Productivity'),
(36, 'Agile!: The Good, the Hype and the Ugly', 2014, 'Bertrand Meyer', 'Management'),
(37, 'Cracking the PM Interview: How to Land a Product Manager Job in Technology', 2013, 'Gayle Laakmann McDowell', 'Business'),
(38, 'Inspired: How To Create Products Customers Love', 2008, 'Marty Cagan', 'Business'),
(39, 'The Product Manager\'s Desk Reference', 2008, 'Steven Haines', 'Business'),
(40, 'The Apple Experience: Secrets to Building Insanely Great Customer Loyalty', 2012, 'Carmine Gallo', 'Business'),
(41, 'Talk Like TED: The 9 Public-Speaking Secrets of the World\'s Top Minds', 2014, 'Carmine Gallo', 'Communication'),
(42, 'How To Deliver A TED Talk: Secrets Of The World\'s Most Inspiring Presentations', 2012, 'Jeremy Donovan', 'Communication'),
(43, 'The Art of Explanation - Making Your Ideas, Products and Services Easier to Understand', 2012, 'Lee LeFever', 'Business'),
(44, 'Big Data: A Revolution That Will Transform How We Live, Work, and Think', 2013, 'Viktor Mayer-Schönberger, Kenneth Cukier', 'Technology'),
(45, 'Ansible for DevOps', 2015, 'Jeff Geerling', 'Technology'),
(46, 'Storytelling with Data: A Data Visualization Guide for Business Professionals', 2015, 'Cole Nussbaumer Knaflic', 'Business'),
(47, 'The Help', 2009, 'Kathryn Stockett', 'Fiction'),
(48, 'The Kite Runner', 2004, 'Khaled Hosseini', 'Classics'),
(49, 'The Book Thief', 2006, 'Markus Zusak', 'Fiction'),
(50, 'The Glass Castle', 2006, 'Jeannette Walls ', 'Autobiography'),
(51, 'The Shack', 2007, 'Wm. Paul Young', 'Fiction'),
(52, 'The Great Gatsby', 1925, 'F. Scott Fitzgerald', 'Classics');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
