-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2022 at 06:39 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookselfdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(40) NOT NULL,
  `author` varchar(30) NOT NULL,
  `genre` varchar(20) NOT NULL,
  `dateofpublished` varchar(10) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` varchar(11) NOT NULL,
  `bestdeal` varchar(15) NOT NULL,
  `picture` varchar(25) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `genre`, `dateofpublished`, `quantity`, `price`, `bestdeal`, `picture`, `description`) VALUES
(1, 'The Lost Diary of Anne Frank', 'Johnny Teague', 'History', '2020-11-01', 25, '8.49', 'Amazon', '19788_bookself_pic.jpg', 'The Diary of Anne Frank is a seminal piece of twentieth-century literature. It recounts the tragic and moving story of a young Jewish teenager faced with the horrors of Nazism. In it, Anne establishes a bond with her readers that transcends both time and space, making them her friends and confidants. Readers feel a connection with each dream she had, each fear she endured, and each struggle she confronted. Her diary ended, but her story did not. The Lost Diary of Anne Frank picks up where her original journal left off, taking the reader on a credible journey through the tragic final months of her life, faithfully adhering to her own, very personal, diary format in the process.'),
(3, 'Alices Adventures in Wonderland', 'Lewis Carroll', 'Fantasy', '1871-12-27', 10, '6.95', 'Barnes&Noble', '544890_bookself_pic.jpg', 'When Alice sees a white rabbit take a watch out of its waistcoat pocket she decides to follow it, and a sequence of most unusual events is set in motion. This mini book contains the entire topsy-turvy stories of Alices Adventures in Wonderland and Through the Looking-Glass, accompanied by practical notes and Martina Pelouso memorable full-colour illustrations.'),
(4, 'The Adventures of Sherlock Holmes', ' Sir Arthur Conan Doyle', 'Mystery', '1892-10-14', 20, '9.95', 'Barnes&Noble', '825772_bookself_pic.jpg', 'With each spine-tingling mystery, the legend of Sherlock Holmes comes to life. Page by page, Holmes uses his uncanny deductive skills to solve the toughest of cases. After reading this classic collection, you’ll discover why this eccentric detective from 221B Baker Street in London rose to celebrity status throughout the world. This book includes such favorites as The Red-Headed League, Five Orange Pips, and Adventure of the Speckled Band.'),
(5, 'The Great Gatsby', 'F. Scott Fitzgerald', 'Fiction', '1925-04-10', 20, '5.85', 'Amazon', '637443_bookself_pic.jpg', 'The Great Gatsby, F. Scott Fitzgerald third book, stands as the supreme achievement of his career. This exemplary novel of the Jazz Age has been acclaimed by generations of readers. The story of the fabulously wealthy Jay Gatsby and his love for the beautiful Daisy Buchanan, of lavish parties on Long Island at a time when The New York Times noted as gin was the national drink and sex the national obsession, it is an exquisitely crafted tale of America in the 1920s.'),
(6, 'The Fault in Our Stars', 'John Green', 'Romance', '2012-01-10', 15, '11.69', 'Barnes&Noble', '645404_bookself_pic.jpg', 'Despite the tumor-shrinking medical miracle that has bought her a few years, Hazel has never been anything but terminal, her final chapter inscribed upon diagnosis. But when a gorgeous plot twist named Augustus Waters suddenly appears at Cancer Kid Support Group, Hazels story is about to be completely rewritten. Insightful, bold, irreverent, and raw, The Fault in Our Stars is award-winning author John Greens most ambitious and heartbreaking work yet, brilliantly exploring the funny, thrilling, and tragic business of being alive and in love.'),
(7, 'Anne of Green Gables', 'L.M. Montgomery', 'Fiction', '1908-06-01', 10, '7.99', 'Amazon', '282176_bookself_pic.jpg', 'This heartwarming story has beckoned generations of readers into the special world of Green Gables, an old-fashioned farm outside a town called Avonlea. Anne Shirley, an eleven-year-old orphan, has arrived in this verdant corner of Prince Edward Island only to discover that the Cuthberts—elderly Matthew and his stern sister, Marilla—want to adopt a boy, not a feisty redheaded girl. But before they can send her back, Anne—who simply must have more scope for her imagination and a real home—wins them over completely. A much-loved classic that explores all the vulnerability, expectations, and dreams of a child growing up, Anne of Green Gables is also a wonderful portrait of a time, a place, a family… and, most of all, love.'),
(8, 'Atomic Habits', 'James Clear', 'Nonfiction', '2018-10-16', 10, '22.99', 'Goodread', '995472_bookself_pic.jpg', 'No matter your goals, Atomic Habits offers a proven framework for improving—every day. James Clear, one of the worlds leading experts on habit formation, reveals practical strategies that will teach you exactly how to form good habits, break bad ones, and master the tiny behaviors that lead to remarkable results. If you are having trouble changing your habits, the problem is not you. The problem is your system. Bad habits repeat themselves again and again not because you do not want to change, but because you have the wrong system for change. You do not rise to the level of your goals. You fall to the level of your systems. Here, you will get a proven system that can take you to new heights.'),
(9, 'Becoming', 'Michelle Obama', 'Autobiography', '2018-11-13', 18, '15.99', 'Barnes&Noble', '406536_bookself_pic.jpg', 'In a life filled with meaning and accomplishment, Michelle Obama has emerged as one of the most iconic and compelling women of our era. As First Lady of the United States of America—the first African American to serve in that role—she helped create the most welcoming and inclusive White House in history, while also establishing herself as a powerful advocate for women and girls in the U.S. and around the world, dramatically changing the ways that families pursue healthier and more active lives, and standing with her husband as he led America through some of its most harrowing moments. Along the way, she showed us a few dance moves, crushed Carpool Karaoke, and raised two down-to-earth daughters under an unforgiving media glare.'),
(10, 'Dracula', 'Bram Stoker', 'Horror', '1897-05-26', 10, '13.49', 'Amazon', '868924_bookself_pic.jpg', 'A rich selection of background and source materials is provided in three areas: Contexts includes probable inspirations for Dracula in the earlier works of James Malcolm Rymer and Emily Gerard. Also included are a discussion of Stokers working notes for the novel and Draculas Guest, the original opening chapter to Dracula. Reviews and Reactions reprints five early reviews of the novel. Dramatic and Film Variations focuses on theater and film adaptations of Dracula, two indications of the novels unwavering appeal. David J. Skal, Gregory A. Waller, and Nina Auerbach offer their varied perspectives. Checklists of both dramatic and film adaptations are included.'),
(11, 'The Girl with the Dragon Tattoo', 'Stieg Larsson', 'Mystery', '2005-08-01', 9, '15.54', 'Barnes&Noble', '696858_bookself_pic.jpg', 'Harriet Vanger, a scion of one of Swedens wealthiest families disappeared over forty years ago. All these years later, her aged uncle continues to seek the truth. He hires Mikael Blomkvist, a crusading journalist recently trapped by a libel conviction, to investigate. He is aided by the pierced and tattooed punk prodigy Lisbeth Salander. Together they tap into a vein of unfathomable iniquity and astonishing corruption. An international publishing sensation, Stieg Larssons The Girl with the Dragon Tattoo combines murder mystery, family saga, love story, and financial intrigue into one satisfyingly complex and entertainingly atmospheric novel.'),
(12, 'Percy Jackson and the Olympians', 'Rick Riordan', 'Fantasy', '2005-06-28', 12, '7.99', 'Goodread', '261116_bookself_pic.jpg', 'Percy Jackson is a good kid, but he cannot seem to focus on his schoolwork or control his temper. And lately, being away at boarding school is only getting worse - Percy could have sworn his pre-algebra teacher turned into a monster and tried to kill him. When Percys mom finds out, she knows it is time that he knew the truth about where he came from, and that he go to the one place he will be safe. She sends Percy to Camp Half Blood, a summer camp for demigods (on Long Island), where he learns that the father he never knew is Poseidon, God of the Sea. Soon a mystery unfolds and together with his friends—one a satyr and the other the demigod daughter of Athena - Percy sets out on a quest across the United States to reach the gates of the Underworld (located in a recording studio in Hollywood) and prevent a catastrophic war between the gods.'),
(13, 'Crime and Punishment', 'Fyodor Dostoevsky', 'Classics', '1866-01-01', 10, '12.95', 'Barnes&Noble', '805122_bookself_pic.jpg', 'Raskolnikov, a destitute and desperate former student, wanders through the slums of St Petersburg and commits a random murder without remorse or regret. He imagines himself to be a great man, a Napoleon: acting for a higher purpose beyond conventional moral law. But as he embarks on a dangerous game of cat and mouse with a suspicious police investigator, Raskolnikov is pursued by the growing voice of his conscience and finds the noose of his own guilt tightening around his neck. Only Sonya, a downtrodden sex worker, can offer the chance of redemption.'),
(14, 'I Am Malala', 'Malala Yousafzai', 'Biography', '2012-11-01', 25, '16.99', 'Amazon', '138850_bookself_pic.jpg', 'I come from a country that was created at midnight. When I almost died it was just after midday. When the Taliban took control of the Swat Valley in Pakistan, one girl spoke out. Malala Yousafzai refused to be silenced and fought for her right to an education. On Tuesday, October 9, 2012, when she was fifteen, she almost paid the ultimate price. She was shot in the head at point-blank range while riding the bus home from school, and few expected her to survive. Instead, Malalas miraculous recovery has taken her on an extraordinary journey from a remote valley in northern Pakistan to the halls of the United Nations in New York. At sixteen, she has become a global symbol of peaceful protest and the youngest-ever Nobel Peace Prize laureate. I Am Malala is the remarkable tale of a family uprooted by global terrorism, of the fight for girls education, of a father who, himself a school owner, championed and encouraged his daughter to write and attend school, and of brave parents who have a fierce love for their daughter in a society that prizes sons.'),
(15, 'Einstein', 'Walter Isaacson', 'Biography', '2007-04-10', 23, '18.49', 'Goodread', '626462_bookself_pic.jpg', 'Einstein was a rebel and nonconformist from boyhood days, and these character traits drove both his life and his science. In this narrative, Walter Isaacson explains how his mind worked and the mysteries of the universe that he discovered. The full title of the book is Einstein: His Life and Universe.'),
(16, 'The Watchmakers', 'Harry Lenga & Scott Lenga', 'Nonfiction', '2022-06-01', 30, '28.00', 'Barnes&Noble', '498027_bookself_pic.jpg', 'Told through interviews with his son, watchmaker Harry Lengas extraordinary memoir of endurance, faith, and a unique skill that kept three brothers together--and alive--during the darkest times of World War II. Inspiring. Exhilarating. Astonishing. An epic tale of brotherhood, ingenuity, and survival. --Heather Dune Macadam, International Bestselling author of 999: The Extraordinary Young Women of the First Official Jewish Transport to Auschwitz. The full name of the book is The Watchmakers: A Story of Brotherhood, Survival, and Hope Amid the Holocaust.'),
(17, 'The Time Travelers Wife', 'Audrey Niffenegger', 'Romance', '2003-07-05', 15, '16.98', 'Amazon', '643208_bookself_pic.jpg', 'A funny, often poignant tale of boy meets girl with a twist: what if one of them could not stop slipping in and out of time? Highly original and imaginative, this debut novel raises questions about life, love, and the effects of time on relationships. Audrey Niffeneggers innovative debut, The Time Travelers Wife, is the story of Clare, a beautiful art student, and Henry, an adventuresome librarian, who have known each other since Clare was six and Henry was thirty-six, and were married when Clare was twenty-three and Henry thirty-one. Impossible but true, because Henry is one of the first people diagnosed with Chrono-Displacement Disorder: periodically his genetic clock resets and he finds himself misplaced in time, pulled to moments of emotional gravity in his life, past and future. His disappearances are spontaneous, his experiences unpredictable, alternately harrowing and amusing.'),
(18, 'Life of Pi', 'Yann Martel', 'Fantasy', '2001-09-11', 12, '14.99', 'Barnes&Noble', '48776_bookself_pic.jpg', 'Life of Pi is a fantasy adventure novel by Yann Martel published in 2001. The protagonist, Piscine Molitor -Pi- Patel, a Tamil boy from Pondicherry, explores issues of spirituality and practicality from an early age. He survives 227 days after a shipwreck while stranded on a boat in the Pacific Ocean with a Bengal tiger named Richard Parker.'),
(19, 'Twilight', 'Stephenie Meyer', 'Fantasy', '2005-10-05', 12, '15.29', 'Goodread', '333471_bookself_pic.jpg', 'About three things I was absolutely positive. First, Edward was a vampire. Second, there was a part of him—and I did not know how dominant that part might be—that thirsted for my blood. And third, I was unconditionally and irrevocably in love with him. Deeply seductive and extraordinarily suspenseful, Twilight is a love story with bite. Twilight is the first book of the series named The Twilight Saga.');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(40) NOT NULL,
  `book` int(11) NOT NULL,
  `pic` varchar(25) NOT NULL,
  `time` varchar(25) NOT NULL,
  `review` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `email`, `book`, `pic`, `time`, `review`) VALUES
(1, 'Rohan Thapa', 'rohanthapa632@gmail.com', 3, 'male.jpg', '2022-07-05 06:43:23am', 'This is just the test on the review of the book.'),
(2, 'User One', 'user@email.com', 9, 'female.jpg', '2022-07-05 07:01:17am', 'Hey what has happened'),
(3, 'User One', 'user@email.com', 9, 'female.jpg', '2022-07-05 07:02:44am', 'What are you doing'),
(4, 'User One', 'user@email.com', 9, 'female.jpg', '2022-07-05 07:03:21am', 'How'),
(5, 'Rohan Thapa', 'rohanthapa632@gmail.com', 1, 'male.jpg', '2022-07-05 05:29:16pm', 'Most important thing is, this book is very good for the starter. It has got various incident mentioned which deals with the history also. It is a must read book.'),
(6, 'Rohan Thapa', 'rohanthapa632@gmail.com', 1, 'male.jpg', '2022-07-06 05:29:06am', 'hello world '),
(7, 'User One', 'user@email.com', 3, 'female.jpg', '2022-07-06 05:34:03am', 'hello'),
(8, 'Rohan Thapa', 'rohanthapa632@gmail.com', 6, 'male.jpg', '2022-07-06 05:39:11am', 'Good book\r\n'),
(9, 'Rohan Thapa', 'rohanthapa632@gmail.com', 1, 'male.jpg', '2022-07-06 05:48:44am', 'hey'),
(10, 'Rohan Thapa', 'rohanthapa632@gmail.com', 4, 'male.jpg', '2022-07-06 09:41:53am', 'This is just a test review'),
(11, 'Rohan Thapa', 'rohanthapa632@gmail.com', 4, 'male.jpg', '2022-07-06 06:07:03am', 'Hello\r\n'),
(12, 'Rohan Thapa', 'rohanthapa632@gmail.com', 4, 'male.jpg', '2022-07-06 06:15:04am', 'This is a great book.'),
(13, 'Rohan Thapa', 'rohanthapa632@gmail.com', 5, 'male.jpg', '2022-07-07 08:17:50am', 'I really appreciate this book\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `phnum` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `birthday` varchar(10) NOT NULL,
  `privilege` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `gender`, `phnum`, `password`, `birthday`, `privilege`) VALUES
(2, 'Rohan', 'Thapa', 'rohanthapa632@gmail.com', 'male', '+977-9804022398', 'c916d142f0dc7f9389653a164f1d4e9d', '2001-05-21', 'admin'),
(3, 'User', 'One', 'user@email.com', 'female', '+91-872839472', 'ee11cbb19052e40b07aac0ca060c23ee', '2000-11-03', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `websitecmt`
--

CREATE TABLE `websitecmt` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `cmt` text NOT NULL,
  `time` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `websitecmt`
--

INSERT INTO `websitecmt` (`id`, `name`, `email`, `cmt`, `time`) VALUES
(5, 'Rohan Thapa', 'rohanthapa632@gmail.com', 'Hey what is up yar... This is just test for the message for the admin section.', '2022-07-05 05:22:03am'),
(9, 'Kushal Poudel', 'kushalpoudel196@gmail.com', 'I love you\r\n', '2022-07-07 08:16:37am');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `websitecmt`
--
ALTER TABLE `websitecmt`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `websitecmt`
--
ALTER TABLE `websitecmt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
