-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2023 at 10:42 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lit`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `firstnm` varchar(25) NOT NULL,
  `lastnm` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(12) NOT NULL,
  `utype` varchar(12) NOT NULL,
  `prflimg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `firstnm`, `lastnm`, `email`, `password`, `utype`, `prflimg`) VALUES
(8, 'Lit Team ', 'LIT', 'Team', 'litlearningteam@gmail.com', 'lit2023', 'super_admin', 'logo2.png'),
(98, 'rihnis', 'Rihnis', 'Ahamed', 'sitharihnis@gmail.com', '12123', 'admin', '4d465d38-7a6c-41ec-9447-0c6234e9f89b.jpg'),
(116, 'dishani', 'Dishani', 'Disha', 'dishadishani65@gmail.com', 'disha123', 'admin', 'getty_506068552_298876.jpg'),
(117, 'Hanza', 'Hanza', 'Saleem', 'fathifatha98@gmail.com', '1998', 'admin', 'getty_506068552_298876.jpg'),
(118, 'Biru', 'Manokaran', 'Birunthajini', 'birunthajinimano@gmail.com', '2000', 'admin', '1687382.jpg'),
(119, 'sreen sithara', 'sreen', 'sithara', 'rihnisahamed2000@gmail.com', 'rihnis123', 'user', 'rihnis.png');

--
-- Triggers `accounts`
--
DELIMITER $$
CREATE TRIGGER `auditaccount` AFTER DELETE ON `accounts` FOR EACH ROW insert into auditacounts values(null,old.username,old.firstnm,old.lastnm,old.email,old.password,old.utype,old.prflimg,now(),"Deleted","accounts")
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `auditacounts`
--

CREATE TABLE `auditacounts` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `firstnm` varchar(25) NOT NULL,
  `lastnm` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pw` varchar(12) NOT NULL,
  `utype` varchar(25) NOT NULL,
  `prflimg` varchar(50) DEFAULT NULL,
  `atime` datetime DEFAULT NULL,
  `actions` varchar(10) DEFAULT NULL,
  `tbl` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cgd`
--

CREATE TABLE `cgd` (
  `id` int(11) NOT NULL,
  `category` varchar(20) NOT NULL,
  `sources` text NOT NULL,
  `srcimg` text NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cgd`
--

INSERT INTO `cgd` (`id`, `category`, `sources`, `srcimg`, `status`) VALUES
(52, 'illustrator', 'bird.ai', 'bird.JPG', 'active'),
(54, 'photoshop', 'logo.ai', 'logo.png', 'active'),
(55, 'illusatrator', 'lovebirds.ai', 'lovebirds.jpg', 'active'),
(56, 'illusatrator', 'Bakery.ai', 'Bakery.png', 'active'),
(57, 'illusatrator', 'Coffee.ai', 'COFFE-1.PNG', 'active'),
(58, 'illusatrator', 'trees.ai', 'green_landscape_trees_background_vector_584777.jpg', 'active'),
(59, 'illusatrator', 'Typograph and Logo.ai', 'Typograph and Logo-01.jpg', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `mid` varchar(5) NOT NULL,
  `mtitle` varchar(100) NOT NULL,
  `mdesc` varchar(1000) NOT NULL,
  `mimage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`mid`, `mtitle`, `mdesc`, `mimage`) VALUES
('m1', 'Java is a Oracle Production', 'Java is a class-based object-oriented simple programming language. Though we can not consider it to be fully object-oriented as it supports primitive datatypes. It is a general-purpose, high-level programming language that helps programmers and developers to write a code once and run it anywhere.', 'Capture.JPG'),
('m2', 'It is a Database Language', 'C# is a simple & powerful object-oriented programming language developed by Microsoft. C# can be used to create various types of applications, such as web, windows, console applications, or other types of applications using Visual studio.', 'csharp-using-declaration.png'),
('m3', 'My sql is a Database Language', 'My sql is a Database Language .MYSQL is a widely used relational database management system (RDBMS).MYSQL is free and open source. MYSQL is ideal for both small and large applications.', 'mysql-nedir-piesvfmdhhxnuul009v8j1flgnb9gdu28z9y5qromo.jpg'),
('m4', 'Html is a Hyper Text Markup Language', 'it is a markuop language ', 'html-1024x768.jpg'),
('m5', 'Java Script Light Weight Language', 'JavaScript is the worlds most popular lightweight  programming language of the Web.avaScript is programming code that can be inserted into HTML pages. It is easy to learn.\r\nJava Script can enhance the dynamics and interactive features of your page by allowing you to perform calculations\r\nThis Plateform will teach you JavaScript from basic.\r\n\r\n\r\n\r\n', 'JavaScript---Thumbnail-1200-x-630.jpg'),
('m6', 'Php is a very intelligent Language', 'PHP is a server side scripting language. that is used to develop Static websites or Dynamic websites or Web applications. PHP stands for Hypertext Pre-processor, that earlier stood for Personal Home Pages. PHP scripts can only be interpreted on a server that has PHP installed. The client computers accessing the PHP scripts require a web browser only.', 'php---Thumbnail-1200-x-630.jpg'),
('m7', 'j++is a new language', 'javais a oracle production.', 'Nature-logo-design-vectors-03.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `feedback` text NOT NULL,
  `date` datetime NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `feedback`, `date`, `status`) VALUES
