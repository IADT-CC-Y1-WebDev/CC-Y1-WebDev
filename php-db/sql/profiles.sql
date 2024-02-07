
CREATE TABLE `profiles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `age` int(3) NOT NULL,
  `category` varchar(32) CHARACTER SET utf8mb4 NOT NULL,
  `experience` varchar(16) CHARACTER SET utf8mb4 NOT NULL,
  `languages` varchar(255) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `profiles` (`id`, `name`, `age`, `category`, `experience`, `languages`) VALUES
(1, 'Ms. Marilie Ferry', 18, 'Sport', 'Expert', 'Spanish'),
(2, 'Mrs. Lois Lehner', 32, 'Sport', 'Competent', 'English,Spanish'),
(3, 'Jamel Bayer', 73, 'Movies', 'Competent', 'English,Irish'),
(4, 'Lucius Rempel', 81, 'Sport', 'Expert', 'Irish,Spanish'),
(5, 'Micaela Aufderhar V', 96, 'Music', 'Novice', 'English'),
(6, 'Dallin Jaskolski', 79, 'Movies', 'Expert', 'Irish'),
(7, 'Marcelina Rogahn', 33, 'Music', 'Competent', 'English,Irish'),
(8, 'Christopher Runolfsson I', 41, 'Movies', 'Competent', 'English,Irish'),
(9, 'Duncan Lueilwitz', 68, 'Music', 'Novice', 'English,Spanish'),
(10, 'Viva Tromp', 43, 'Music', 'Expert', 'English,Irish'),
(11, 'Elmo Kulas', 79, 'Sport', 'Expert', 'English,Irish'),
(12, 'Morton Cummerata', 84, 'Music', 'Novice', 'Spanish'),
(13, 'Meagan Kohler', 82, 'Music', 'Expert', 'English,Spanish'),
(14, 'Prof. Myah Feest Jr.', 91, 'Sport', 'Competent', 'Irish'),
(15, 'Brandyn Zieme', 51, 'Sport', 'Expert', 'English,Irish'),
(16, 'Gillian Predovic', 69, 'Music', 'Expert', 'Irish');

ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
