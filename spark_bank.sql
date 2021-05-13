SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `sno` int(3) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(8) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `balance` int(8) NOT NULL
);

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
(1, 'Satyam Yadav', 'nandi@gmail.com', 450000),
(2, 'Rahgual', 'raghy480@gmail.com', 760000),
(3, 'Ankit Kumar', 'an2430@srmist.edu.in', 40000),
(4, 'Arpit Rastogi', 'ar4650@srmist.edu.in', 50000),
(5, 'Rohni Singh', 'Rohna@gmail.com', 40000),
(6, 'Jvk chatinaya', 'chatinayar@gmail.com', 30000),
(7, 'vimal Singh', 'vibrant@tcs.com', 57500),
(8, 'Amrita ambani', 'ambani@relaince.com', 49600),
(9, 'khush misra', 'khush@gmail.com', 374100),
(10,'Ashish singh', 'singh@srmist.edu.in', 50300);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;
COMMIT;