(27, 'Dishani', 'dishadishani65@gmail.com', 'Your website is so amazing', '2022-12-06 14:18:39', 'seen'),
(28, 'Rihnis', 'sitharihnis@gmail.com', 'Your web page is local', '2022-12-06 14:40:47', 'seen'),
(29, 'Manal', 'rihnisahamed2000@gmail.com', 'Your web page is original', '2022-12-06 14:41:30', 'seen'),
(30, 'rihnis', 'sitharihnis@gmail.com', 'you profies are super', '2022-12-07 12:19:04', 'seen'),
(31, 'sitha', 'sitharihnis@gmail.com', 'your teamis super', '2022-12-07 12:20:27', 'seen'),
(32, 'sitha', 'sitharihnis@gmail.com', 'super super', '2022-12-07 12:36:53', 'seen'),
(33, 'amrish', 'amrishcareem12@gmail.com', 'hi', '2022-12-07 19:55:00', 'seen'),
(34, 'Raqeeba', 'sitharihnis@gmail.com', 'hi it is a new message', '2022-12-09 11:42:10', 'seen'),
(35, 'Python', 'sitharihni@gmail.com', 'dfdgdgrhg', '2022-12-09 12:12:49', 'seen'),
(36, 'Raqeeba', 'sitharihni@gmail.com', 'hi hi hello', '2022-12-09 12:17:37', 'seen'),
(37, 'labak', 'aaai@gmail.com', 'dsvcfdsvdf', '2022-12-09 12:19:01', 'seen'),
(38, 'Raqeeba', 'sitharihnis@gmail.com', 'dsgfdgbh', '2022-12-09 12:20:09', 'seen'),
(39, 'sreen sithara', 'sitharihnis@gmail.com', 'vbfbfb', '2022-12-14 12:36:15', 'seen'),
(40, 'Rihnis', 'sitharihni@gmail.com', 'hi hi', '2022-12-30 12:21:11', 'seen'),
(41, 'Rihnis', 'sitharihni@gmail.com', 'hi hello maathayaa', '2023-01-02 09:25:31', 'seen'),
(42, 'Rihnis', 'sitharihnis@gmail.com', 'rvfergvtg', '2023-01-02 12:21:45', 'seen'),
(43, 'Rihnis', 'sitharihnis@gmail.com', 'bfgtrbhyhyt', '2023-01-02 12:25:18', 'seen'),
(44, 'Rihnis', 'sitharihnis@gmail.com', 'hi hi hello', '2023-01-02 12:27:48', 'seen'),
(45, 'Rihnis', 'sitharihnis@gmail.com', 'hgthnhnjyy', '2023-01-02 12:28:55', 'seen'),
(46, 'Rihnis', 'sitharihnis@gmail.com', 'hi hi hello', '2023-01-02 12:30:01', 'seen'),
(47, 'sreen sithara', 'sitharihnis@gmail.com', 'fbgfbgfbt', '2023-01-02 12:34:12', 'seen'),
(48, 'Rihnis', 'sitharihnis@gmail.com', 'laabakshi', '2023-01-02 12:36:34', 'seen'),
(57, 'labak', 'sitharihnis@gmail.com', 'iulytytytytytytytytytyt', '2023-01-07 02:01:06', 'seen'),
(58, 'Rihnis', 'dishadishani65@gmail.com', 'Hi Hi HEllo', '2023-01-12 09:55:28', 'seen'),
(59, 'Rihnis', 'sitharihnis@gmail.com', 'hi hi', '2023-01-12 13:16:07', 'seen'),
(61, 'Dishani', 'dishadishani65@gmail.com', 'super', '2023-01-31 12:05:21', 'seen'),
(62, 'Dishani', 'dishadishani65@gmail.com', 'good', '2023-01-31 12:07:02', 'seen'),
(63, 'Rihnis', 'sitharihnis@gmail.com', 'hi hi hello', '2023-02-01 12:34:17', 'seen'),
(64, 'Rihnis', 'sitharihnis@gmail.com', 'HI hello', '2023-02-02 09:52:15', 'seen'),
(65, 'Rihnis', 'sitharihnis@gmail.com', 'good', '2023-02-02 09:57:13', 'seen'),
(66, 'Rihnis', 'sitharihnis@gmail.com', 'hi', '2023-02-02 10:37:07', 'seen');

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` int(11) NOT NULL,
  `mid` varchar(10) NOT NULL,
  `mname` varchar(25) NOT NULL,
  `status` text NOT NULL,
  `adminid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `mid`, `mname`, `status`, `adminid`) VALUES
