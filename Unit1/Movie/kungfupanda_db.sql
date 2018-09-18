-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2015 at 05:29 AM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kungfupanda_db`
--
CREATE DATABASE IF NOT EXISTS `kungfupanda_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `kungfupanda_db`;

-- --------------------------------------------------------

--
-- Table structure for table `book_categories`
--

DROP TABLE IF EXISTS `book_categories`;
CREATE TABLE IF NOT EXISTS `book_categories` (
  `category_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `category` varchar(20) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `book_categories`
--

INSERT INTO `book_categories` (`category_id`, `category`) VALUES
(1, 'Education'),
(2, 'History'),
(3, 'Science'),
(4, 'Technology');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(70) NOT NULL,
  `isbn` varchar(15) NOT NULL,
  `publish_date` date NOT NULL,
  `publisher` varchar(40) NOT NULL,
  `category` tinyint(4) NOT NULL,
  `image` varchar(120) NOT NULL,
  `description` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `isbn_UNIQUE` (`isbn`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `isbn`, `publish_date`, `publisher`, `category`, `image`, `description`) VALUES
(1, 'Adobe Photoshop CSS6 Digital Classroom', '1118123891', '2012-06-13', 'Wiley', 4, 'http://a4.mzstatic.com/us/r30/Publication/v4/a4/22/9e/a4229e93-5897-4c10-adb7-8219b503a50c/cover225x225.jpeg', 'The Digital Classroom series combines a full-color book with a full-featured DVD, resulting in a complete training package written by expert instructors. Photoshop is the industry standard for image editing, and this guide gets photographers, commercial designers, web developers, fine artists, and serious hobbyists up to speed on the newest version. It includes 13 self-paced lessons that allow you to progress at your own speed, with complete lesson files and tutorials on the DVD. Topics include Camera RAW, masks and layers, retouching, and much more.'),
(2, 'Kaplan MCAT General Chemistry Review', '160978605X', '2012-11-13', 'Kaplan Publishing', 1, 'https://images.gr-assets.com/books/1350302668l/13545399.jpg', 'With 100% new subject review and art, this guide features more practice questions than any other competitor, complete test-targeted review, and commentary from expert Kaplan instructors.<br>This full-color guide features all-new, complete test-targeted general chemistry review for the MCAT, as well as expert commentary and instruction from a top Kaplan teacher. Kaplan MCAT General Chemistry provides more practice questions than any other guide (over 400 questions) along with three full-length chemistry practice sections. Also included are vibrant illustrations, charts, graphs, and diagrams from the pages of Scientific American.'),
(3, 'Cracking the SAT, 2013 Edition', '0307944786', '2012-05-22', 'Princeton Review', 1, 'https://images.gr-assets.com/books/1344368548l/13154866.jpg', 'If you need to know it, it''s in this book! Cracking the SAT, 2013 Edition includes everything you need to know to master the Math, Critical Reading, and Writing sections of the SAT. '),
(4, 'Thomas Jefferson: The Art ot Power', '1400067669', '2012-11-13', 'Random House', 2, 'https://images.gr-assets.com/books/1342043615l/13533740.jpg', 'In this magnificent biography, the Pulitzer Prizeâ€“winning author of American Lion and Franklin and Winston brings vividly to life an extraordinary man and his remarkable times. Thomas Jefferson: The Art of Power gives us Jefferson the politician and president, a great and complex human being forever engaged in the wars of his era. Philosophers think; politicians maneuver. Jeffersonâ€™s genius was that he was both and could do both, often simultaneously. Such is the art of power.'),
(5, 'The Greater Journey: Americans in Paris', '1416571779', '2012-05-15', 'Simon & Schuster', 2, 'https://images.gr-assets.com/books/1368431337l/12365552.jpg', 'In The Greater Journey, he tells the enthralling, inspiringâ€”and until now, untoldâ€”story of the adventurous American artists, writers, doctors, politicians, and others who set off for Paris in the years between 1830 and 1900, hungry to learn and to excel in their work. What they achieved would profoundly alter American history.'),
(6, 'Molecular Biology of the Cell', '0815341059', '2007-11-06', 'Garland Science', 3, 'http://ecx.images-amazon.com/images/I/81qWh1AUsaL._SL1500_.jpg', 'For nearly a quarter century Molecular Biology of the Cell has been the leading cell biology textbook. This tradition continues with the new Fifth Edition, which has been completely revised and updated to describe our current, rapidly advancing understanding of cell biology. To list but a few examples, a large amount of new material is presented on epigenetics; stem cells; RNAi; comparative genomics; the latest cancer therapies; apoptosis (now its own separate chapter); and cell cycle control and the mechanics of M phase (now integrated into one chapter).'),
(7, 'Finite Mathematics (10th Edition) ', ' 0321748999', '2011-07-15', 'Pearson', 1, 'http://ecx.images-amazon.com/images/I/51zGhehIYQL.jpg', 'Finite Mathematics, Tenth Edition, by Lial, Greenwell, and Ritchey, is our most applied text to date, making the math relevant and accessible for students of business, life science, and social sciences. Current applications, many using real data, are incorporated in numerous forms throughout the book, preparing students for success in their professional careers. With this edition, students will find new ways to get involved with the material, such as "Your Turn" exercises and "Apply It" vignettes that encourage active participation.'),
(8, 'The Civil War Battlefield Guide', '0395740126', '1998-11-02', 'Houghton Mifflin Co', 2, 'http://ecx.images-amazon.com/images/I/518GtK6C2%2BL.jpg', 'This new edition of the definitive guide to Civil War battlefields is really a completely new book. While the first edition covered 60 major battlefields, from Fort Sumter to Appomattox, the second covers all of the 384 designated as the "principal battlefields" in the Civil War Sites Advisory Commission Report. As in the first edition, the essays are authoritative and concise, written by such leading historians as James M. McPherson, Stephen W. Sears, Edwin C. Bearss, James I. Robinson, Jr., and Gary W. Gallager. The second edition also features 83 new four-color maps covering the most important battles. The Civil War Battlefield Guide is an essential reference for anyone interested in the Civil War.'),
(9, 'The C++ Programming Language, 4th Edition', '0321563840', '2013-05-19', 'Addison-Wesley Professional', 4, 'http://ecx.images-amazon.com/images/I/51KEqIsBa4L.jpg', 'C++11 has arrived: thoroughly master it, with the definitive new guide from C++ creator Bjarne Stroustrup, C++ Programming Language, Fourth Edition! The brand-new edition of the world''s most trusted and widely read guide to C++, it has been comprehensively updated for the long-awaited C++11 standard. Extensively rewritten to present the C++11 language, standard library, and key design techniques as an integrated whole, Stroustrup thoroughly addresses changes that make C++11 feel like a whole new language, offering definitive guidance for leveraging its improvements in performance, reliability, and clarity. C++ programmers around the world recognize Bjarne Stoustrup as the go-to expert for the absolutely authoritative and exceptionally useful information they need to write outstanding C++ programs. Now, as C++11 compilers arrive and development organizations migrate to the new standard, they know exactly where to turn once more: Stoustrup''s C++ Programming Language, Fourth Edition.'),
(10, 'Java Foundations (3rd Edition) ', '0133370461 ', '2013-03-08', 'Addison-Wesley', 4, 'http://ecx.images-amazon.com/images/I/51QB-ZuHAbL.jpg', 'Inspired by the success of their best-selling introductory programming text, Java Software Solutions, authors Lewis, DePasquale, and Chase now release Java Foundations, Third Edition. This text is a comprehensive resource for instructors who want a two-or three-semester introduction to programming textbook that includes detail on data structures topics. Java Foundations introduces a Software Methodology early on and revisits it throughout to ensure students develop sound program development skills from the beginning. Control structures are covered before writing classes, providing a solid foundation of fundamental concepts and sophisticated topics. '),
(11, 'A Brief History of Time: From the Big Bang to Black Holes ', '0553380168', '1998-09-01', 'Bantam', 3, 'http://ecx.images-amazon.com/images/I/61RD%2BMeYtsL.jpg', 'A landmark volume in science writing by one of the great minds of our time, Stephen Hawking''s book explores such profound questions as: How did the universe begin-and what made its start possible? Does time always flow forward? Is the universe unending-or are there boundaries? Are there other dimensions in space? What will happen when it all ends?\r\n\r\nTold in language we all can understand, A Brief History of Time plunges into the exotic realms of black holes and quarks, of antimatter and "arrows of time," of the big bang and a bigger God-where the possibilities are wondrous and unexpected. With exciting images and profound imagination, Stephen Hawking brings us closer to the ultimate secrets at the very heart of creation.'),
(12, 'Undeniable: Evolution and the Science of Creation', '1250007135 ', '2014-11-04', ' St. Martin''s Pres', 3, 'http://ecx.images-amazon.com/images/I/51jIthhp2HL.jpg', '"Evolution is one of the most powerful and important ideas ever developed in the history of science. Every question it raises leads to new answers, new discoveries, and new smarter questions. The science of evolution is as expansive as nature itself. It is also the most meaningful creation story that humans have ever found." -- Bill Nye'),
(13, 'How We Got to Now: Six Innovations That Made the Modern World', '1594632960 ', '2014-09-30', 'Riverhead Hardcover', 3, 'http://ecx.images-amazon.com/images/I/81JaldAmMiL.jpg', 'In this illustrated history, Steven Johnson explores the history of innovation over centuries, tracing facets of modern life (refrigeration, clocks, and eyeglass lenses, to name a few) from their creation by hobbyists, amateurs, and entrepreneurs to their unintended historical consequences. Filled with surprising stories of accidental genius and brilliant mistakes - from the French publisher who invented the phonograph before Edison but forgot to include playback, to the Hollywood movie star who helped invent the technology behind Wi-Fi and Bluetooth—How We Got to Now investigates the secret history behind the everyday objects of contemporary life.'),
(14, 'Where Good Ideas Come From', '1594485380', '2011-10-04', 'Riverhead Trade', 3, 'http://ecx.images-amazon.com/images/I/41OyN%2BFRajL.jpg', 'The printing press, the pencil, the flush toilet, the battery--these are all great ideas. But where do they come from? What kind of environment breeds them? What sparks the flash of brilliance? How do we generate the breakthrough technologies that push forward our lives, our society, our culture? Steven Johnson''s answers are revelatory as he identifies the seven key patterns behind genuine innovation, and traces them across time and disciplines. From Darwin and Freud to the halls of Google and Apple, Johnson investigates the innovation hubs throughout modern time and pulls out the approaches and commonalities that seem to appear at moments of originality.'),
(15, 'Learning PHP, MySQL & JavaScript: With jQuery, CSS & HTML5', '978-1491918661', '2014-12-14', 'O''Reilly Media', 4, 'http://ecx.images-amazon.com/images/I/81Q0deul8FL.jpg', 'This book is for people who wish to learn how to create effective and dynamic websites. This may include webmasters or graphic designers who are already creating static websites but wish to take their skills to the next level, as well as high school and college students, recent graduates, and self-taught individuals. In fact, anyone ready to learn the fundamentals behind the Web 2.0 technology known as Ajax will obtain a thorough grounding in all of these core technologies: PHP, MySQL, JavaScript, CSS, and HTML5, and learn the basics of the jQuery library too. '),
(16, 'PHP and MySQL Web Development', '0672329166', '2008-10-11', 'Addison-Wesley Professional', 4, 'http://ecx.images-amazon.com/images/I/51AigeIv7OL._SX387_BO1,204,203,200_.jpg', 'PHP and MySQL are popular open-source technologies that are ideal for quickly developing database-driven Web applications. PHP is a powerful scripting language designed to enable developers to create highly featured Web applications quickly, and MySQL is a fast, reliable database that integrates well with PHP and is suited for dynamic Internet-based applications.'),
(17, 'PHP Advanced and Object-Oriented Programming: Visual QuickPro Guide', '0321832183', '2012-09-23', 'Peachpit Press', 4, 'http://ecx.images-amazon.com/images/I/51ruNhq9asL._SX382_BO1,204,203,200_.jpg', 'Readers can take their PHP skills to the next level with this fully revised and updated PHP Advanced: Visual QuickPro Guide, Third Edition! Filled with fourteen chapters of step-by-step content and written by bestselling author and PHP programmer Larry Ullman, this guide teaches specific topics in direct, focused segments, shows how PHP is used in real-world applications. The book teaches developing web applications using advanced PHP techniques and advanced database concepts, and this edition offers several chapters devoted to object-oriented programming and all-new chapters on debugging, testing, and performance. Author hosts a popular companion website at larryullman.com, where readers can freely download code used in the book, access a user forum and book updates, and get advice directly from the author.'),
(18, 'Java: A Beginner''s Guide, Sixth Edition', '0071809252', '2014-05-06', 'McGraw-Hill Education', 4, 'http://ecx.images-amazon.com/images/I/51bSQY6AZhL._SX404_BO1,204,203,200_.jpg', 'Fully updated for Java Platform, Standard Edition 8 (Java SE 8), Java: A Beginner''s Guide, Sixth Edition gets you started programming in Java right away. Bestselling programming author Herb Schildt begins with the basics, such as how to create, compile, and run a Java program. He then moves on to the keywords, syntax, and constructs that form the core of the Java language. This Oracle Press resource also covers some of Java''s more advanced features, including multithreaded programming, generics, and Swing. Of course, new Java SE 8 features such as lambda expressions and default interface methods are described. An introduction to JavaFX, Java''s newest GUI, concludes this step-by-step tutorial.');

-- --------------------------------------------------------

--
-- Table structure for table `cds`
--

DROP TABLE IF EXISTS `cds`;
CREATE TABLE IF NOT EXISTS `cds` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `artist` varchar(25) NOT NULL,
  `release_date` date NOT NULL,
  `genre` varchar(10) NOT NULL,
  `cover` varchar(25) NOT NULL,
  `tracks` smallint(6) NOT NULL,
  `description` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

DROP TABLE IF EXISTS `games`;
CREATE TABLE IF NOT EXISTS `games` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `publisher` varchar(45) NOT NULL,
  `release_year` year(4) NOT NULL,
  `genre` varchar(10) NOT NULL,
  `platform` varchar(10) NOT NULL,
  `cover` varchar(45) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `title`, `publisher`, `release_year`, `genre`, `platform`, `cover`, `description`) VALUES
(1, 'Wii Sports', 'Nietendo', 2006, 'Sports', 'Wii', 'wii_sports.jpg', 'Wii Sports is a sports game developed by Nintendo EAD and released on Wii.'),
(2, 'Super Mario Bros', 'Nintendo', 1985, 'Platform', 'NES', 'super_mario_bros.jpg', 'All new ways to Play and share your Mario Fun! New Super Mario Bros. & is a new, side-scrolling adventure featuring Mario, Luigi, Toad.... And your Mii character! Now''s your chance to step inside the Mushroom Kingdom and explore new worlds, new power-ups and new ways to play.'),
(3, 'The Sims', 'Electronic Arts', 2000, 'Simulation', 'PC', 'sims.jpg', 'Let your Sims swim in the ocean on a hot summer day, bob for apples in the autumn leaves, test their snowboarding skill on the half pipe, or welcome spring showers with a walk in the rain and a colorful umbrella. All-new activities, like soccer, and big seasonal festivals and celebrations bring the spirit of each season to life. Your Sims can pucker up at the kissing booth at the spring festival, or see what Halloween surprises await in the haunted house. Dress for the weather with seasonal fashions from sun dresses to raincoats and snow gear. With new foods, dÃ©cor and weather effects, your Sims can enjoy the bounty and beauty of the ever-changing seasons and play with life like never before!'),
(4, 'Call of Duty: Modern Warfare 2', 'Activision', 2009, 'Shooter', 'PS3', 'call_of_duty.jpg', 'Call of Duty: Modern Warfare 3 is a first-person shooter video game, developed by Infinity Ward and Sledgehammer Games, with Raven Software having assisted in development. It is the third installment in the Modern Warfare series, a direct sequel to 2009''s Call of Duty: Modern Warfare 2, and the eighth Call of Duty installment.'),
(5, 'Halo 3', 'Microsoft Games Studio', 2007, 'Shooter', 'XBOX 360', 'halo3.jpg', 'Halo 3 is a first-person shooter game developed by Bungie for the Xbox 360. It was announced at E3 2006 with a real-time cinematic trailer. It was released on September 25, 2007 in North America, September 26, 2007 in Europe and September 27, 2007 in Japan.<br>irst-day sales of Halo 3 reached $170 million in the U.S, setting a record for highest gross of an entertainment product within 24 hours of its release. The performance beat the previous record setter - Halo 2 - which earned $125 million within 24 hours after its launch.'),
(6, 'Grand of Theft Auto IV', 'Take-Two Interactive', 2008, 'Action', 'PS3', 'grand_theft_auto_iv.jpg', 'Grand Theft Auto: IV is the sixth 3D open-world game in the Grand Theft Auto franchise. It was released on the Xbox 360 and PS3 on April 29, 2008, and on the PC/Games For Windows port by Rockstar Toronto on 2/3 December 2008. <br>The new Rockstar Advanced Game Engine is used in the game, introducing the new era of the Grand Theft Auto franchise. It featured the first protagonist not to have been born or raised in North America, and became the best-selling game on launch day upon initial release.'),
(7, 'Just Dance 3', 'Ubisoft', 2011, 'Misc', 'Wii', 'just_dance_3.jpg', 'The world''s #1 dance game* is back and the party is bigger than ever! The new Just Dance 3 gives a new twist to the already spontaneous and outrageous dance game. Just Dance 3 kick-starts the party with over 40 tracks from multiple genres and popular artists including today''s hottest hits like "Party Rock Anthem" by LMFAO, "California Gurls" by Katy Perry featuring Snoop Dogg, and "Forget You" by Cee Lo Green. Also included are legendary favorites like "I Was Made For Lovin'' You" by Kiss. With a variety of all-new gameplay modes, tracks that allow up to 4 dancers to uniquely shine, and innovative cardio training options, Just Dance 3 was made to bring the party and keep America dancing!'),
(8, 'Wii Play', 'Nintendo', 2006, 'Misc', 'Wii', 'wii_play.jpg', 'Wii Play is a misc game developed by Nintendo EAD and released on Wii.'),
(9, 'Battlefield 3', 'Electronic Arts', 2011, 'Shooter', 'XBOX 360', 'battlefield_3.jpg', 'Battlefield 3 is a first-person shooter developed by EA DICE and published by Electronic Arts. It was first revealed in Game Informer magazine on February 3rd 2011, and was released in North America on October 25th 2011. It is the first main series Battlefield game to feature a single-player mode, and the eleventh Battlefield game in total.'),
(10, 'World of Warcraft', 'Activision', 2004, 'Role-playi', 'PC', 'world_of_warcraft.jpg', 'World of Warcraft is a massively multiplayer online role-playing game (MMORPG) developed and published by Blizzard Entertainment. It is the fourth installment in the Warcraft series, and Blizzard''s first game in the MMORPG genre. The game takes place in the world of Azeroth, approximately four years after the events of Warcraft III: The Frozen Throne. Since its release on November 23rd, 2004, the 10th anniversary of the Warcraft franchise, the game has achieved massive levels of success. In December 2011, Blizzard announced that there were over 10 million active subscriptions to World of Warcraft around the world. It is currently the most popular MMORPG in the world.The game has received three expansion sets so far, with a fourth one in development. The first expansion set, called The Burning Crusade, was released on Januray 16th, 2007. The second expansion, Wrath of the Lich King, was released on Novermber 13th, 2008, and the third expansion, Cataclysm, was released on December 7th, 2010. The fourth expansion, called Mists of Pandaria, is currently in a closed beta testing phase.'),
(11, 'Tetris', 'Nintendo', 1988, 'Puzzle', 'NES', 'tetris.jpg', 'Tetris is a puzzle game developed by Bullet Proof Software and released on Game Boy, iOS, Nintendo Entertainment System, PlayStation 3, WonderSwan.'),
(12, 'Red Dead Redemption', 'Take-Two Interactive', 2010, 'Action', 'PS3', 'red_dead_redemption.jpg', 'Red Dead Redemption is a open world action-adventure game with a Western theme, released on May 18, 2010. The game revolutionized the Spaghetti Western video game genre and how the Old West is viewed to the average gamer, with use of Rockstar Games'' RAGE engine, used in Grand Theft Auto: IV two years prior. <br>The game chronicles the story of an outlaw by the name of John Marston, and the sequel to Red Dead Revolver, released six years after the initial release of the Red Dead franchise in 2004.');

-- --------------------------------------------------------

--
-- Table structure for table `movie_ratings`
--

DROP TABLE IF EXISTS `movie_ratings`;
CREATE TABLE IF NOT EXISTS `movie_ratings` (
  `rating_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `rating` varchar(10) NOT NULL,
  PRIMARY KEY (`rating_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `movie_ratings`
--

INSERT INTO `movie_ratings` (`rating_id`, `rating`) VALUES
(1, 'G'),
(2, 'PG'),
(3, 'PG-13'),
(4, 'R'),
(5, 'NR');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

DROP TABLE IF EXISTS `movies`;
CREATE TABLE IF NOT EXISTS `movies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(60) NOT NULL,
  `rating` smallint(10) NOT NULL,
  `release_date` date NOT NULL,
  `director` varchar(45) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=59 ;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `title`, `rating`, `release_date`, `director`, `image`, `description`) VALUES
(1, 'The Shawshank Redemption', 3, '1994-10-14', 'Ric Roman Waugh', 'the_shawshank_redemption.jpg', 'Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.'),
(2, 'The Godfather', 4, '1972-03-24', 'Francis Ford Coppola', 'the_godfather.jpg', 'The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son.'),
(3, 'The Godfather II', 4, '1974-12-20', 'Francis Ford Coppola', 'the_godfather_ii.jpg', 'The early life and career of Vito Corleone in 1920s New York is portrayed while his son, Michael, expands and tightens his grip on his crime syndicate stretching from Lake Tahoe, Nevada to pre-revolution 1958 Cuba.'),
(4, 'The Dark Knight', 3, '2008-07-18', 'Christopher Nolan', 'the_dark_knight.jpg', 'When Batman, Gordon and Harvey Dent launch an assault on the mob, they let the clown out of the box, the Joker, bent on turning Gotham on itself and bringing any heroes down to his level.'),
(5, 'Inception', 3, '2010-07-16', 'Christopher Nolan', 'inception.jpg', 'In a world where technology exists to enter the human mind through dream invasion, a highly skilled thief is given a final chance at redemption which involves executing his toughest job to date: Inception.'),
(6, 'Chocolat', 4, '2001-01-19', 'Lasse Hallstrom', 'chocolat.jpg', 'A woman and her daughter open a chocolate shop in a small French village that shakes up the rigid morality of the community.'),
(7, 'Raiders of the Lost Ark', 2, '1981-06-12', 'Steven Spielberg', 'raiders_of_the_lost_ark.jpg', 'Archeologist and adventurer Indiana Jones is hired by the US government to find the Ark of the Covenant before the Nazis.'),
(8, 'Life is Beautiful', 3, '1999-02-12', 'Roberto Benigni', 'life_is_beautiful.jpg', 'A Jewish man has a wonderful romance with the help of his humour, but must use that same quality to protect his son in a Nazi death camp.'),
(9, 'Aladdin', 1, '1992-11-25', 'Ron Clements', 'aladdin.jpg', 'Aladdin, a street urchin, accidentally meets Princess Jasmine, who is in the city undercover. They love each other, but she can only marry a prince.'),
(10, 'Secret of the Wings', 1, '2012-08-16', 'Roberts Gannaway', 'secret_of_the_wings.jpg', 'Tinker Bell meets Periwinkle and ventures into the winter woods with her and Tinker Bell\\''s other friends to find the secret of fairy wings.'),
(11, 'Rio 2', 1, '2014-04-11', 'Carlos Saldanha', 'http://www.moviepdb.net/posters/2014/02/pP4rvXS8M5VgqAAg4rIDTzO5Dyd.jpg', 'It''s a jungle out there for Blu, Jewel and their three kids after they''re hurtled from Rio de Janeiro to the wilds of the Amazon. As Blu tries to fit in, he goes beak-to-beak with the vengeful Nigel, and meets the most fearsome adversary of all: his father-in-law.'),
(47, 'Transformers: Age of Extinction', 3, '2014-06-27', 'Michael Bay', 'https://image.tmdb.org/t/p/w185/ykIZB9dYBIKV13k5igGFncT5th6.jpg', 'As humanity picks up the pieces, following the conclusion of "Transformers: Dark of the Moon," Autobots and Decepticons have all but vanished from the face of the planet. However, a group of powerful, ingenious businessman and scientists attempt to learn from past Transformer incursions and push the boundaries of technology beyond what they can control - all while an ancient, powerful Transformer menace sets Earth in his cross-hairs.'),
(13, 'Frozen', 2, '2013-11-19', 'Chris Buck, Jennifer Lee', 'http://www.moviepdb.net/posters/2014/02/44a1esVlfFHstPoEUnCmTejZzli.jpg', 'Young princess Anna of Arendelle dreams about finding true love at her sister Elsa''s coronation. Fate takes her on a dangerous journey in an attempt to end the eternal winter that has fallen over the kingdom. She''s accompanied by ice delivery man Kristoff, his reindeer Sven, and snowman Olaf. On an adventure where she will find out what friendship, courage, family, and true love really means.'),
(14, 'Big Hero 6', 2, '2014-10-22', 'Don Hall, Chris Williams', 'https://image.tmdb.org/t/p/w185/yzZqtlGzsfnevAL7bnutcCCcKN.jpg', 'The special bond that develops between plus-sized inflatable robot Baymax, and prodigy Hiro Hamada, who team up with a group of friends to form a band of high-tech heroes.'),
(15, 'The Terminator', 4, '1984-10-26', 'James Cameron', 'https://image.tmdb.org/t/p/w185/q8ffBuxQlYOHrvPniLgCbmKK4Lv.jpg', 'In the post-apocalyptic future, reigning tyrannical supercomputers teleport a cyborg assassin known as the "Terminator" back to 1984 to kill Sarah Connor, whose unborn son is destined to lead insurgents against 21st century mechanical hegemony. Meanwhile, the human-resistance movement dispatches a lone warrior to safeguard Sarah. Can he stop the virtually indestructible killing machine?'),
(16, 'Let''s Be Cops', 4, '2014-08-13', 'Luke Greenfield', 'https://image.tmdb.org/t/p/w185/8GVU8AaYpxiIS462SZgAtjh02pm.jpg', 'It''s the ultimate buddy cop movie except for one thing: they''re not cops. When two struggling pals dress as police officers for a costume party, they become neighborhood sensations. But when these newly-minted "heroes" get tangled in a real life web of mobsters and dirty detectives, they must put their fake badges on the line.'),
(17, 'The Avengers', 3, '2012-05-04', 'Joss Whedon', 'https://image.tmdb.org/t/p/w185/cezWGskPY5x7GaglTTRN4Fugfb8.jpg', 'When an unexpected enemy emerges and threatens global safety and security, Nick Fury, director of the international peacekeeping agency known as S.H.I.E.L.D., finds himself in need of a team to pull the world back from the brink of disaster. Spanning the globe, a daring recruitment effort begins!'),
(18, 'The Hunger Games: Catching Fire', 3, '2013-11-22', 'Francis Lawrence', 'https://image.tmdb.org/t/p/w185/tAhSyLxpaZJCr1oc2a3flvC2B7x.jpg', 'Katniss Everdeen has returned home safe after winning the 74th Annual Hunger Games along with fellow tribute Peeta Mellark. Winning means that they must turn around and leave their family and close friends, embarking on a "Victor''s Tour" of the districts. Along the way Katniss senses that a rebellion is simmering, but the Capitol is still very much in control as President Snow prepares the 75th Annual Hunger Games (The Quarter Quell) - a competition that could change Panem forever.'),
(19, 'Star Wars: Episode IV - A New Hope', 2, '1977-05-25', 'George Lucas', 'https://image.tmdb.org/t/p/w185/tvSlBzAdRE29bZe5yYWrJ2ds137.jpg', 'Princess Leia is captured and held hostage by the evil Imperial forces in their effort to take over the galactic Empire. Venturesome Luke Skywalker and dashing captain Han Solo team together with the loveable robot duo R2-D2 and C-3PO to rescue the beautiful princess and restore peace and justice in the Empire.'),
(20, 'Iron Man 3', 3, '2013-05-03', 'Shane Black', 'https://image.tmdb.org/t/p/w185/1Ilv6ryHUv6rt9zIsbSEJUmmbEi.jpg', 'The brash-but-brilliant industrialist Tony Stark faces an enemy whose reach knows no bounds. When Stark finds his personal world destroyed at his enemy''s hands, he embarks on a harrowing quest to find those responsible. This journey, at every turn, will test his mettle. With his back against the wall, Stark is left to survive by his own devices, relying on his ingenuity and instincts to protect those closest to him. As he fights his way back, Stark discovers the answer to the question that has secretly haunted him: does the man make the suit or does the suit make the man?'),
(21, 'The Lord of the Rings: Fellowship of the Ring', 3, '2001-12-19', 'Peter Jackson', 'https://image.tmdb.org/t/p/w185/9HG6pINW1KoFTAKY3LdybkoOKAm.jpg', 'Young hobbit Frodo Baggins, after inheriting a mysterious ring from his uncle Bilbo, must leave his home in order to keep it from falling into the hands of its evil creator. Along the way, a fellowship is formed to protect the ringbearer and make sure that the ring arrives at its final destination: Mt. Doom, the only place where it can be destroyed.'),
(22, 'St. Vincent', 3, '2014-10-31', 'Theodore Melfi', 'https://image.tmdb.org/t/p/w185/rGPGa0UpML8HTZsCPtvJp1uKdal.jpg', 'A young boy whose parents just divorced finds an unlikely friend and mentor in the misanthropic, bawdy, hedonistic, war veteran who lives next door.'),
(23, 'Avatar', 3, '2009-12-18', 'James Cameron', 'https://image.tmdb.org/t/p/w185/tcqb9NHdw9SWs2a88KCDD4V8sVR.jpg', 'In the 22nd century, a paraplegic Marine is dispatched to the moon Pandora on a unique mission, but becomes torn between following orders and protecting an alien civilization.'),
(24, 'Star Wars Episode III - Revenge of the Sith', 3, '2005-05-19', 'George Lucas', 'https://image.tmdb.org/t/p/w185/tgr5Pdy7ehZYBqBkN2K7Q02xgOb.jpg', '(19 Years before Episode IV) Three years after the onset of the Clone Wars, the Jedi Knights have been leading the clone army into a galaxy-wide war against the Separatists. Only by embracing the Dark Side can Anakin Skywalker end the war and -- He believes -- Save the woman he loves.'),
(25, 'Forest Gump', 3, '1994-06-22', 'Robert Zemeckis', 'https://image.tmdb.org/t/p/w185/y3EsNpMFwvpcucLmx4HiiRRhCXV.jpg', 'A man with a low IQ has accomplished great things in his life and been present during significant historic events - in each case, far exceeding what anyone imagined he could do. Yet, despite all the things he has attained, his one true love eludes him. ''Forrest Gump'' is the story of a man who rose above his challenges, and who proved that determination, courage, and love are more important than ability.'),
(26, 'Saving Private Ryan ', 4, '1998-07-24', 'Steven Spielberg', 'https://image.tmdb.org/t/p/w185/gc7IN6bWNaWXv4vI6cxSmeB7PeO.jpg', 'As U.S. troops storm the beaches of Normandy, three brothers lie dead on the battlefield, with a fourth trapped behind enemy lines. Ranger captain John Miller and seven men are tasked with penetrating German-held territory and bringing the boy home.'),
(27, 'The Green Mile ', 4, '1999-12-10', 'Frank Darabont', 'https://image.tmdb.org/t/p/w185/3yJUlOtVa09CYJocwBU8eAryja0.jpg', 'A supernatural tale set on death row in a Southern prison, where gentle giant John Coffey possesses the mysterious power to heal people''s ailments. When the cellblock''s head guard, Paul Edgecomb, recognizes Coffey''s miraculous gift, he tries desperately to help stave off the condemned man''s execution.'),
(28, 'Road to Perdition', 4, '2002-07-12', 'Sam Mendes', 'https://image.tmdb.org/t/p/w185/jn0GH8klINSQtRNifY8W2Kv4ajl.jpg', 'Mike Sullivan works as a hit man for crime boss John Rooney. Sullivan views Rooney as a father figure, however after his son is witness to a killing, Mike Sullivan finds himself on the run in attempt to save the life of his son and at the same time looking for revenge on those who wronged him.'),
(29, 'The Reader', 4, '2008-12-10', 'Stephen Daldry', 'https://image.tmdb.org/t/p/w185/mEqgCzhGO3gi9DkevgM7N6a5mY3.jpg', 'Tells the story of Michael Berg, a German lawyer who as a teenager in the late 1950s had an affair with an older woman, Hanna, who then disappeared only to resurface years later as one of the defendants in a war crimes trial stemming from her actions as a concentration camp guard late in the war. He alone realizes that Hanna is illiterate and may be concealing that at the expense of her freedom.'),
(30, 'Cold Mountain ', 4, '2003-12-24', 'Anthony Minghella', 'https://image.tmdb.org/t/p/w185/4da24dJQZSGep4FJ2U9jU9G8qJr.jpg', 'Cold Mountain is the film adaptation of the novel by the same name from Charles Frazier. A star-studded film taking place in North Carolina during the Civil War. The film portrays civilian life during the war from the perspective of a woman who has been left behind as the men fight.'),
(31, 'Australia', 3, '2008-11-26', 'Baz Luhrmann', 'https://image.tmdb.org/t/p/w185/rjyseZNRuMiomWbQZt6BQMwyyE2.jpg', 'Set in northern Australia before World War II, an English aristocrat who inherits a sprawling ranch reluctantly pacts with a stock-man in order to protect her new property from a takeover plot. As the pair drive 2,000 head of cattle over unforgiving landscape, they experience the bombing of Darwin, Australia, by Japanese forces firsthand.'),
(32, 'Moulin Rouge', 3, '2001-05-16', 'Baz Luhrmann', 'https://image.tmdb.org/t/p/w185/zsphaxX7NaZyFTYpdlo2yz7q7wy.jpg', 'A poet falls for a beautiful courtesan whom a jealous duke covets in this stylish musical, with music drawn from familiar 20th century sources.'),
(33, 'The Hours ', 3, '2002-12-27', 'Stephen Daldry', 'https://image.tmdb.org/t/p/w185/vRTqBRCLGiZNITXfdhGZd3tZ7Qh.jpg', 'The Hours is a melancholy tragedy based on the book by Virginia Woolf “Mrs. Dalloway” about three women doomed with depression. Director Stephaen Daldry timelessly presents the life and psychotic changes of the exceptional English author which Nichole Kidman won the Oscar for best actress.'),
(34, 'Last Vegas', 3, '2013-11-01', 'Jon Turteltaub', 'https://image.tmdb.org/t/p/w185/ylZnvqSWnGXxFRgDmQ8nihtFBv6.jpg', 'Three sixty-something friends take a break from their day-to-day lives to throw a bachelor party in Las Vegas for their last remaining single pal.'),
(37, 'Olympus Has Fallen', 4, '2013-03-22', 'Antoine Fuqua', 'https://image.tmdb.org/t/p/w185/a2r2mvky2D5QCyYLdu2c3A4LOmb.jpg', 'When the White House (Secret Service Code: "Olympus") is captured by a terrorist mastermind and the President is kidnapped, disgraced former Presidential guard Mike Banning finds himself trapped within the building. As the national security team scrambles to respond, they are forced to rely on Banning''s inside knowledge to help retake the White House, save the President and avert an even bigger disaster.'),
(38, 'How to Train Your Dragon 2', 2, '2014-06-13', 'Dean DeBlois', 'https://image.tmdb.org/t/p/w185/Ak8fnAmoTBkXsdYULWXAZA79XB6.jpg', 'The thrilling second chapter of the epic How To Train Your Dragon trilogy brings back the fantastical world of Hiccup and Toothless five years later. While Astrid, Snotlout and the rest of the gang are challenging each other to dragon races (the island''s new favorite contact sport), the now inseparable pair journey through the skies, charting unmapped territories and exploring new worlds. When one of their adventures leads to the discovery of a secret ice cave that is home to hundreds of new wild dragons and the mysterious Dragon Rider, the two friends find themselves at the center of a battle to protect the peace.'),
(39, 'Howl''s Moving Castle ', 2, '2004-06-10', 'Hayao Miyazaki', 'https://image.tmdb.org/t/p/w185/iMarB2ior30OAXjPa7QIdeyUfM1.jpg', 'When Sophie, a shy young woman, is cursed with an old body by a spiteful witch, her only chance of breaking the spell lies with a self-indulgent yet insecure young wizard and his companions in his legged, walking home.'),
(40, 'The Big Blue', 3, '1988-05-11', 'Luc Besson', 'https://image.tmdb.org/t/p/w185/w4TWqa7SiXP0Hm4rkRnCfXwIeRK.jpg', 'Two men answer the call of the ocean in this romantic fantasy-adventure. Jacques (Jean-Marc Barr) and Enzo (Jean Reno) are a pair of friends who have been close since childhood, and who share a passion for the dangerous sport of free diving. Professional diver Jacques opted to follow in the footsteps of his father, who died at sea when Jacques was a boy; to the bewilderment of scientists, Jacques harbors a remarkable ability to adjust his heart rate and breathing pattern in the water, so that his vital signs more closely resemble that of dolphins than men (he even considers a school of dolphins as his extended family). As Enzo persuades a reluctant Jacques to compete against him in a free diving contest -- determining who can dive deeper and longer without scuba gear -- Jacques meets Johana (Rosanna Arquette), a beautiful insurance investigator from America, and he finds that he must choose between his love for her and his love of the sea.'),
(41, 'Harry Potter and the Philosopher''s Stone', 2, '2001-11-14', 'Chris Columbus', 'https://image.tmdb.org/t/p/w185/uLGaJ9FgPWf7EUgwjp9RTmHemw8.jpg', 'Harry Potter has lived under the stairs at his aunt and uncle''s house his whole life. But on his 11th birthday, he learns he''s a powerful wizard -- with a place waiting for him at the Hogwarts School of Witchcraft and Wizardry. As he learns to harness his newfound powers with the help of the school''s kindly headmaster, Harry uncovers the truth about his parents'' deaths -- and about the villain who''s to blame.'),
(42, 'Harry Potter and the Half-Blood Prince', 2, '2009-07-08', 'David Yates', 'https://image.tmdb.org/t/p/w185/bFXys2nhALwDvpkF3dP3Vvdfn8b.jpg', 'The sixth year at Hogwarts School of Witchcraft and Wizardry kicks off with a bang for young Harry Potter when he inadvertently discovers a mysterious book that sheds light on the sordid life of the evil Lord Voldemort. Preparing for inevitable battle, Harry and Dumbledore turn to professor Horace Slughorn for help in pinpointing the weakness in Voldemort''s forces.'),
(43, 'The Poker House', 4, '2008-06-20', 'Lori Petty', 'https://image.tmdb.org/t/p/w185/nAgFSepes6L6mNYTf4P1vFJdJJn.jpg', 'Actress Lori Petty makes her directorial debut with this poignant, beautifully crafted film about a teenage girl trying to survive the dismal circumstances of her life with dignity, humor, and basketball.'),
(44, 'Catch Me If You Can', 3, '2001-12-25', 'Steven Spielberg', 'https://image.tmdb.org/t/p/w185/MywWCQGJNUr5kivAQ7eseCG7rm.jpg', 'Frank W. Abagnale Jr. is a cunning con man -- posing as a doctor, lawyer and pilot all before turning 21. He''s also a deft forger, and his work attracts the attention of FBI agent Carl Hanratty, who makes it his mission to put Frank behind bars. But Frank not only eludes capture, he revels in the pursuit, even taking time to taunt Carl by phone.'),
(45, 'The Lake House', 2, '2006-06-16', 'Alejandro Agresti', 'https://image.tmdb.org/t/p/w185/vbh2xjDVcdIMMva0uGeeExEQAv2.jpg', 'A lonely doctor who once occupied an unusual lakeside home begins exchanging love letters with its former resident, a frustrated architect. They must try to unravel the mystery behind their extraordinary romance before it''s too late.'),
(48, 'Kung Fu Panda', 2, '2008-06-05', 'Mark Osborne, John Stevenson', 'https://image.tmdb.org/t/p/w185/nhOMC1WJKAcX1rB9tMfwGyHNhom.jpg', 'When the Valley of Peace is threatened, lazy Po the panda discovers his destiny as the "chosen one" and trains to become a kung fu hero, but transforming the unsleek slacker into a brave warrior won''t be easy. It''s up to Master Shifu and the Furious Five -- Tigress, Crane, Mantis, Viper and Monkey -- to give it a try.'),
(49, 'Kung Fu Panda 2', 2, '2011-05-25', 'Jennifer Yuh', 'https://image.tmdb.org/t/p/w185/9wCrh57WO3mPmn1hWnJRcvdFtIb.jpg', 'Po is now living his dream as The Dragon Warior, protecting the Valley of Peace alongside his friends and fellow kung fu masters, The Furious Five - Tigress, Crane, Mantis, Viper and Monkey. But Poâ€™s new life of awesomeness is threatened by the emergence of a formidable villain, who plans to use a secret, unstoppable weapon to conquer China and destroy kung fu. It is up to Po and The Furious Five to journey across China to face this threat and vanquish it. But how can Po stop a weapon that can stop kung fu? He must look to his past and uncover the secrets of his mysterious origins; only then will he be able to unlock the strength he needs to succeed.'),
(50, 'Kung Fu Panda Holiday', 1, '2010-11-26', 'Tim Johnson', 'https://image.tmdb.org/t/p/w185/ji51A2qDENo3w9aTJJHYDgx9uWs.jpg', 'The Winter Feast is Po''s favorite holiday. Every year he and his father hang decorations, cook together, and serve noodle soup to the villagers. But this year Shifu informs Po that as Dragon Warrior, it is his duty to host the formal Winter Feast at the Jade Palace. Po is caught between his obligations as the Dragon Warrior and his family traditions: between Shifu and Mr. Ping.'),
(51, 'Kung Fu Panda 3', 2, '2016-03-16', 'Jennifer Yuh', 'https://image.tmdb.org/t/p/w185/6CEYpd91SWt6NBkjy2apulaBvNm.jpg', 'Continuing his "legendary adventures of awesomeness", Po must face two hugely epic, but different threats: one supernatural and the other a little closer to his home.'),
(52, 'Kung Fu Panda: Secrets of the Masters', 5, '2011-12-12', 'Anthony Leondis', 'https://image.tmdb.org/t/p/w185/eH9mYHCU0YoPVyG32Zsxkw1K1lU.jpg', 'Po and the Furious Five uncover the legend of three of kung fu''s greatest heroes: Master Thundering Rhino, Master Storming Ox, and Master Croc.'),
(53, 'Kung Fu Panda: Secrets of the Furious Five', 2, '2008-11-08', 'Raman Hui', 'https://image.tmdb.org/t/p/w185/pLWpauSWU9eSS72U6LC8KozNyl6.jpg', 'Ordered to teach a martial arts class of rambunctious bunny kittens, Po tells stories of each of the Furious Five''s pasts.'),
(58, 'American Sniper', 3, '2015-01-16', 'Clint Eastwood', 'http://cdn.screenrant.com/wp-content/uploads/american-sniper-poster.jpg', 'Navy SEAL sniper Chris Kyle''s pinpoint accuracy saves countless lives on the battlefield and turns him into a legend. Back home to his wife and kids after four tours of duty, however, Chris finds that it is the war he can''t leave behind.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `fullname` varchar(45) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