(19, 'm1', 'Java', 'active', 'sitharihnis@gmail.com'),
(20, 'm2', 'C#', 'active', 'rihnisahamed2000@gmail.com'),
(29, 'm3', 'My SQL', 'active', 'dishadishani65@gmail.com'),
(30, 'm4', 'HTML ', 'active', 'birunthajinimano@gmail.com'),
(31, 'm5', 'Java Script', 'active', 'birunthajinimano@gmail.com'),
(32, 'm6', 'PHP 5.0', 'active', 'litlearningteam@gmail.com'),
(33, 'm7', 'j++', 'active', 'rihnisahamed2000@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `mid` varchar(5) NOT NULL,
  `cat` varchar(25) NOT NULL,
  `catid` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `mid`, `cat`, `catid`) VALUES
(1, 'm1', 'Loop', 'm1Loop'),
(2, 'm1', 'Loop', 'm1Loop'),
(3, 'm1', 'Loop', 'm1Loop'),
(4, 'm1', 'Loop', 'm1Loop'),
(5, 'm1', 'Switch', 'm1Switch'),
(6, 'm2', 'Basic', 'm2Hello Wo'),
(7, 'm2', 'IF', 'm2IF'),
(8, 'm2', 'IF', 'm2IF'),
(9, 'm2', 'IF', 'm2IF'),
(10, 'm2', 'IF', 'm2IF'),
(11, 'm2', 'IF', 'm2IF'),
(12, 'm2', 'IF', 'm2IF'),
(13, 'm2', 'Loop', 'm2Loop'),
(14, 'm2', 'Loop', 'm2Loop'),
(15, 'm2', 'Loop', 'm2Loop'),
(16, 'm2', 'Loop', 'm2Loop'),
(17, 'm2', 'Array', 'm2Array'),
(18, 'm2', 'Returns', 'm2Returns'),
(19, 'm3', 'Table', 'm3Table'),
(20, 'm4', 'Table', 'm4Table'),
(21, 'm6', 'Loop', 'm6Loop'),
(23, 'm1', 'Loop', 'm1Loop'),
(24, 'm1', 'IF', 'm1IF'),
(25, 'm1', 'IF', 'm1IF'),
(26, 'm1', 'IF', 'm1IF'),
(27, 'm1', 'IF', 'm1IF'),
(28, 'm1', 'IF', 'm1IF');

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE `resources` (
  `id` int(11) NOT NULL,
  `modulename` varchar(15) NOT NULL,
  `catid` varchar(10) NOT NULL,
  `srcfile` text NOT NULL,
  `srcimage` text NOT NULL,
  `screenshot` text NOT NULL,
  `title` varchar(50) NOT NULL,
  `notes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`id`, `modulename`, `catid`, `srcfile`, `srcimage`, `screenshot`, `title`, `notes`) VALUES
(1, 'Java', 'm1Loop', 'while.java', 'https://www.youtube.com/embed/g8GcFboF2rM', 'while.JPG', 'While', '   While loop is a control flow statement that allows code to be executed repeatedly based on a given Boolean condition., \r\n\r\nThe while loop can be thought of as a repeating if statement.,\r\n\r\nIt is used for iterating a part of the program several times., \r\n\r\nWhen the number of iteration is not fixed then while loop is used.,\r\n\r\nWhile loop executes till the condition becomes false.the while loop is that the loop might not ever run. When the expression is tested and the result is false, the loop body will be skipped and the first statement after the while loop will be executed.,'),
(2, 'Java', 'm1Loop', 'Dowhile.java', 'https://www.youtube.com/embed/2E-UgePiOoo', 'Dowhile.JPG', 'Do While', '  In Java, the do-while loop is used to execute a part of the program again and again., \r\n\r\n	do-while loop is an Exit control loop., \r\n\r\n	If the number of iteration is not fixed then the do-while loop is used., \r\n\r\n	This loop executes at least once because the loop is executed before the condition is checked., \r\n\r\n	Therefore, unlike for or while loop, a do-while check for the condition after executing the statements or the loop body., '),
(3, 'Java', 'm1Loop', 'Forloop.java', 'https://www.youtube.com/embed/GwcisLY5avc', 'forloop.JPG', 'For Loop', 'The for loop in java is used to iterate and evaluate a code multiple times., \r\n\r\nA for loop is a repetition control structure that allows you to efficiently write a loop that needs to execute a specific number of times., \r\n\r\nWhen the number of iterations is known by the user, it is recommended to use the for loop., \r\n\r\nIn java there are 3 types of for loops, they are as follows:, \r\n	1. Simple for loop, \r\n	2. For-each loop, \r\n	3. labelled for loop,'),
(4, 'Java', 'm1Switch', 'switch.txt', 'https://www.youtube.com/embed/wcwWlasmLWs', 'switch.png', 'Switch', 'The switch statement provides another way to decide which statement to execute next , The switch statement evaluates an expression and then attempts to match the result with several cases., The match must be an exact match. The Switch Statement'),
(5, 'C sharp', 'm2Hello Wo', '1.txt', 'https://www.youtube.com/embed/7kFlcPKky7o', '1.JPG', 'Hello World', 'Hello world is a basic program,When we do as a first program C# starting stage.,'),
(6, 'C sharp', 'm2IF', 'if.txt', 'https://www.youtube.com/embed/pSPQnXleaS8', 'if.JPG', 'Simple IF', 'The if section of the statement or statement block is executed when the condition is true, if it is false, control executes the code in the else statement or statement block. ,The else portion of the statement is optional.,\r\n'),
(7, 'C sharp', 'm2IF', 'if-else-if.txt', 'https://www.youtube.com/embed/UXeDS20wr60', 'if-else-if.JPG', 'If Else If', 'An if..else statement can have more if and else., The following code snippet uses an if.. and else if statement to check another condition., In this case; if the first if condition is not true; the program control goes to the next else..if condition and if this condition is not true also, then the control statement goes the last else part of the code.,\r\n\r\n\r\n\r\n'),
(8, 'C sharp', 'm2IF', 'if-else.txt', 'https://www.youtube.com/embed/-icJ_shKuNM', 'if-else.JPG', 'Else if', 'C sharp if else statement is a common selection statement., The if else in C sharp statement checks a Boolean expression and executes the code based on if the expression is true or false.,The if part of the code executes when the value of the expression is true.,The else part of the code is executed when the value of the expression is false.,The else part of the if..else is optional.,\r\n'),
(9, 'C sharp', 'm2IF', 'nested-if.txt', 'https://www.youtube.com/embed/kZUdRFWV5Wg', 'nested-if.JPG', 'Nested IF', 'C sharp supports if else statements inside another if else statements., This are called nested if else statements., The nested if statements make the code more readable.,\r\nYou can have nested if . . .else statements with one or more else blocks.,Nested if can be used in both the if and else parts of the statement.,The following code sample uses a nested if inside the else block.,You can use multiple nested if statements.,\r\n\r\n'),
(10, 'C sharp', 'm2Loop', 'while.txt', 'https://www.youtube.com/embed/uqMbyuATj2Y', 'while.JPG', 'While', 'The test condition is given in the beginning of the loop and all statements are executed till the given boolean condition satisfies when the condition becomes false, the control will be out from the while loop.,\r\n\r\n'),
(11, 'C sharp', 'm2Loop', 'dowhile.txt', 'https://www.youtube.com/embed/D17mX2tBCPg', 'dowhile.JPG', 'Do While', 'Do while loop is similar to while loop with the only difference that it checks the condition after executing the statements, i.e it will execute the loop body one time for sure because it checks the condition after executing the statements.,\r\n'),
(12, 'C sharp', 'm2Loop', 'forwhile.txt', 'https://www.youtube.com/embed/h4hY2hho73Q', 'forwhile.JPG', 'For Loop', 'For loop has similar functionality as while loop but with different syntax.,for loops are preferred when the number of times loop statements are to be executed is known beforehand.,The loop variable initialization,condition to be tested,and increment o decrement of the loop variable is done in one line in for loop thereby providing a shorter,easy to debug structure of looping,\r\n'),
(13, 'C sharp', 'm2Array', 'array.txt', 'https://www.youtube.com/embed/IHMmPVEOT64', 'array.JPG', 'Array', 'You can store multiple variables of the same type in an array data structure.,You declare an array by specifying the type of its elements.,If you want the array to store elements of any type,you can specify object as its type.,In the unified type system of C sharp, all types, predefined and user-defined, reference types and value types, inherit directly o indirectly from Object.,\r\n'),
(14, 'C sharp', 'm2Returns', 'return-value.txt', 'https://www.youtube.com/embed/QQaFiwtFYFI', 'return-value.JPG', 'Returns Value', 'Methods can return a value to the caller.,If the return type  is not void, the method can return the value by using the return statement., A statement with the return keyword followed by a value that matches the return type will return that value to the method caller.,\r\n\r\n'),
(15, 'C sharp', 'm2Method', 'm-overloading.txt', 'https://www.youtube.com/embed/1w9JYK9d6uY', 'm-overloading.JPG', 'Method Overloading', 'when a class has 2 or more method by the same name but different parameters, it is known as method overloading.,\r\nMethod overloading allows programmers to use multiple methods with the same name.,The methods are differentiated with their number and type of method arguments. Method overloading is an example of the polymorphism feature of an object oriented programming language.,\r\n \r\nMethod overloading can be achieved by the following:,\r\nBy changing number of parameters in a method,\r\nBy changing the order of parameters in a method,\r\nBy using different data types for parameters,\r\n'),
(17, 'HTML 5', 'm4Table', 'colspan.txt', 'https://www.youtube.com/embed/hoFo_TaDiO4', 'colspan.JPG', 'TR', 'colspan is merge columns,this is second one'),
(18, 'PHP', 'm6Loop', 'while.txt', 'https://www.youtube.com/embed/hoFo_TaDiO4', 'while.png', 'While', 'yigtgfdhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh'),
(22, 'Java', 'm1IF', 'else if.txt', 'https://www.youtube.com/embed/5v1w0V4GPrE', 'elseif.JPG', 'else if', ' The if-else statement is used for testing conditions@\r\n\r\n It is used for true as well as for false condition@ \r\n\r\n If then Else statement provides two paths@ \r\n\r\n The if block is executed when the condition holds true. When the condition evaluates to false, the statements inside the else block are executed@'),
(23, 'Java', 'm1IF', 'Nested_if.java', 'https://www.youtube.com/embed/6sYZDA8JPhk', 'Nested if.JPG', 'Nested IF', 'Nested if refers to an if statement within an if statement.@ \r\n\r\nWhen we write an inner if condition within an outer if condition; then it is referred to as a nested if statement in java.@\r\n\r\nNested if is a decision-making statement that works similar to other decision-making statements such as if; else; if..else; etc.@ \r\n\r\nIt executes a block of code if the condition written within the if statement is true.@ \r\n\r\nHowever in the nested-if statement the block of code is placed inside another if block.@\r\n\r\nAnd the inner block of code will execute only when the outer condition holds true.@\r\n\r\nTherefore we use the nested if statement to evaluate more than one condition in a program and return multiple values depending on the test condition.@'),
(24, 'Java', 'm1IF', 'if.txt', '', 'if.JPG', 'simple if', 'The Java if statement is used to test the condition.@ \r\nIt checks Boolean condition: true or false.'),
(25, 'Java', 'm1IF', 'else if.txt', 'https://www.youtube.com/embed/hoFo_TaDiO4', 'elseif.JPG', 'else if', 'The if-else statement is used for testing conditions@\r\n\r\n It is used for true as well as for false condition. \r\n\r\n If then Else statement provides two paths.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `vote`
--

CREATE TABLE `vote` (
  `id` int(11) NOT NULL,
  `vote` varchar(25) NOT NULL,
  `delid` int(5) NOT NULL,
  `voterid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auditacounts`
--
ALTER TABLE `auditacounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cgd`
--
ALTER TABLE `cgd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD UNIQUE KEY `mid` (`mid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mid` (`mid`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vote`
--
ALTER TABLE `vote`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `auditacounts`
--
ALTER TABLE `auditacounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cgd`
--
ALTER TABLE `cgd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `vote`
--
ALTER TABLE `vote`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
